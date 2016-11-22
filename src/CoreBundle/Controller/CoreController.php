<?php

namespace CoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
    /**
     * @Route("/login", name="login")
     * @Template("CoreBundle:Core:login.html.twig")
     */
    public function loginAction(Request $request)
    {

    }
	
	/**
     * @Route("/lostpassword", name="lostpassword")
     * @Template("CoreBundle:Core:lostpassword.html.twig")
     */
    public function lostPasswordAction(Request $request)
    {
		
    }
	
	/**
     * @Route("/register", name="register")
     * @Template("CoreBundle:Core:register.html.twig")
     */
    public function registerAction(Request $request)
    {

    }
}
