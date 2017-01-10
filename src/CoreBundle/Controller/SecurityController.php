<?php

namespace CoreBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseController;
use CoreBundle\Entity\Users;
use CoreBundle\Form\RegistrationType;
use CoreBundle\Form\ResetRequestType;
use CoreBundle\Form\ResettingType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security as Role;
use Symfony\Component\HttpFoundation\Request;

class SecurityController  extends BaseController
{
    /**
     * @Route("/connexion", name="login")
     * @Template("CoreBundle:Core:login.html.twig")
	 * @Role("is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     * @param Request $request
     * @return array
     */
    public function loginAction(Request $request){}
	
    /**
     * @Role("is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     * @Route("/login_check", name="login_check")
     * @param Request $request
     * @return array
     */
    public function loginCheckAction(Request $request){}
	
	/**
     * @Role("is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     * @Route("/login_failure", name="login_failure")
     */
    public function loginFailureAction(){
        # erreur de connexion affichage d'une message ?
        return $this->redirect($this->generateUrl('login'));
    }

    /**
     * @Template("CoreBundle:Core:register.html.twig")
     * @Role("is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     * @Route("/enregistrement", name="register")
     */
    public function registerAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
        $users = new Users();

        $form = $this->createForm(RegistrationType::class,$users);
        $form->handleRequest($request);

        if($form->isValid()) {
            $this->hashPassword($users);

			/* faire une méthode d'envoi de mail
			$message = \Swift_Message::newInstance()
				->setSubject('Hello Email')
				->setFrom('send@example.com')
				->setTo('recipient@example.com')
				->setBody(
				$this->renderView(
					'Emails/registration.html.twig',
					array('name' => $name)
				),
				'text/html'
				)
				
				// If you also want to include a plaintext version of the message
				// ->addPart(
					// $this->renderView(
						// 'Emails/registration.txt.twig',
						// array('name' => $name)
					// ),
					// 'text/plain'
				// )
				
			;
			$this->get('mailer')->send($message);*/


            $em->persist($users);
            $univers = $form->get('univers')->getData();
            $users->addUniver($univers);
            $em->flush();

            # un message de succés ?
            return $this->redirect($this->generateUrl('login'));
        }

        return array('form' => $form->createView(), 'errors' => $form->getErrors(true));
    }

    /**
     * @Role("is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     * @Route("/validation/{token}", requirements={"token" = "([^/]+)?"}, name="token_check")
     */
    public function tokenCheckAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('CoreBundle:Users')->findOneByConfirmationToken($token);

        if ($users === null) {
            # dommage le token n'est pas bon
        } else {
            $users->setEnabled(true);
            $users->setConfirmationToken(null);
            # un petit message de reussite ?
        }

        $em->flush();

        return $this->redirect($this->generateUrl('login'));
    }

    private function hashPassword($compte)
    {
        $factory = $this->get('security.encoder_factory');
        $password = $compte->getPassword();
        $encoder = $factory->getEncoder($compte);
        $password_encode = $encoder->encodePassword($password, $compte->getSalt());
        $compte->setPassword($password_encode);
    }

    /**
     * @Template("CoreBundle:Core:password.reset.request.html.twig")
     * @Role("is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     * @Route("/reinitialisation", name="reset_request")
     */
    public function resetRequestAction(Request $request){

    }

    /**
     * @Role("is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     * @Route("/reinitialisation/{token}", requirements={"token" = "([^/]+)?"}, name="reset_password")
     */
    public function resetPasswordAction(Request $request, $token)
    {

    }


    /**
     * @Template("CoreBundle:Core:password.confirm.email.html.twig")
     * @Role("is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     * @return array
     */
    public function confirmEmailAction($email){
        return array('email' => $email);
    }
	
    /**
     * @Template("CoreBundle:Core:logout.html.twig")
	 * @Route("/logout", name="logout")
     * @Role("is_granted('IS_AUTHENTICATED_FULLY')")
     * @return array
     */	
	public function logoutAction(){}
}
