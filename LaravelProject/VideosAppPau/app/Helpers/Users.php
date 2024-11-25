<?php

namespace App\Helpers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Users
{
    public static function createUser(Team $team, $name, $email, $password)
    {
        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'current_team_id' => $team->id,
        ]);
    }
}
