<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (! Auth::guard('admin')->check() || Auth::guard('admin')->user()->role != $role) {
            // Redirect ke halaman yang diinginkan jika user tidak memiliki role yang sesuai
            return redirect('login');
        }
    
        return $next($request);
    }
}