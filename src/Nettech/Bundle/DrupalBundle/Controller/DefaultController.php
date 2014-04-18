<?php

namespace Nettech\Bundle\DrupalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NettechDrupalBundle:Default:index.html.twig', array('name' => $name));
    }
}
