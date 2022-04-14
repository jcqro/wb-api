<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class GreetingTest extends TestCase
{
    /**
     * A basic Hello World endpoint test.
     *
     * @return void
     */
    public function testHelloWorld()
    {
        $requiredGreeting = "Hello World";
        $this->get('greeting');
        $this->seeStatusCode(200);
        $this->assertEquals(
            $requiredGreeting,
            $this->response->getContent()
        );
    }
}
