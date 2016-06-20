<?php
namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use AppBundle\Controller\CourseTestController;

class CourseTestControllerTest extends WebTestCase
{
    protected $service;

    public function setUp()
    {
        $em = $this->container->get('doctrine.orm.default.entity_manager');
        $navigationManger = $this->container->get('app.navigationManger');
        // call parent setUp()!
        $this->service = new CourseController($em, $navigationManger);
    }

    public function testShowProgramByCategoryAction()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/test/4');
        $content = $client->getResponse()->getContent();
        //$container = $client->getContainer();
        //$kernel = $client->getKernel();
        
        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertContains(
            'Es wurden',
            $$content);
    }
}