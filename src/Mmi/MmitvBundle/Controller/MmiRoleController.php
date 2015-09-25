<?php
/**
 * Created by PhpStorm.
 * User: evergreen
 * Date: 23/03/15
 * Time: 14:39
 */

namespace Mmi\MmitvBundle\Controller;

use QD\BackBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QDRoleController extends Controller
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