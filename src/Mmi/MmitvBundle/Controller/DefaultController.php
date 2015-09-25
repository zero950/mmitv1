<?php

namespace Mmi\MmitvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmiMmitvBundle:Default:index.html.twig');
    }
}
