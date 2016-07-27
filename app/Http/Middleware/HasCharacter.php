<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class HasCharacter
{
    
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '',
        'home',
        'logout',
        'login',
    ];
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd($request->path());
        if ( !in_array( $request->path(), $this->except ) ) {

            $user = $request->user();
            
            if ( $user && !$user->hasCharacter() ) {
                return redirect('/home');
            }
        }
        return $next($request);
    }
}
