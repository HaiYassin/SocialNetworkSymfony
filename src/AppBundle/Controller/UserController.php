<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;

use AppBundle\Form\ContactType;
use AppBundle\Model\Contact;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller
{
    /**
     * Index
     *
     * @return array
     * @Route(name="login")
     * @Method("GET|POST")
     * @Template()
     */
    public function indexAction()
    {

        $user = $this->getUser();
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $repository = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('AppBundle:User');

        $utilisateurs = $repository->findAll();

        return [
            'last_username' => $lastUsername,
            'error' => $error,
            'user' => $user,
            'utilisateurs' => $utilisateurs,
        ];
    }

    /**
     * Contact
     *
     * @param Request $request
     *
     * @return array|RedirectResponse
     * @Route("/contact")
     * @Method("GET|POST")
     * @Template()
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        if ($form->handleRequest($request)->isValid()) {
            $count = $this->get('app.mailer.mailer')->sendContact($contact);
            if (0 < $count) {
                $this->addFlash('success', 'Votre email a bien été envoyé');
            }

            return $this->redirectToRoute('app_user_contact');
        }

        return [
            'form' => $form->createView(),
        ];
    }



}

