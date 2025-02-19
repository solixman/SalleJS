<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class salleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Type'=> $this->faker->name(),
            'name'=> $this->faker->name(),
            // 'status' =>$this->faker->

        ];
    }
}
