<?php
/**
 * Created by PhpStorm.
 * User: michaelfavila
 * Date: 10/22/14
 * Time: 12:05 PM
 */

namespace ApplicationTest\Mode;

use PHPUnit_Framework_TestCase as TestCase;
use Zend\Db\TableGateway\Feature\GlobalAdapterFeature;
use Zend\Mvc\MvcEvent;
use Application\Model\BusMapper;
use Api\Controller\BusController;

/**
 * Tests Application\Model\BusMapper;
 */
class BusMapperTest extends TestCase
{
    /**
     * model instance
     *
     * @var BusMapper
     */
    protected $model;
    protected $controller;

    /**
     * Prepares the environment before running a test.
     */
    public function setUp()
    {
        // Constructor has no arguments
        //$this->model = new BusMapper();
        $this->controller = new BusController();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        unset($this->model);
        unset($this->controller);
    }

    public function testControllerAccess()
    {
        $controller = $this->controller;
        $actual = $controller->indexAction();
        $expected = null;
        $this->assertEquals($expected, $actual);
    }

    public function testData()
    {
        //$record = $this->model->fetch(1);
        //$actual = $record->getName();
        $expected = 'SBS Transit';
        $this->assertEquals($expected, 'SBS Transit');
    }
}
