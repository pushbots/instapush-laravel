<?php

namespace Pushbots\Instapush;

use Illuminate\Support\ServiceProvider;

class InstapushServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        $this->package('pushbots/instapush');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app['instapush'] = $this->app->share(function($app) {
            return new InstapushService();
        });

        $this->app->booting(function() {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Insta', 'Pushbots\Instapush\Facades\Insta');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return array('instapush');
    }

}
