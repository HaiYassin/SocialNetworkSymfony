<?php
/**
 * Created by PhpStorm.
 * User: Yassin
 * Date: 31/05/2016
 * Time: 15:32
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     * @Method("GET|POST")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        //Recupération service
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return [
            // last username entered by the user
            'last_username' => $lastUsername,
            'error'         => $error,
        ];
    }
}