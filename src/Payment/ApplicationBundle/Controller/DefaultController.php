<?php

namespace Payment\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
	/**
	 * @Template()
	 *
	 */
	public function welcomeAction()
	{
		$message = null;
		$user = $this->get('security.context');
		if ($user->isGranted('ROLE_USER'))
		{
			return array();
		}
	
		return $this->redirect($this->generateUrl('_login'));
	}
}
