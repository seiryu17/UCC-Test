<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGet()
    {
        $response = $this->get('/vehicle');

        $response->assertResponseStatus(201);

    }
    public function testPost()
    {
        $response = $this->json('POST', '/vehicle', ['name' => 'Avanza','engine_displacement'=>'1.5','engine_power'=>'104','price'=>'23000','location'=>'Batam']);

        $response
            ->assertResponseStatus(201);

    }
}
 