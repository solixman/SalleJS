<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Salle;

class SalleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
            return [
                'name'=> $this->faker->name(),
                'type' => $this->faker->randomElement(['single' ,'souble', 'conference room','party room']),
                'status'=> $this->faker->randomElement(['availabale','unavailable','reserved']),
                'capacity'=>$this->faker->numberBetween(1,40 ),
                'description'=>$this->faker->realText()
            ];
        }
        
}
