<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pairs>
 */
class PairsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $start = rand(1, 7);
        $end = rand(1, 6);
        if ($start == $end) {
            $end++;
        }
        return [
            //

            'currency_start' => $start,
            'currency_end' => $end,
            'rate' => fake()->randomFloat(4, 0.0001, 10.0000),

        ];

        // return [
        //     'currency_start' => rand(1, 9),
        //     'currency_end' => rand(1, 9),
        //     'rate' => $this->faker->randomFloat(4, 0.0001, 10.0000),

        // ];
    }
}
