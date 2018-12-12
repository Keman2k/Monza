<?php

namespace MonzaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QsnController extends Controller
{
    public function QsnAction()
    {
        return $this->render('@Monza/Default/qsn.html.twig');
    }
}
