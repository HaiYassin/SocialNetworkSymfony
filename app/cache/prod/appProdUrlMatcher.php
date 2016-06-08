<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/mon-espace')) {
            // user_default_index
            if (rtrim($pathinfo, '/') === '/mon-espace') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_default_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_default_index');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_default_index',);
            }
            not_user_default_index:

            if (0 === strpos($pathinfo, '/mon-espace/m')) {
                // user_default_password
                if ($pathinfo === '/mon-espace/mon-mot-de-passe') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_default_password;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::passwordAction',  '_route' => 'user_default_password',);
                }
                not_user_default_password:

                // user_default_modifpp
                if ($pathinfo === '/mon-espace/ma-photo-profil') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_default_modifpp;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::modifppAction',  '_route' => 'user_default_modifpp',);
                }
                not_user_default_modifpp:

            }

        }

        // app_default_create
        if ($pathinfo === '/inscription') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_app_default_create;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createAction',  '_route' => 'app_default_create',);
        }
        not_app_default_create:

        // login
        if ($pathinfo === '/login') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_login;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }
        not_login:

        // app_user_index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_app_user_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_user_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'app_user_index',);
        }
        not_app_user_index:

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
