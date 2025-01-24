<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;
use App\Models\Team;
use App\Models\User;
use App\Helpers\Users;
use Illuminate\Support\Facades\Config;

class DatabaseSeeder extends Seeder
{
    /**
     * Ejecuta las otras funciones de seeding.
     *
     * @return void
     */
    public function run()
    {
        // Crear equipos para asignar a los usuarios
        $defaultTeam = Team::factory()->create();
        $professorTeam = Team::factory()->create();

        // Crear usuarios por defecto
        $defaultUser = Users::createUser(
            $defaultTeam,
            Config::get('users.default.name'),
            Config::get('users.default.email'),
            Config::get('users.default.password')
        );

        $professorUser = Users::createUser(
            $professorTeam,
            Config::get('users.professor.name'),
            Config::get('users.professor.email'),
            Config::get('users.professor.password')
        );

        // Crear vídeos automáticamente
        Video::factory()->count(5)->create(); // Crear 5 vídeos automàticament
    }
}
