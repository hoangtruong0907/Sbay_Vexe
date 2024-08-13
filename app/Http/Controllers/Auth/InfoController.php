<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class InfoController extends Controller
{
    public function index()
    {
        return view('account.info');
    }
    public function membership()
    {
        return view('account.membership');
    }
    public function ticket()
    {
        return view('account.ticket');
    }
    public function reward()
    {
        return view('account.reward');
    }
    public function card()
    {
        return view('account.card');
    }
    public function review()
    {
        return view('account.review');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
