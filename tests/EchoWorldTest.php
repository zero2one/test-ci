<?php


/**
 * Tests for EchoWorld.
 *
 * @author Peter Decuyper <peter@serial-graphics.be>
 */
class EchoWorld_TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * Test the message class.
     */
    public function testMessage()
    {
        $dir = dirname(dirname(__FILE__)) . '/src';
        require_once $dir . '/EchoWorld.php';
        $echoWorld = new EchoWorld();

        $this->assertEquals('Hello World', $echoWorld->message());
    }

    /**
     * Test hello person.
     */
    public function testHelloPerson()
    {
        $person = 'SGrame';

        require_once $dir . '/EchoWorld.php';
        $echoWorld = new EchoWorld();

        $this->assertEquals('Hello SGrame', $echoWorld->helloPerson($person));
    }
}
