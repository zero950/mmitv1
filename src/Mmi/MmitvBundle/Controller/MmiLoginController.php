<?php


namespace Mmi\MmitvBundle\Controller;

use Mmi\MmitvBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class MmiLoginController extends Controller
{

    public function LoginAction()
    {




        return $this->render('MmiMmitvBundle:Default:login.html.twig');

    }

}