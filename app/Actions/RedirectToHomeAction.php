<?php

namespace App\Actions;

class RedirectToHomeAction
{
    public static function handle()
    {
        return redirect(strtolower(auth()->user()->type));
    }
}