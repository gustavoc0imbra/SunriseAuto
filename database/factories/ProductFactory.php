<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'Code' => $this->faker->randomNumber(),
            'Name' => $this->faker->word(),
            'Price' => $this->faker->randomFloat(null,0, 50),
            'Description' => $this->faker->paragraph(3),
            'addedBy' => 'gugu@email.com.teste'
        ];
    }
}
