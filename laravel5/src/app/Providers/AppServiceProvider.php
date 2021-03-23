<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;



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
    	

    	
    	DB::listen(function ($query) {
    		
    		dump($query->sql);
    		//dump($query->bindings);
    		
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
