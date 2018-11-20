<?php

namespace MonzaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function InscriptionAction()
    {
        return $this->render('@Monza/Default/inscription.html.twig');
    }

    public function ConnectionAction()
    {
    	return $this->render('@Monza/Default/connection.html.twig');
    }
}
