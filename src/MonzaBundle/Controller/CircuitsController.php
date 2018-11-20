<?php

namespace MonzaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CircuitsController extends Controller
{
    public function CircuitsAction()
    {
        return $this->render('@Monza/Default/circuits.html.twig');
    }

    public function BrandHatchAction()
    {
        return $this->render('@Monza/Default/brand.html.twig');
    }

    public function BugattiAction()
    {
        return $this->render('@Monza/Default/bugatti.html.twig');
    }

    public function CharradeAction()
    {
        return $this->render('@Monza/Default/charrade.html.twig');
    }

    public function DijonAction()
    {
        return $this->render('@Monza/Default/dijon.html.twig');
    }

    public function DoningtonAction()
    {
        return $this->render('@Monza/Default/donington.html.twig');
    }

    public function FioranoAction()
    {
        return $this->render('@Monza/Default/fiorano.html.twig');
    }

    public function HokenheimringAction()
    {
        return $this->render('@Monza/Default/hokenheimring.html.twig');
    }

    public function ImolaAction()
    {
        return $this->render('@Monza/Default/imola.html.twig');
    }

    public function MagnyAction()
    {
        return $this->render('@Monza/Default/magny.html.twig');
    }

    public function MisanoAction()
    {
        return $this->render('@Monza/Default/misano.html.twig');
    }

    public function MonzaAction()
    {
        return $this->render('@Monza/Default/Monza.html.twig');
    }

    public function NordschleifeAction()
    {
        return $this->render('@Monza/Default/nordschleife.html.twig');
    }

    public function NürburgringAction()
    {
        return $this->render('@Monza/Default/nürburgring.html.twig');
    }

    public function PaulAction()
    {
        return $this->render('@Monza/Default/paul.html.twig');
    }

    public function PescaraAction()
    {
        return $this->render('@Monza/Default/pescara.html.twig');
    }

    public function RouenAction()
    {
        return $this->render('@Monza/Default/rouen.html.twig');
    }

    public function VallelungaAction()
    {
        return $this->render('@Monza/Default/vallelunga.html.twig');
    }
}