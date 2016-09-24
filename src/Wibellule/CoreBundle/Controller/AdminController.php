<?php

namespace Wibellule\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('WibelluleCoreBundle:Admin:index.html.twig');
    }

}