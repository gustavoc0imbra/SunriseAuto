<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(5)->create();
        Product::factory(10)->create();
    }
}
