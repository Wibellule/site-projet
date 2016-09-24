<?php

namespace Wibellule\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WibelluleUserBundle:Default:layout.html.twig');
    }
}
