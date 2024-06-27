<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $random = rand(0,1);

        if ($random == 1)
        {
            $statut = 'eleve';
        }else
        {
            $statut = 'professeur';
        }

        return [
            'name' => fake()->lastName('fr_FR'),
            'prenom' => fake()->firstName('fr_FR'),
            'statut' => $statut,
            'date_naissance' => fake()->date('Y-m-d'),
            'adresse' => fake()->address('fr_FR'),
            'code_postal' => fake()->postcode('fr_FR'),
            'ville' => fake()->city('fr_FR'),
            'telephone' => fake()->phoneNumber('fr_FR'),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
