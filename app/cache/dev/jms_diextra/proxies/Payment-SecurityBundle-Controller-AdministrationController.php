<?php

namespace EnhancedProxy_d9e7e701e8d845e4d484741ea7936890662c7a08\__CG__\Payment\SecurityBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AdministrationController extends \Payment\SecurityBundle\Controller\AdministrationController
{
    private $__CGInterception__loader;

    public function listUsersAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Payment\\SecurityBundle\\Controller\\AdministrationController', 'listUsersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}