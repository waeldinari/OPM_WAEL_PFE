<?php

namespace OPM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OPMUserBundle:Default:index.html.twig', array('name' => $name));
    }
    
     public function addAction()
    {
        return $this->render('OPMUserBundle:Register:add.html.twig');
    }
 
}
