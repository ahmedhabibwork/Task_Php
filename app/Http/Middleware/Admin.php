<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user_id = Auth::id();
        $user = User::find($user_id);

        if (isset($user) && !empty($user)) {
            if ($user->role_id == 1) {

                return redirect('http://127.0.0.1:8000/home');
            }
        }
        return $next($request);
    }
}
