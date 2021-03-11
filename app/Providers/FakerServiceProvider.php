<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
        $this->app->bind( Generator::class, function ( $app ) {

            $faker = \Faker\Factory::create();
            // $faker->addProvider( new CustomFakerProvider( $faker ) );

            return $faker;
        } );

    }





    
    

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
