<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
	protected function setUp()
	{
	   parent::setUp();
	   // $this->userInsert();
	}

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
 		$response = $this->get('/');

        $response->assertStatus(200);


    }

    public function testBasicUserExample()
    {
    	$response = $this->get('/');

        $response->assertStatus(200);
    }
}
