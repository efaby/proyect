<?php

namespace Payment\DataAccessBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PaymentDataAccessBundle:Default:index.html.twig', array('name' => $name));
    }
}
