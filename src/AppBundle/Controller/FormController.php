<?php
namespace AppBundle\Controller;


use AppBundle\Entity\Course;
use AppBundle\Entity\Category;
use AppBundle\Entity\Date_Time;
use AppBundle\Form\CourseType;
use AppBundle\Form\Date_TimeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class FormController extends Controller
{
    /**
    * @Route("/user/new_course", name="user_new_course")
    */
    public function createNewCourseAction(Request $request)
    {      
        $navigationManager = $this->get('app.navigationManager');
        $mainMenu = $navigationManager->getMainMenu();
        
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        } 
        
        $em = $this->getDoctrine()->getManager();
        // get current user    
        $user = $this->getUser();
        
        // create new course
        $course = new Course();
        $course->setDescription('Bitte geben Sie hier eine ausführliche Kursbeschreibung an.');
        // set number of registered participants to 0
        $course->setBooked('0');
        // set course instructor to current user (the one that is logged in)
        // cannot be changed by user
        $course->setUser($user);

        $dates = new Date_Time();
        $dates->setCourse($course);
        $course->getDates()->add($dates);
        
        $form = $this->createForm(CourseType::class, $course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($course);
            $em->persist($dates);
            $em->flush();

            return $this->redirectToRoute('app_course_showCourseDetailsByCourseId', array(
                'categoryId' => $course->getCategory()->getId(), 
                'courseId' => $course->getId()
                ));
        }
        
        return $this->render('user/userNewCourse.html.twig', array(
            'form' => $form->createView(), 
            'categories' => $mainMenu
        ));
    }
}
