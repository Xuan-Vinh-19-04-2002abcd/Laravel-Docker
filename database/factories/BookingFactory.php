<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pitch_id'=> rand(1000000,1000009),
            'time_start'=> fake()->time(),
            'time_end'=> fake()->time(),
            'day'=> fake()->date(),
            'contact' => fake()->phoneNumber(),
            'description' => fake() ->text()

        ];
    }
}
