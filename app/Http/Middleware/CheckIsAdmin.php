<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 04-Mar-17
 * Time: 5:57 PM
 */

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->isAdmin != 1) {
            return redirect('');
        }

        return $next($request);
    }
}
