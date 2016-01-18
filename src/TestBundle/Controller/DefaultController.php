<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     */
    public function indexAction()
    {
        return $this->render('TestBundle:Default:index.html.twig');
    }
}
