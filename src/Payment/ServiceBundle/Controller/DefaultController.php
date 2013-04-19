<?php

namespace Payment\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PaymentServiceBundle:Default:index.html.twig', array('name' => $name));
    }
}
