<?php

namespace Database\Factories;

use App\Models\Cour;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inscription>
 */
class InscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $eleveId = User::where('statut', 'eleve')->pluck('id')->toArray();
        $eleveId = $eleveId[array_rand($eleveId)];
        
        $coursId = Cour::pluck('id')->toArray();
        $coursId = $coursId[array_rand($coursId)];

        return [
            'eleve_id' => $eleveId,
            'cours_id' => $coursId,
        ];
    }
}
