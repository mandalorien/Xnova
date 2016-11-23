<?php
namespace CoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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
		$user = $this->container->get('security.context')->getToken()->getUser();
		var_dump($user);
		$em = $this->getDoctrine()->getManager();
        if($request->getSession()->get('connexion') === 'ok')
        {
            $this->addFlash('success', 'Connexion réussie');
            $request->getSession()->set('connexion', 'nok');
        }
    }
}