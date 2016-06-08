<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class UserController extends Controller
{
    /**
     * Index
     *
     * @return array
     * @Route()
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }

}

