<?php
/**
 * Created by PhpStorm.
 * User: Yassin
 * Date: 30/05/2016
 * Time: 23:04
 */

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class UserController
 *
 * @Route("/inscription")
 */
class DefaultController extends Controller
{
    /**
     * @Route()
     * @Method("GET|POST")
     * @Template()
     */
    public function createAction(Request $request){

        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        if ($form->handleRequest($request)->isValid()){

            $this->encode($user);

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);

            $em->flush();

            $this->addFlash('success', 'Utilisateur créée !');

            return $this->redirectToRoute('login');
        }

        return [
            'form' => $form->createView(),
            'last_username' => $lastUsername,
            'error' => $error, 
        ];
    }

    private function encode(User $user)
    {
        $encoder = $this->get('security.password_encoder');

        $encoded = $encoder->encodePassword(
            $user,
            $user->getRawPassword()
        );

        $user->setPassword($encoded);
    }

}