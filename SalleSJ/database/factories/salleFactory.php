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
                'price'=> $this->faker->numberBetween(100,4000),
                'image'=>$this->faker->randomElement(['https://imgs.search.brave.com/yUu30Ph5qfzF2nx0aw2tryoH3Nt3IHgb2NQCAw1UsoQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzA5LzQ2LzgyLzU3/LzM2MF9GXzk0Njgy/NTc1Nl9qZGR2Mk5h/cGN0d0JXamxuSWxZ/dGFkVngzeHVPQk4w/Ti5qcGc']),
                'type' => $this->faker->randomElement(['single' ,'souble', 'conference room','party room']),
                'status'=> $this->faker->randomElement(['availabale','unavailable','reserved']),
                'capacity'=>$this->faker->numberBetween(1,40 ),
                'description'=>$this->faker->realText()
            ];
        }
        
}
