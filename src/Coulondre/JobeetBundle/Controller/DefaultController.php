<?php

namespace Coulondre\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CoulondreJobeetBundle:Default:index.html.twig', array('name' => $name));
    }
}
