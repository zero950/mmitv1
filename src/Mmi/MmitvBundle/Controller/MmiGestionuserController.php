<?php

namespace Mmi\MmitvBundle\Controller;

use Mmi\MmitvBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class MmiGestionuserController extends Controller
{

    public function GestionuserAction()
    {

        return $this->render('MmiMmitvBundle:Default:gestionuser.html.twig');

    }

    //Formulaire d'ajout d'utilisateur de l'admin
    public function AddAction(Request $request)
    {

        $client = new User();

        $form = $this->get('form.factory')->createBuilder('form', $client)
            ->add('username',     'text', array('label'=>'Nom', 'attr' => array('class' => 'col-md-4')))
            ->add('client_prenom',  'text')
            ->add('client_pseudo',  'text')
            ->add('client_mdp',     'password')
            ->add('client_admin',   'radio')
            ->add('Envoyer',        'submit')
            ->getForm();


        //Lien entre formulaire et requete
        $form-> handleRequest($request);

        //Verification des entrées de l'utilisateur puis on valide en bdd
        if($form->isValid())
        {
            $em =$this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'utilisateur bien ajouté.');

        }

        //sinon :

        return $this->render('MmiMmitvBundle:Default:adminform.html.twig', array('form' => $form->createView(),));
    }


}