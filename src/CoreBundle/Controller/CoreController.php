<?php
namespace CoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\RouteCollection ;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
    /**
     * @Template("CoreBundle:Core:index.html.twig")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
		// il faudra instancier les objets ainsi que créer le profil etc qui concerne le joueur ...
		return $this->redirectToRoute('overview');	
    }
}