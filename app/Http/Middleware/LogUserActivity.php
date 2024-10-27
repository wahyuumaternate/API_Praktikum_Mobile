<?php

namespace App\Http\Middleware;

use App\Models\UserActivityLog;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LogUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $activity = $request->method() . ' ' . $request->path();

            UserActivityLog::create([
                'user_id' => Auth::id(),
                'activity' => $activity,
            ]);
        }

        return $next($request);
    }
}
