<?php


/**
 * Tests for EchoWorld.
 *
 * @author Peter Decuyper <peter@serial-graphics.be>
 */
class EchoWorld_TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * Prepare the test
     */
    public function setUp()
    {
        $dir = dirname(dirname(__FILE__)) . '/src';
        require_once $dir . '/EchoWorld.php';
    }

    /**
     * Test the message class.
     */
    public function testMessage()
    {
        $echoWorld = new EchoWorld();
        $this->assertEquals('Hello World', $echoWorld->message());
    }

    /**
     * Test hello person.
     */
    public function testHelloPerson()
    {
        $person = 'SGrame';
        $echoWorld = new EchoWorld();
        $this->assertEquals('Hello SGrame', $echoWorld->helloPerson($person));
    }

    /**
     * Test the purpose.
     */
    public function testWhatIsThePurpose()
    {
        $echoWorld = new EchoWorld();
        $this->assertEquals(
            'Rule the World!',
            $echoWorld->whatIsThePurpose()
        );
    }
}
