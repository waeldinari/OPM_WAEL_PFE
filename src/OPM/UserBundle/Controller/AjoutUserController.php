<?php

namespace OPM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AjoutUserController extends Controller
{
    public function indexAction()
    {
        return $this->render('OPMUserBundle:User:AjoutUser.html.twig');
    }
}
