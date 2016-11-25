<?php

namespace GameBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\RouteCollection ;
use Symfony\Component\HttpFoundation\Request;

class OverviewController extends Controller
{
	/**
     * @Template("GameBundle:Game:overview.html.twig")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/overview", name="overview")
     */
    public function indexAction()
    {

    }
	
	/**
     * @Template("GameBundle:Game:error.html.twig")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/", name="error")
     */
    public function errorAction()
    {

    }
}
