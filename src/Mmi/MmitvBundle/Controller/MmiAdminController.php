<?php
/**
 * Created by PhpStorm.
 * User: evergreen
 * Date: 23/02/15
 * Time: 17:37
 */


namespace Mmi\MmitvBundle\Controller;

use Mmi\MmitvBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QDAdminController extends Controller
{

    public function AdminAction()
    {

        return $this->render('MmiMmitv:Default:admin.html.twig');

    }


}