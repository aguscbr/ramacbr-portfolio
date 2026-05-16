<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::insert([
            [
                'title' => 'Sistema de gestión de inventario',
                'description' => 'Plataforma fullstack con dashboard en tiempo real, reportes exportables y gestión de roles multi-tenant para 500+ usuarios activos.',
                'demo_url' => 'https://demo.ejemplo.com',
                'github_url' => 'https://github.com/tuusuario/inventario',
                'tech_stack' => json_encode(['Laravel', 'Vue 3', 'MySQL', 'Redis']),
                'order' => 1,
                'visible' => true,
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'API de pagos recurrentes',
                'description' => 'Integración con Mercado Pago, webhooks y sistema de suscripciones con reintentos automáticos.',
                'demo_url' => null,
                'github_url' => 'https://github.com/tuusuario/pagos-api',
                'tech_stack' => json_encode(['Laravel', 'REST API', 'MySQL']),
                'order' => 2,
                'visible' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'CMS headless para blog',
                'description' => 'Panel de gestión con editor Markdown, SEO automático y deploy en Railway.',
                'demo_url' => 'https://blog.ejemplo.com',
                'github_url' => null,
                'tech_stack' => json_encode(['Laravel', 'Livewire', 'Filament']),
                'order' => 3,
                'visible' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
