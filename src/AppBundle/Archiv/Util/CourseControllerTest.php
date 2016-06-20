<?php
namespace AppBundle\Tests\Controller;

use AppBundle\Controller\CourseController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Doctrine\ORM\EntityManager;

class CourseControllerTest extends \PHPUnit_Framework_TestCase
{
    protected $categoryId;

    protected function setUp()
    {
        $this->categoryId = 4;
    }
    /**
     * @depends setUpBeforeClass
     */
    public function testshowProgramByCategoryAction()
    {
        

        $this->assertEquals(3, count($mainMenuItems));
    }


}