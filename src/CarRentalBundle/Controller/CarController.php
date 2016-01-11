<?php

namespace CarRentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use CarRentalBundle\Entity\Car;

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

    public function rentAction($id)
    {
      // get car table
      $repository = $this->getDoctrine()->getRepository('CarRentalBundle:Car');
      // find car with id
      $car = $repository->find($id);

      return $this->render('CarRentalBundle:Car:rent.html.twig', array('car' => $car));
    }

    public function createAction($name, $type, $color, $horsepower, $photo)
    // example url: create/Volvo/SUV/blue/140/none
    {
      // create new car
      $car = new Car();
      $car -> setName($name);
      $car -> setType($type);
      $car -> setHorsepower($horsepower);
      $car -> setColor($color);
      $car -> setPhoto($photo);

      $em = $this->getDoctrine()->getManager();

      $em->persist($car);
      $em->flush();

      return new Response(var_dump($car));
    }

}
