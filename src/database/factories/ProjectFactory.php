<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(), // Cria um usuário se não houver um
            'name' => $this->faker->sentence(3),     // Gera uma frase de 3 palavras
            'description' => $this->faker->paragraph,
            'status' => 'open',                      // Define o status inicial como 'open'
            'deadline' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
}
