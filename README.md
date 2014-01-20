InstaPush Wrapper for Laravel
============================

[InstaPush](https://instapush.im/) for Laravel gives Immediate Notifications for the transactions you care about in your Laravel PHP applications.

How to Install
--------------

1.  Install the `abbasadel/instapush-laravel` package

    ```shell
    $ composer require "abbasadel/instapush-laravel:dev-master"
    ```

2.  Update `app/config/app.php` to configure your Instapush Account

    ```php
    # Add `InstapushServiceProvider` to the `providers` array
    'providers' => array(
        ...
        'Pushbots\Instapush\InstapushServiceProvider',
    )

    # Add the `Insta` Facade to the `aliases` array
    'aliases' => array(
        ...
        'Insta' => 'Pushbots\Instapush\Facades\Insta',
    )
    ```


Configuration
-------------

1.  Generate a template Instapush config file

    ```shell
    $ php artisan config:publish abbasadel/instapush-laravel
    ```

2.  Update `app/config/packages/abbasadel/instapush-laravel/config.php` with your
    Instapush appID and appSecret key:

    ```php
    return array(
        'appId' => 'APP_ID',
        'appSecret' => 'APP_SECRET',
    );
    ```


Usage 
-----------------------------------

    ```php
    
        Insta::Push("EventName", ['tacker1'=>'value1', 'tacker2'=>'value2']);
        
    ```

Reporting Bugs or Feature Requests
----------------------------------

Please report any bugs or feature requests on the github issues page for this
project here:

<https://github.com/abbasadel/instapush-laravel/issues>


License
-------

The InstaPush Laravel is free software released under the GPLv2 License. 
See [LICENSE.txt](https://github.com/abbasadel/instapush-laravel/blob/master/LICENSE) for details.
