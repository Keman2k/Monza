<?php

namespace MonzaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Monza/Default/index.html.twig');
    }

    public function EquipeAction()
    {
        return $this->render('@Monza/Default/equipe.html.twig');
    }
}
