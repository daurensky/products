<?php

namespace App\Http\Controllers;

use App\Actions\RedirectToHomeAction;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;

class LoginController extends Controller
{
    public function create()
    {
        if (auth()->check()) return RedirectToHomeAction::handle();
        return view('login');
    }

    public function store(LoginRequest $request)
    {
        return AuthService::login($request->validated());
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('login');
    }
}
