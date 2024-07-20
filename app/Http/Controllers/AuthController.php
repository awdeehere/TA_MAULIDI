<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('auth.login');
    }

    public function loginProcess()
    {
        $credential = [
            'email' => request('email'),
            'password' => request('password')
        ];

        if (auth()->attempt($credential)) {
            $user = auth()->user();
            if ($user->type == 'ADMIN') {
                return redirect('admin/dashboard')->with('success', 'Login Berhasil');
            } else {
                return redirect('user/dashboard')->with('success', 'Login Berhasil');
            }
        } else {
            return view('auth.login', ['message' => 'Login Gagal, Silahkan Cek Email dan Password']);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function logout()
    {
        auth()->logout();

        return redirect('login');
    }
}
