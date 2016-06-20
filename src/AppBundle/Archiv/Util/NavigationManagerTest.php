<?php
namespace AppBundle\Tests\Util;

use AppBundle\Util\NavigationManager;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Doctrine\ORM\EntityManager;

/*class NavigationManagerTest extends \PHPUnit_Framework_TestCase
{
}*/
  /*   public static $kernel;
 
    /**
     * Nach den Tests den Kernel freigeben.
     *
     * @static
     * @return void
     */
 /*   public static function tearDownAfterClass()
    {
        self::$kernel = null;
    }
    
    public static function setUpBeforeClass()
    {
        //start the symfony kernel
         $kernel = static::createKernel();
         $kernel->boot();

         //get the DI container
         self::$container = $kernel->getContainer();

         //now we can instantiate our service (if a fresh one for
         //each test method is wanted, do this in setUp() instead
         self::$navigationManager = self::$container->get('app.navigationManager');
    }

    /**
     * @depends setUpBeforeClass
     */
  /*  public function testGetMainMenu(Session $session)
    {
        $mainMenuItems = self::$navigationManager->getMainMenu();

        $this->assertEquals(3, count($mainMenuItems));
    }
*/
