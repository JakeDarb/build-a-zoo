<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'description' => $this->faker->realText(200, 2),
            'owner' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2,0,5000),
            'collection_id' => $this->faker->randomDigit(),
            'type_id' => $this->faker->randomDigit(),
            'class_id' => $this->faker->randomDigit(),
            'animal_id' => $this->faker->randomDigit()
        ];
    }
}
