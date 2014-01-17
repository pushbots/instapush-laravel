<?php

namespace Pushbots\Instapush\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Instapush Laravel Facade
 *
 * @author abbas
 */
class Insta extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'instapush';
    }

}
