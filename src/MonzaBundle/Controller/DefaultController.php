<?php

namespace MonzaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Monza/Default/index.html.twig');
    }

    public function testAction()
    {

    	// je fais plein de truc ici.

		$number1 = random_int(0, 10);
		$number2 = random_int(0, 10);


		// je donne mon travail à la vue.
    	return $this->render('@Monza/Default/test.html.twig', array('number1' => $number1, 'number2' => $number2));
    }
}
