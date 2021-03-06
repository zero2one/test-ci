<?php
/**
 * Simple class to test the CI-tools.
 */

class EchoWorld
{
    /**
     * Returns 'Hello World'.
     */
    public function message()
    {
        return 'Hello World';
    }

    /**
     * Return 'Hello <Person>'.
     */
    public function helloPerson($person)
    {
        return 'Hello ' . $person;
    }

    /**
     * Return 'Rule the World!'.
     */
    public function whatIsThePurpose()
    {
        return 'Rule the World!';
    }
}
