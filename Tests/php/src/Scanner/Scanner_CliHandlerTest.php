<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2013-08-21 at 14:46:32.
 */
class Scanner_CliHandlerTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Scanner_CliHandler
     */
    protected $object;

    /**
     *
     * @var JuiceContainer 
     */
    protected $di;
    
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->di = new JuiceContainer();
        $this->di['filter_string'] = JuiceDefinition::create('Scanner_Util_Filter_String');
        $this->di['logger'] = JuiceDefinition::create('Scanner_Log_ErrorLog');
        $this->di['options'] = array(
            'test' => 'long_word'
        );
        $this->di['stream_path'] = '/tmp/testout';
        $this->di['cli_optionhandler'] = JuiceDefinition::create('Scanner_CliHandler_Option_Array', array('@options'));
        $this->di['output_interface'] = JuiceDefinition::create('Scanner_Output_Cli')
                ->call('setStreamPath', array('@stream_path'));
        $this->di['cli_handler'] = JuiceDefinition::create('Scanner_CliHandler', array('@output_interface', '@cli_optionhandler', '@logger'))
                ->call('setStringFilterInterface', array('@filter_string'));

        $this->object = $this->di['cli_handler'];
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Scanner_CliHandler::setStringFilterInterface     
     */
    public function testSetStringFilterInterface() {
        $interface = $this->di['filter_string'];
        $this->object->setStringFilterInterface($interface);
        $this->assertSame($interface, $this->object->getStringFilterInterface());
    }

    /**
     * @covers Scanner_CliHandler::getStringFilterInterface
     * @todo   Implement testGetStringFilterInterface().
     */
    public function testGetStringFilterInterface() {
        $interface = $this->di['filter_string'];
        $this->object->setStringFilterInterface($interface);
        $this->assertSame($interface, $this->object->getStringFilterInterface());
    }

    /**
     * @covers Scanner_CliHandler::run
     * @todo   Implement testRun().
     */
    public function testRun() {
        $this->assertNotInstanceOf('Exception', $this->object->run());
    }

    /**
     * @covers Scanner_CliHandler::runAllTests
     * @todo   Implement testRunAllTests().
     */
    public function testRunAllTests() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Scanner_CliHandler::runTest
     * @todo   Implement testRunTest().
     */
    public function testRunTest() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Scanner_CliHandler::getTestInstance
     * @todo   Implement testGetTestInstance().
     */
    public function testGetTestInstance() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Scanner_CliHandler::getTestClassname
     * @todo   Implement testGetTestClassname().
     */
    public function testGetTestClassname() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Scanner_CliHandler::outputUsage
     * @todo   Implement testOutputUsage().
     */
    public function testOutputUsage() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}
