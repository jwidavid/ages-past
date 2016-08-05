<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*', function($view) {
            // if user is logged in then always include the character information
            if ( auth()->check() ) {
	            $user = auth()->user();
                $character = $user->character;
	            $character->funds = $character->resources;
	            
	            $expneed = round( ( pow( $character->level, 3 ) + 50 ) * 2.1 );
	            $elexpneed = round( ( 161 * $character->element_level ) + 10 );
	            
	            $character->experience_needed = $expneed;
	            $character->element_experience_needed = $elexpneed;
	            $character->rank = $user->rank;
                            
	            $view->with('character', $character);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
