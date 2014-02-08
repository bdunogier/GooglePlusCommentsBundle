<?php

namespace BD\Bundle\GooglePlusCommentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BDGooglePlusCommentsBundle:Default:index.html.twig', array('name' => $name));
    }
}
