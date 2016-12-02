<?php
namespace CoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\RouteCollection ;
use Symfony\Component\HttpFoundation\Request;
use CoreBundle\Entity\Users;
use CoreBundle\Entity\Profil;
use GameBundle\Entity\Univers;

class CoreController extends Controller
{
    /**
     * @Template("CoreBundle:Core:univers.html.twig")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/", name="selectUnivers")
     */
    public function selectUniversAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		$repository = $this
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('CoreBundle:Profil')
		;

		$profil = $repository->find($user);

		# le formulaire du choix de l'univers !!!!
		
		if(!is_null($profil))
		{
			return $this->redirectToRoute('overview');
		}
		else
		{
			$r = $this
				->getDoctrine()
				->getManager()
				->getRepository('GameBundle:Univers');
			$univers = $r->findOneById(1);
			
			# on créer tous !!!!
			$p = new Profil();
			$p->setIpRegister("127.0.0.1");
			// $p->setIpRegister($this->container->get('request')->getClientIp()); # pour je ne sais quel raison ca ne fonctionne pas :/
			$p->setUsers($user);
			$p->addUniver($univers);
			$em->persist($p);
			$em->flush();
			return $this->redirectToRoute('overview');
		}
			
		# il faudra instancier les objets ainsi que créer le profil etc qui concerne le joueur ...
		# une fois que tout est fait , redirection !
		# return $this->redirectToRoute('overview');	
    }
}