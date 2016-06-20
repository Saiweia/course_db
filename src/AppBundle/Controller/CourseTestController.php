<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Session\Session;

class CourseTestController extends Controller
{
    /**
     * @Route("/test/{categoryId}", name="test")
     */
    public function showProgramByCategoryAction($categoryId)
    {
     
        //get menu items and active menu item using a service
        $navigationManager = $this->get('app.navigationManager');
        //$mainMenu = $navigationManager->getMainMenu();
        ////$activeMenuItem = $navigationManager->getActiveMenuItem($categoryId);
        
        //get database results
        $em = $this->getDoctrine()->getManager();
        $courses = $em->getRepository('AppBundle:Course')
            ->findCoursesByCategoryId($categoryId);
        /*if (!$courses) {
            throw $this->createNotFoundException(
                'Es konnten keine Kurse gefunden werden. Fehler in showProgrammByCategory'
            );
        }*/

        // render html page
        return $this->render('test.html.twig', array("courses" => $courses));
    }

    
}
