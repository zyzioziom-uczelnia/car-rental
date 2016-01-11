<?php

namespace CarRentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CarRentalBundle\Entity\Car;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // create new car
        // $car = new Car();
        // $car -> setName('Ford Mustang');
        // $car -> setType('muscle car');
        // $car -> setHorsepower(300);
        // $car -> setColor('red');
        // $car -> setPhoto('none');
        //
        // $em = $this->getDoctrine()->getManager();
        //
        // $em->persist($car);
        // $em->flush();

        // return new Response("Created new car with id ".$car->getID()." Name: ".$car->getName());
        return $this->render('CarRentalBundle:Default:index.html.twig', array('car' => $car));
    }
}
