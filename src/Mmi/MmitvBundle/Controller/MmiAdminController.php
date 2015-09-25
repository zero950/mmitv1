<?php

namespace Mmi\MmitvBundle\Controller;

use Mmi\MmitvBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MmiAdminController extends Controller
{

    public function AdminAction()
    {

        return $this->render('MmiMmitv:Default:admin.html.twig');

    }


}