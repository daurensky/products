<?php

namespace App\Services;

class AuthService
{
    public static function login($credentials)
    {
        if (!auth()->attempt($credentials)) {
            return back()->withErrors(['password' => __('login.wrong')])->withInput();
        }

        return redirect('/');
    }
}