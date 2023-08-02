<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_all_products()
    {
        $response = $this->get('/api/index', '');


        $response->dump();
        $response->assertStatus(200);
    }
}
