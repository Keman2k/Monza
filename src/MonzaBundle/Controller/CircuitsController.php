<?php

namespace MonzaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MonzaBundle\Entity\circuit;
use Doctrine\ORM\EntityManagerInterface;

class CircuitsController extends Controller
{
    public function circuitsAction()
    {
    	$circuits = $this->getDoctrine()
        ->getRepository(circuit::class)
        ->findAll();

        if (!$circuits) {
            throw $this->createNotFoundException(
                'No products found'
            );
        }
        return $this->render('@Monza/Default/circuits.html.twig', array('circuits' => $circuits));
    }

     public function CircuitAction($circuitId)
    {

        $circuit = $this->getDoctrine()
        ->getRepository(circuit::class)
        ->find($circuitId);

        if (!$circuit) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        return $this->render('@Monza/Default/circuit.html.twig', array('circuit' => $circuit));
    }
}