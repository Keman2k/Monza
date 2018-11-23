<?php

namespace MonzaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MonzaBundle\Entity\marque;
use Doctrine\ORM\EntityManagerInterface;

class VoitureController extends Controller
{
    public function ferrariAction()
    {
        return $this->render('@Monza/Default/ferrari.html.twig');
    }

     public function marqueAction($marqueId)
    {


# php bin/console doctrine:generate:entity
# php bin/console doctrine:generate:entities AcmeMyBundle:Customer
# php bin/console doctrine:schema:update --force

        $product = $this->getDoctrine()
        ->getRepository(marque::class)
        ->find($marqueId);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        return $this->render('@Monza/Default/brand.html.twig', array('product' => $product));
    }


    public function F40Action()
    {
    	return $this->render('@Monza/Default/f40.html.twig');
    }

    public function F430Action()
    {
    	return $this->render('@Monza/Default/f430.html.twig');
    }

    public function LaferrariAction()
    {
    	return $this->render('@Monza/Default/laferrari.html.twig');
    }

    public function LamborghiniAction()
    {
    	return $this->render('@Monza/Default/lamborghini.html.twig');
    }

    public function GallardoAction()
    {
    	return $this->render('@Monza/Default/gallardo.html.twig');
    }

    public function MurcielagoAction()
    {
    	return $this->render('@Monza/Default/murcielago.html.twig');
    }

    public function PaganiAction()
    {
    	return $this->render('@Monza/Default/pagani.html.twig');
    }

    public function MaseratiAction()
    {
    	return $this->render('@Monza/Default/maserati.html.twig');
    }
}
