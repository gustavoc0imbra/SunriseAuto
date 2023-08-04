<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Date;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_all_products()
    {
        $response = $this->get('/api/index');


        $response->dump();
        $response->assertStatus(200);
    }

    public function test_add_product()
    {
        $produto = [
            'name' => 'teste',
            'description' => 'teste descr',
//            'image' => UploadedFile::fake()->image('teste.jpg', 200,200),
            'cost_price' => 10.5,
            'created_at' => Date::now()
        ];

        $response = $this->post('/api/storeProd', $produto);
        $response->dump();
        $response->assertStatus(200);
    }
}
