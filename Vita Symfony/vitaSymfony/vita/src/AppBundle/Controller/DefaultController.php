<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	/**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
		return $this->redirect('home');
    }
	
    /**
     * @Route("/{content}", name="content")
     */
    public function contentAction($content)
    {
		return $this->render('default/index.html.twig', array('content' => $content));
    }
}
