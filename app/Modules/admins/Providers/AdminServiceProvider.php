<?php

namespace Admins\Providers;

use Illuminate\Support\ServiceProvider;
use File;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // web
        $name   = basename(dirname(__DIR__, 1));
        /* load config*/
        config([
            "{$name}.route"=> File::getRequire(load_config( $name, "route"))
        ]);

        /*  web for admin routes   */
        $this->loadRoutesFrom( load_route( $name, "web" ) );

        /* api for admin routes */
        $this->loadRoutesFrom( load_route( $name, "api" ) );

        /*  load view  */
        $this->loadViewsFrom(
            load_views( $name ),
            $name
        );

       /*   load migration  */
        $this->loadMigrationsFrom([
            load_migrations( $name )
        ]);

        /*  load Trnsloation */
        $this->loadTranslationsFrom(
            load_translations( $name ),
            $name
        );
    }
}
