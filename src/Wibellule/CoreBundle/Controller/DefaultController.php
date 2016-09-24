<?php

namespace Wibellule\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WibelluleCoreBundle:Default:index.html.twig');
    }

    public function blogAction()
    {
        //$blogController = $this->get('service_blog_controller');
        return $this->render('WibelluleBlogBundle:Default:index.html.twig');
    }
}
