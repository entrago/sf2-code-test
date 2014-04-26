<?php

namespace Entrago\CRUDBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController extends Controller
{
	/**
     * @Route("/CRUDBundle", name="crud_main")
     * @Template()
     */
    public function indexAction()
    {
        
        return $this->render('EntragoCRUDBundle:Main:index.html.twig');
    }
}
