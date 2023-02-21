<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testStoreWeb()
    {
        $response = $this->post('admin/books/store')->assertOk();

        $response->assertStatus(200);
    }
    public function testUpdateWeb()
    {
        $response = $this->put('admin/books/update/{id}')->assertOk();

        $response->assertStatus(200);
    }
    public function testDeleteWeb()
    {
        $response = $this->delete('admin/books/destroy/{id}')->assertOk();

        $response->assertStatus(200);
    }
}
