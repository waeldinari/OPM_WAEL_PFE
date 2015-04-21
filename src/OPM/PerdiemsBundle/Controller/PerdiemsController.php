<?php

namespace OPM\PerdiemsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PerdiemsController extends Controller
{
    public function indexAction()
    {
        return $this->render('OPMPerdiemsBundle:Perdiems:Perdiems.html.twig');
        
    }
     public function FraisTimbresAction()
    {
        
         return $this->render('OPMPerdiemsBundle:Perdiems:FraisTimbres.html.twig');
    }
}
