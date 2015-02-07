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
        include $dir . '/EchoWorld.php';
        $echoWorld = new EchoWorld();

        $this->assertEquals('Hello World', $echoWorld->message());
    }
}
