<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::insert([
            [
                'role' => 'Desarrollador Fullstack Senior',
                'company' => 'Empresa XYZ',
                'location' => 'Buenos Aires, Argentina',
                'start_date' => '2023-01-01',
                'end_date' => null,
                'current' => true,
                'description' => 'Lideré el desarrollo de una plataforma SaaS con Laravel + Vue 3 para 3.000+ usuarios. Reduje el tiempo de carga en 40% con caching en Redis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'Desarrollador Backend',
                'company' => 'Agencia ABC',
                'location' => 'Remoto',
                'start_date' => '2021-03-01',
                'end_date' => '2022-12-31',
                'current' => false,
                'description' => 'Diseñé APIs REST consumidas por apps móviles. Implementé pipelines CI/CD en GitHub Actions y deployé en servidores con Laravel Forge.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
