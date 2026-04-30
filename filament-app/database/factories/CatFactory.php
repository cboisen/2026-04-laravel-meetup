<?php

namespace Database\Factories;

use App\Models\Cat;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cat>
 */
class CatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'breed' => fake()->randomElement(['Aegean', 'Siamese', 'Sphynx']),
            'image_url' => fake()->randomElement([
                'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Gustav_chocolate.jpg/960px-Gustav_chocolate.jpg',
                'https://upload.wikimedia.org/wikipedia/commons/5/51/Aegean_cat.jpg',
                'https://upload.wikimedia.org/wikipedia/commons/e/e9/Male_Burmilla_cat.jpeg'
            ]),
            'date_of_birth' => fake()->date(),
            'cuteness' => fake()->numberBetween(1, 100),
            'user_id' => User::factory(),
        ];
    }
}
