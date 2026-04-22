<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * @OA\Info(
 *     title="TaskFlow API",
 *     version="1.0.0",
 *     description="API REST para gerenciar projetos, tarefas e equipes"
 * )
 * @OA\Server(
 *     url="http://localhost:8001/api",
 *     description="Development Server"
 * )
 * @OA\Tag(
 *     name="Projects",
 *     description="Gerenciamento de Projetos"
 * )
 * @OA\Tag(
 *     name="Tasks",
 *     description="Gerenciamento de Tarefas"
 * )
 * @OA\Tag(
 *     name="Tags",
 *     description="Gerenciamento de Tags"
 * )
 * @OA\Tag(
 *     name="Profiles",
 *     description="Gerenciamento de Perfis"
 * )
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
