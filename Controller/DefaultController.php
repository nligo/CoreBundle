<?php

namespace Cars\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CarsCoreBundle:Default:index.html.twig');
    }
}
