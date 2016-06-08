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
    /*
    * La méthode createAction demande à recevoir la requète en argument.
    * Pour cela :
    *
    * On ajoute "use Symfony\Component\HttpFoundation\Request;"
    *
    * On ajoute les paramètres dans la signature de la méthode :
    *
    *     Request $request
    *
    * Symfony détecte alors que l'on a besoin de la requète et nous la donne
    * en nous appelant.
    */


    /**
     * @Route()
     * @Method("GET|POST")
     * @Template()
     */
    public function createAction(Request $request){

        // On instancie User.
        // Ne pas oublier d'ajouter "use AppBundle\Entity\User;"
        $user = new User();

        // On crée le formulaire d'inscription (UserType)
        // Ne pas oublier d'ajouter "use AppBundle\Form\UserType;"
        // Le premier argument est le formulaire à créer (UserType)
        // Le second argument est le model à utiliser (un user)
        $form = $this->createForm(UserType::class, $user);

        // On demande au formulaire d'absorber la requète (handleRequest)
        // Puis de valider son contenu.
        if ($form->handleRequest($request)->isValid()){


            $this->encode($user);

            // Si le contenu du formulaire est valide,
            // on récupère Doctrine puis l'Entity Manager
            $em = $this->getDoctrine()->getManager();

            // On demande au Manager de se rappeler de notre
            // user pour la sauvegarder dans le futur.
            $em->persist($user);

            // On flush : demande à Doctrine de réaliser toutes
            // les modifications qu'il a en mémoire (donc de
            // créer définitivement notre user en BDD)
            $em->flush();

            // On ajoute un message Flash pour signaler à l'utilisateur
            // que tout s'est bien passé.
            $this->addFlash('success', 'Utilisateur créée !');

            // On redirige l'utilisateur vers la page nommée "app_user_index"
            // Ce qui correspond dans notre cas à la liste des students :
            //
            //     app     : AppBundle
            //     user    : UserController
            //     index   : indexAction
            return $this->redirectToRoute('app_user_index');
        }


        // On retourne les variables pour Twig. Ici
        // on met donc à disposition une variable nommée
        // "form" contenant le formulaire de création.
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

}