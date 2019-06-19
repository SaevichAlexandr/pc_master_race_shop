<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = Auth::id();
        $user = User::where('id', '=', $id)->first();
        $is_admin = $user->is_admin;
        if ($is_admin) {
            return $next($request);
        } else {
            return redirect('/');
        }
    }


}
