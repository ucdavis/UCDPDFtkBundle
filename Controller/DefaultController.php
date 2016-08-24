<?php

namespace UCDavis\UCDPdftkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UCDPdftkBundle:Default:index.html.twig');
    }
}
