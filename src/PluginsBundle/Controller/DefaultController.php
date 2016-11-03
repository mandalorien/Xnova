<?php

namespace PluginsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PluginsBundle:Default:index.html.twig');
    }
}
