<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        $navigationManager = $this->get('app.navigationManager');
        $mainMenu = $navigationManager->getMainMenu();
        
        $em = $this->getDoctrine()->getManager();
        
        return $this->render('default/index.html.twig', array(
            'categories' => $mainMenu
            )
        );
    }
}
