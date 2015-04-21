<?php

namespace OPM\PerdiemsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BanqueController extends Controller
{
    public function indexAction()
    {
        return $this->render('OPMPerdiemsBundle:Banque:Banque.html.twig');
    }
}
