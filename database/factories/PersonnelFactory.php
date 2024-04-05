<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonnelFactory extends Factory
{

    public function definition()
    {
        return [
            'CIN' => $this->faker->numberBetween(),
            'Nom' => $this->faker->name(),
            'Prenom' => $this->faker->name(),
            'Sexe' => $this->faker->randomElement(['male', 'female']),
            'Date_Naissance' => $this->faker->date(),
            'Téléphone' => $this->faker->numberBetween(),
            'Email' => $this->faker->unique()->safeEmail(),
            'Adresse' => $this->faker->address(),
        ];
    }
}
