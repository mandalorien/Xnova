<?php

namespace Plugins\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PluginsCoreBundle:Default:index.html.twig');
    }
}
