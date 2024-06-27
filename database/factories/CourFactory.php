<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cour>
 */
class CourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $profId = User::where('statut', 'professeur')->pluck('id')->toArray();
        $profId = $profId[array_rand($profId)];

        return [
            'nom' => fake()->jobTitle(),
            'professeur_id' => $profId,
        ];
    }
}
