<?php
namespace AppBundle\Util;

//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Category;

class NavigationManager
{
    /**
    * @var Array $menu Should contain the menu items
    */
    private $menu; 
    
    /**
    * @var Session $session Contains the current session
    */
    private $session;

    public function getMainMenu()
    {   
       // get categories for navigation purposes
        if($this->session->has('menu_categories')){
            $this->menu = $this->session->get('menu_categories');
            return $this->menu;
        } else {   
            //$this->menu = $this->em->getRepository('AppBundle:Category');
            //if (!$this->menu) {
             //   throw $this->createNotFoundException(
             //       'Leider konnte keine Datenbankverbindung hergestellt werden.'
              //  );    
            $this->menu = array(
            1 => array("name" => "EDV", "id" => 2),
            2 => array("name" => "Sprachen", "id" => 4),
            3 => array("name" => "Kultur", "id" => 6)
            );
            $this->session->set('menu_categories', $this->menu);
            return $this->menu;
        }
    } 

    public function getActiveMenuItem($menuItemId)
    {
        return $this->em->getRepository('AppBundle:Category')
            ->find($menuItemId);
    }
                
    /*
    * Constructor
    * 
    * @param EntityManager $entityManager
    * @param Session $session
    * 
    * @return Session returns the session
    */
    public function __construct(EntityManager $entityManager, Session $session)
    {
        $this->em = $entityManager;
        if ($session->isStarted()){
            $this->session = $session; 
        } else {
            $this->session = new Session();
        }
            
        
    }
    
}