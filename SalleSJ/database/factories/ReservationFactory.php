<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1, 10),
            'salle_id'=>$this->faker->numberBetween(1, 10),
            'DateDebut'=>$this->faker->date(),
            'DateFin'=>$this->faker->date()
        ];
    }
}
