<?php

namespace CarRentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CarRentalBundle:Default:index.html.twig');
    }
}
