<?php

namespace MonzaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MonzaBundle\Entity\brand;
use Doctrine\ORM\EntityManagerInterface;

class VoitureController extends Controller
{
     public function brandsAction()
    {

# php bin/console doctrine:generate:entity
# php bin/console doctrine:generate:entities AcmeMyBundle:Customer
# php bin/console doctrine:schema:update --force

        $brands = $this->getDoctrine()
        ->getRepository(brand::class)
        ->findAll();

        if (!$brands) {
            throw $this->createNotFoundException(
                'No products found'
            );
        }

        return $this->render('@Monza/Default/brands.html.twig', array('brands' => $brands));
    }

     public function brandAction($brandId)
    {

        $brand = $this->getDoctrine()
        ->getRepository(brand::class)
        ->find($brandId);

        if (!$brand) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        return $this->render('@Monza/Default/brand.html.twig', array('brand' => $brand));
    }

}
