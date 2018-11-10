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
    	return $this->render('@Monza/Default/test.html.twig');
    }
}
