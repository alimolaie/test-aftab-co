<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStoreApi()
    {
        $response = $this->postJson('api/books/store')->assertOk();

        $response->assertStatus(200);
    }
    public function testUpdateApi()
    {
        $response = $this->putJson('api/books/update/{id}')->assertOk();

        $response->assertStatus(200);
    }
    public function testDeleteApi()
    {
        $response = $this->deleteJson('api/books/destroy/{id}')->assertOk();

        $response->assertStatus(200);
    }
}
