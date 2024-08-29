<?php

namespace App\Repositories\Repository;

use Illuminate\Support\Facades\Auth;
use App\Repositories\Interface\AuthRepositoryInterface;

class AuthRepository implements AuthRepositoryInterface
{
    public function login(array $data) 
    {
        // Xác thực email và mật khẩu trước
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            $user = Auth::user();

            // Kiểm tra vai trò của người dùng
            if ($user->role == 2) {
                return $user;
            } else {
                // Nếu người dùng không có vai trò 2, đăng xuất và trả về false
                Auth::logout();
                return false;
            }
        }

        return false;
    }

    public function logout() {
        Auth::logout();
    }

    // Custom function
}

