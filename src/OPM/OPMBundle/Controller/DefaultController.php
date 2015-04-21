<?php

namespace OPM\OPMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OPMOPMBundle:Default:index.html.twig');
    }
}
