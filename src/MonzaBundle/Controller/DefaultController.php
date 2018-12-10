<?php

namespace MonzaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Monza/Default/index.html.twig');
    }
<<<<<<< HEAD

    public function testAction()
    {

    	// je fais plein de truc ici.

		$number1 = random_int(0, 10);
		$number2 = random_int(0, 10);


		// je donne mon travail à la vue.
    	return $this->render('@Monza/Default/test.html.twig', array('number1' => $number1, 'number2' => $number2));
    }

    public function voitureAction()
    {

        return $this->render('@Monza/Default/voiture.html.twig')
    }
=======
>>>>>>> a483d47fd4c9b2fcba0dfe29f09a3c375c9575b3
}
