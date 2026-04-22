<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // Cria 5 usuários, cada um com 3 projetos, e cada projeto com 5 tarefas
     User::factory(5)
        ->hasProfile()
        ->has(
            \App\Models\Project::factory()
                ->count(3)
                ->hasTasks(5)
        )
        ->create();

    \App\Models\Tag::factory(10)->create();
}
}
