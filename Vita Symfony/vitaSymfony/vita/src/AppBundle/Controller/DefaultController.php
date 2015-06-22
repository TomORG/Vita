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
		$contentTemplatesPath = 'content/';
		
		$contentTemplate = $contentTemplatesPath . 'home.html.twig';
		
		if($content == 'werdegang') {
			$contentTemplate = $contentTemplatesPath . 'werdegang.html.twig';
		} else if($content == 'kenntnisse') {
			$contentTemplate = $contentTemplatesPath . 'kenntnisse.html.twig' ;
		} else if($content == 'motivation') {
			$contentTemplate = $contentTemplatesPath . 'motivation.html.twig';
		} else if($content == 'projekte') {
			$contentTemplate = $contentTemplatesPath . 'projekte.html.twig';
		}
		
		return $this->render('default/index.html.twig', array('contentTemplate' => $contentTemplate));
    }
}
