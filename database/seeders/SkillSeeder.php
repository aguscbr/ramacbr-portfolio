<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::insert([
            ['name' => 'Laravel',    'category' => 'Backend',        'icon' => 'laravel',     'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PHP',        'category' => 'Backend',        'icon' => 'php',         'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MySQL',      'category' => 'Bases de datos', 'icon' => 'mysql',       'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PostgreSQL', 'category' => 'Bases de datos', 'icon' => 'postgresql',  'order' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vue.js',     'category' => 'Frontend',       'icon' => 'vuejs',       'order' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tailwind',   'category' => 'Frontend',       'icon' => 'tailwindcss', 'order' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Docker',     'category' => 'DevOps',         'icon' => 'docker',      'order' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Git',        'category' => 'DevOps',         'icon' => 'git',         'order' => 8, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
