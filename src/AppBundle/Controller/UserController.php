<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use AppBundle\Helper\FormatHelper;

class UserController extends Controller
{
    /**
     * @Route("/user/overview", name="app_user_showCoursesByUserId")
     * 
     * @return Array $categories Contains menu items
     * @return Array $courses Contains information mixed[] about courses
     *
     */
    public function showCoursesByUserIdAction()
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        /**
        * @var Service $navigationManager
        */
        $navigationManager = $this->get('app.navigationManager');

        /**
        * @var Array $mainMenu Contains menu items
        */
        $mainMenu = $navigationManager->getMainMenu();
        
        /**
        * @var int $userId Contains id of authenticated user
        */
        $userId = $this->getUser()->getId();

        /**
        * @var EntityManager $em Contains entity manager of doctrine
        */
        $em = $this->getDoctrine()->getManager();
       
        /**
        * @var Array $courses Contains multidimensional array with course information
        */
        $courses = $em->getRepository('AppBundle:Course')
            ->findCoursesByUserId($userId);

        return $this->render('user/userIndex.html.twig', array(
            'categories' => $mainMenu, 
            'courses' => $courses));
    }

    /**
     * @Route("/user/delete/{category}/{id}", name="app_user_deleteCourse")
     * 
     */
    public function deleteCourseAction(Request $request, $category, $id)
    {   
        return new Response('delete: ' . $category . " " . $id);
    }

    
}