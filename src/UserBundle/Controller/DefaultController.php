<?php

namespace UserBundle\Controller;

use AppBundle\Entity\User;
use UserBundle\Entity\Post;
use UserBundle\Form\ModifprofilType;
use UserBundle\Form\ModifprofilUserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use UserBundle\Form\PhotoprofilType;
use UserBundle\Form\PostArticlesType;
use UserBundle\Form\UserPasswordType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 *
 */
class DefaultController extends Controller
{
    /**
     *@param Request $request
     *
     * @return array
     * @Route()
     * @Method("GET|POST")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $post = new Post();

        $user = $this->getUser();
        $post->setUser($user);

        $form = $this->createForm(PostArticlesType::class, $post);


        if ($form->handleRequest($request)->isValid()){


            $em = $this->getDoctrine()->getManager();


            $em->persist($post);

            $em->flush();

            $this->addFlash('success', 'Article posté !');

            return $this->redirectToRoute('user_default_index');
        }

        return [
            'Postform' => $form->createView(),
            'message' => $post,
            'user' => $user,
        ];
    }


    /**
     * Password
     *
     * @param Request $request
     *
     * @return array
     * @Route("/mon-mot-de-passe")
     * @Method("GET|POST")
     * @Template()
     */
    public function passwordAction(Request $request)
    {

        $user = $this->getUser();
        $form = $this->createForm(UserPasswordType::class, $user);
        if ($form->handleRequest($request)->isValid()) {

            $this->encode($user);

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Mot de passe modifié !');

            return $this->redirectToRoute('user_default_index');
        }

        return [
            'form' => $form->createView(),
        ];

    }

    /**
     * Password
     *
     * @param Request $request
     *
     * @return array
     * @Route("/ma-photo-profil")
     * @Method("GET|POST")
     * @Template()
     */
    public function modifppAction(Request $request)
    {

        $user = $this->getUser();

        $form = $this->createForm(PhotoprofilType::class, $user);
        if ($form->handleRequest($request)->isValid()) {

            $this->upload($user);

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Image modifié !');

            $user->setFile(null);

            return $this->redirectToRoute('user_default_index');
        }

        return [
            'form' => $form->createView(),
        ];

    }


    /**
     * updateStartup
     *
     * @param Request $request
     *
     * @return array
     * @Route("/tiptop-modif-startup")
     * @Method("GET|POST")
     * @Template()
     */
    public function updatestartupAction(Request $request)
    {
        $user = $this->getUser();

            $form = $this->createForm(ModifprofilType::class, $user);
            if ($form->handleRequest($request)->isValid()) {

                $this->upload50x50($user);

                $this->getDoctrine()->getManager()->flush();

                $this->addFlash('success', 'Données sont modifiées !');

                $user->setFile(null);

                return $this->redirectToRoute('user_default_index');
            }

        return [
            'form' => $form->createView(),
        ];

    }

    /**
     * updateStartup
     *
     * @param Request $request
     *
     * @return array
     * @Route("/tiptop-modif-investisseur")
     * @Method("GET|POST")
     * @Template()
     */
    public function updateinvestisseurAction(Request $request)
    {
        $user = $this->getUser();

        $form = $this->createForm(ModifprofilUserType::class, $user);
        if ($form->handleRequest($request)->isValid()) {

            $this->upload($user);

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Données sont modifiées !');

            $user->setFile(null);

            return $this->redirectToRoute('user_default_index');
        }

        return [
            'form' => $form->createView(),
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

    /**
     * Upload file
     * Student = Objet attendu dans cette fonction
     *
     * @param User $user
     */
    private function upload(User $user){
        if (null !== $file = $user->getFile()) {
            $appPath = $this->getParameter('kernel.root_dir');

            $webPath = $appPath . '/../web/';

            $imgProjetPath = $webPath . '/img/photoprofil';

            if (null === $currentPath = $user->getPath()){
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            } else {
                $filename = basename($webPath . $currentPath);
            }

            $file->move($imgProjetPath, $filename);

            $user->setPath('img/photoprofil/' . $filename);
        }

    }


    /**
     * Upload file
     * Student = Objet attendu dans cette fonction
     *
     * @param User $user
     */
    private function upload50x50(User $user){
        if (null !== $file = $user->getFile()) {
            $appPath = $this->getParameter('kernel.root_dir');

            $webPath = $appPath . '/../web/';

            $logo50x50ProjetPath = $webPath . '/img/logo/50x50';

            if (null === $currentPath = $user->getLogo50x50()){

                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            } else {
                $filename = basename($webPath . $currentPath);
            }
            
            $file->move($logo50x50ProjetPath, $filename);

            $user->setLogo50x50('img/logo/50x50/' . $filename);
        }

    }

}
