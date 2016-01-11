<?php

namespace CarRentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CarController extends Controller
{
    public function indexAction()
    {
      // get car table
      $repository = $this->getDoctrine()->getRepository('CarRentalBundle:Car');
      // find all cars from table
      $cars = $repository->findAll();

      // send all cars to index template
      return $this->render('CarRentalBundle:Car:index.html.twig', array('cars' => $cars));

    }

    public function showAction($id)
    {
      // get car table
      $repository = $this->getDoctrine()->getRepository('CarRentalBundle:Car');
      // find car with id
      $car = $repository->find($id);

      return $this->render('CarRentalBundle:Car:show.html.twig', array('car' => $car));
    }

    public function rentAction()
    {
        return $this->render('CarRentalBundle:Car:rent.html.twig', array(
            // ...
        ));
    }

}
