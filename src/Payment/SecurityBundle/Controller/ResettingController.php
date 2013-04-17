<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Payment\SecurityBundle\Controller;;

use FOS\UserBundle\Controller\ResettingController as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ResettingController extends BaseController
{
    
    /**
     * Reset user password
     */
    public function resetAction($token)
    {
    	
        $user = $this->container->get('fos_user.user_manager')->findUserByConfirmationToken($token);

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with "confirmation token" does not exist for value "%s"', $token));
        }

        if (!$user->isPasswordRequestNonExpired($this->container->getParameter('fos_user.resetting.token_ttl'))) {
            return new RedirectResponse($this->container->get('router')->generate('fos_user_resetting_request'));
        }

        $form = $this->container->get('fos_user.resetting.form');
        $formHandler = $this->container->get('fos_user.resetting.form.handler');
        $process = $formHandler->process($user);

        if ($process) {
        	
            return new RedirectResponse($this->container->get('router')->generate('fos_user_resetting_reset_active'));
        }

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Resetting:reset.html.'.$this->getEngine(), array(
            'token' => $token,
            'form' => $form->createView(),
           
        ));
    }

    /**
     * Request reset user password: submit form and send email
     */
    public function sendEmailAction()
    {
    	$username = $this->container->get('request')->request->get('username');
    
    	if(!preg_match('/^[a-zA-Z0-9\s\_\-\.\@\/]+$/',$username))
    	{
    		return $this->container->get('templating')->renderResponse('FOSUserBundle:Resetting:request.html.'.$this->getEngine(), array('invalid_username' => $username));
    	}
    	
    	$user = $this->container->get('fos_user.user_manager')->findUserByUsernameOrEmail($username);
    
    	if (null === $user) {
    		return $this->container->get('templating')->renderResponse('FOSUserBundle:Resetting:request.html.'.$this->getEngine(), array('invalid_username' => $username));
    	}
    	
    	if ($user->isEnabled()==0) {
    		return $this->container->get('templating')->renderResponse('FOSUserBundle:Resetting:request.html.'.$this->getEngine(), array('invalid_username' => $username));
    	}
    	
    	if ($user->isPasswordRequestNonExpired($this->container->getParameter('fos_user.resetting.token_ttl'))) {
    		return $this->container->get('templating')->renderResponse('FOSUserBundle:Resetting:passwordAlreadyRequested.html.'.$this->getEngine());
    	}
    
    	if (null === $user->getConfirmationToken()) {
            /** @var $tokenGenerator \FOS\UserBundle\Util\TokenGeneratorInterface */
            $tokenGenerator = $this->container->get('fos_user.util.token_generator');
            $user->setConfirmationToken($tokenGenerator->generateToken());
        }
        
    	$this->container->get('session')->set(static::SESSION_EMAIL, $user->getEmail());
    	$this->container->get('fos_user.mailer')->sendResettingEmailMessage($user);
    	$user->setPasswordRequestedAt(new \DateTime());
    	$this->container->get('fos_user.user_manager')->updateUser($user);
    
    	return new RedirectResponse($this->container->get('router')->generate('fos_user_resetting_check_email'));
    }
    
    /**
     * Funcion que redirecciona la mensaje de confirmacion de almacenamineto de contraseña
     */
    public function activePasswordAction()
    {
    	return $this->container->get('templating')->renderResponse('PaymentSecurityBundle:Resetting:passwordSaveSuccessfull.html.'.$this->getEngine());
    }
}
