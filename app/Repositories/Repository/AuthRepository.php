<?php

namespace App\Repositories\Repository;

use Illuminate\Support\Facades\Auth;
use App\Repositories\Interface\AuthRepositoryInterface;

class AuthRepository implements AuthRepositoryInterface
{

    public function login(array $data) 
    {
        // dd($data['email']);
        if (Auth::attempt(['email' => $data['email'] , 'password' => $data['password'] , 'role' => 2])) {
            return Auth::user();
        }
        return false;
    }

    public function logout() {
        Auth::logout();
    }

    // Custom function

}
