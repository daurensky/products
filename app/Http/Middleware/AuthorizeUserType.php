<?php

namespace App\Http\Middleware;

use App\Actions\RedirectToHomeAction;
use Closure;
use Illuminate\Http\Request;

class AuthorizeUserType
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $type)
    {
        abort_if(!auth()->check(), 403);

        if (!auth()->user()->isType($type)) {
            return RedirectToHomeAction::handle();
        }

        return $next($request);
    }
}
