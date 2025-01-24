<?php

namespace Tests\Unit;

use App\Helpers\Users;
use App\Models\Team;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Helpers\DefaultVideoHelper;

class HelperTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_default_user_and_professor()
    {
        // Arrange: Crear equips per assignar-los als usuaris
        $defaultTeam = Team::factory()->create();
        $professorTeam = Team::factory()->create();

        // Act: Crear usuaris amb equips diferents utilitzant Users::createUser
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

        // Assert: Comprovar que els usuaris es creen correctament
        $this->assertNotNull($defaultUser);
        $this->assertNotNull($professorUser);

        // Ens assegurem de que les contrassenyes estan encriptades i es validen correctament
        $this->assertTrue(Hash::check(Config::get('users.default.password'), $defaultUser->password));
        $this->assertTrue(Hash::check(Config::get('users.professor.password'), $professorUser->password));

        // Comprobar que los usuarios están asignados a equipos diferentes
        $this->assertEquals($defaultTeam->id, $defaultUser->current_team_id);
        $this->assertEquals($professorTeam->id, $professorUser->current_team_id);
    }

    public function test_can_create_videos()
    {
        $video = DefaultVideoHelper::createDefaultVideoHelper();

        $this->assertDatabaseHas('videos', [
            'title' => 'Vídeo de prova',
            'description' => 'Descripció del vídeo de prova',
            'url' => 'https://www.youtube.com/watch?v=123456',
        ]);

        $this->assertNotNull($video->published_at);
        dd($video->toArray());
    }
}
