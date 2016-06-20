<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Session\Session;

class CourseController extends Controller
{
    /**
     * @Route("/programm/{categoryId}", name="app_course_showProgramByCategory", defaults={"categoryId": "Startseite"})
     */
    public function showProgramByCategoryAction($categoryId)
    {
        //get menu items and active menu item using a service
        $navigationManager = $this->get('app.navigationManager');
        $mainMenu = $navigationManager->getMainMenu();
        $activeMenuItem = $navigationManager->getActiveMenuItem($categoryId);
        
        //get database results
        $em = $this->getDoctrine()->getManager();
        $courses = $em->getRepository('AppBundle:Course')
            ->findCoursesByCategoryId($categoryId);
            
        if (!$courses) {
            $logger = $this->get('logger');
            $logger->error(
                    'Es konnten keine Kurse gefunden werden. Error in showProgrammByCategoryAction()'
                );
            throw $this->createNotFoundException('Es konnten keine Kurse gefunden werden. Error in showProgrammByCategoryAction()');
        }

        // render html page
        return $this->render('default/viewCategory.html.twig', array(
            'categories' => $mainMenu, 
            'courses' => $courses, 
            'currentCat' => $activeMenuItem
            ));
    }

    /**
     * @Route("/programm/details/{categoryId}/{courseId}", name="app_course_showCourseDetailsByCourseId", defaults={"categoryId": "Startseite", "courseId": ""})
     * 
     */
    public function showCourseDetailsByCourseIdAction($categoryId, $courseId)
    {
        $navigationManager = $this->get('app.navigationManager');
        $mainMenu = $navigationManager->getMainMenu();
        $activeMenuItem =$navigationManager->getActiveMenuItem($categoryId);

        $em = $this->getDoctrine()->getManager();
        $course = $em->getRepository('AppBundle:Course')
            ->find($courseId);
        
        if (!$course) {
            throw $this->createNotFoundException(
                'Es konnten keine Kurse gefunden werden.'
            );
        }

        return $this->render('default/courseDetails.html.twig', array(
            'categories' => $mainMenu, 
            'currentCat' => $activeMenuItem, 
            'course' => $course));
    }
}
