<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RekamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(mt_rand(3,5)),
            'pasien_id' => mt_rand(1,5),
            'dokter_id' => mt_rand(1, 5)
        ];
    }
}
