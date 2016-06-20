<?php

class AppBundleContainerTest extends KernelTestCase
{
    /**
    * @dataProvider dataServiceConstruction
    */
    public function testServiceConstruction($id, $class)
    {
        $service = $this->container->get($id);
        $this->assertInstanceOf($class, $service);
    }

    static public function dataServiceConstruction()
    {
        return array(
            array('app.navigationManager', 'AppBundle\Util\NavigationManager'),
            );
    }
}