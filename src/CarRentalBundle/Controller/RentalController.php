<?php

namespace CarRentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RentalController extends Controller
{
    public function indexAction()
    {
        return $this->render('CarRentalBundle:Rental:index.html.twig', array(
            // ...
        ));
    }

    public function showAction()
    {
        return $this->render('CarRentalBundle:Rental:show.html.twig', array(
            // ...
        ));
    }

    public function reviewAction()
    {
        return $this->render('CarRentalBundle:Rental:review.html.twig', array(
            // ...
        ));
    }

}
