<?php

namespace App\Services;

use App\Models\User;

class AuthService
{
    public function register($data)
    {
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['name'] =  $user->name;

        return $success;
    }
}
