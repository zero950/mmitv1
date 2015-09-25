<?php
/**
 * Created by PhpStorm.
 * User: evergreen
 * Date: 24/02/15
 * Time: 12:53
 */


namespace Mmi\MmitvBundle\Controller;

use Mmi\MmitvBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class QDLoginController extends Controller
{

    public function LoginAction()
    {




        return $this->render('MmiMmitvBundle:Default:login.html.twig');

    }

}