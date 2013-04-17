<?php

namespace Payment\FinesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PaymentFinesBundle:Default:index.html.twig', array('name' => $name));
    }
}
