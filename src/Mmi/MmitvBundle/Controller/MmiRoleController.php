<?php


namespace Mmi\MmitvBundle\Controller;

use Mmi\MmitvBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MmiRoleController extends Controller
{

    public function RoleAdmin()
    {
        $userManager = $this->get('fos_user.user_manager');

        $user->$userManager->setRoles(array("roles" => "ROLE_ADMIN"));

        return $this->render('MmiMmitvBundle:Default:admin.html.twig');// a changer pour la vue du profile

    }


    public function RoleRedac()
    {



    }


}