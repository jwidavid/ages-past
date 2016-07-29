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
        $user = $request->user();
        if ( $user && !$user->hasCharacter() && !in_array( $request->path(), $this->except ) ) {
            return redirect('/character/create');
        }
        elseif ( $user && $user->hasCharacter() && $request->path() == 'character/create' ) {
            
            $request->session()->flash('message', 'This is a message!');
            $request->session()->flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }    
        
        return $next($request);
    }
}
