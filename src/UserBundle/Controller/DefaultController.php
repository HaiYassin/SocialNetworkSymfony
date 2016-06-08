<?php

namespace UserBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use UserBundle\Form\PhotoprofilType;
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
     *
     * @return array
     * @Route()
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        return[
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
            // Si le formulaire est valide, on demande à Doctrine
            // de tout enregistrer en base de données.

            $this->encode($user);

            $this->getDoctrine()->getManager()->flush();

            // On ajoute un message Flash pour signaler à l'utilisateur
            // que tout s'est bien passé.
            $this->addFlash('success', 'Mot de passe modifié !');

            // On redirige l'utilisateur vers la page nommée "admin_student_index"
            // Ce qui correspond dans notre cas à la liste des students :
            //
            //     admin   : AdminBundle
            //     student : StudentController
            //     index   : indexAction
            return $this->redirectToRoute('user_default_index');
        }

        // On retourne les variables pour Twig. Ici
        // on met donc à disposition une variable nommée
        // "student" contenant la student à modifier
        // et une autre nommée "form" contenant le
        // formulaire de création.
        //
        // Attention : avant d'envoyer un formulaire à Twig
        // on appelle toujours la méthode createView
        //
        //     $form->createView()
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
            // Si le formulaire est valide, on demande à Doctrine
            // de tout enregistrer en base de données.

            $this->upload($user);

            $this->getDoctrine()->getManager()->flush();

            // On ajoute un message Flash pour signaler à l'utilisateur
            // que tout s'est bien passé.
            $this->addFlash('success', 'Image modifié !');

            $user->setFile(null);

            // On redirige l'utilisateur vers la page nommée "admin_student_index"
            // Ce qui correspond dans notre cas à la liste des students :
            //
            //     admin   : AdminBundle
            //     student : StudentController
            //     index   : indexAction
            return $this->redirectToRoute('user_default_index');
        }

        // On retourne les variables pour Twig. Ici
        // on met donc à disposition une variable nommée
        // "student" contenant la student à modifier
        // et une autre nommée "form" contenant le
        // formulaire de création.
        //
        // Attention : avant d'envoyer un formulaire à Twig
        // on appelle toujours la méthode createView
        //
        //     $form->createView()
        return [
            'form' => $form->createView(),
        ];

    }

    private function encode(User $user)
    {
        //on recupére le service encoder mot de passe de symfony
        $encoder = $this->get('security.password_encoder');

        // on demande à l'encoder d'encoder le mot de passe :
        // -on donne l'étudiant pour qu'il sache comment l'encoder
        //  voir security.yml (clé encoders)
        // -on donne le mdp en clair
        $encoded = $encoder->encodePassword(
            $user,
            $user->getRawPassword()
        );

        /*   dump($encoded);
           dump($student->getRawPassword());
           die;*/

        //on enrengistre le mdp encodé dans l'entité User
        $user->setPassword($encoded);
    }

    /**
     * Upload file
     * Student = Objet attendu dans cette fonction
     *
     * @param User $user
     */
    private function upload(User $user){
        //kernel.root_dir indique le chemin complet depuis la racine
        //
        if (null !== $file = $user->getFile()) {
            $appPath = $this->getParameter('kernel.root_dir');

            //on charge le chemin vers web/
            $webPath = $appPath . '/../web/';

            //on charge le fichier img/
            $imgProjetPath = $webPath . '/img/photoprofil';

            if (null === $currentPath = $user->getPath()){
                //nom de fichier
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            } else {
                $filename = basename($webPath . $currentPath);
            }

            //move 2 arguments : 1 lieu, 2 le nom
            //on deplace notre fichier vers le bon nom
            $file->move($imgProjetPath, $filename);

            $user->setPath('img/photoprofil/' . $filename);
        }

    }

}
