<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    /**
    * @Route("/login", name="login")
    * @return Array 
    */
    public function loginAction(Request $request)
    {
        // get navigation
        $navigationManager = $this->get('app.navigationManager');
        $mainMenu = $navigationManager->getMainMenu();
        
        $authenticationUtils = $this->get('security.authentication_utils');

        //get login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        //last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig',
                array(  
                    'lastUsername' => $lastUsername, 
                    'error' => $error,
                    'categories' => $mainMenu
                    )
            );
    }
}