<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel-loop name
    |--------------------------------------------------------------------------
    |
    | This value is the name of laravel-loop, This setting is displayed on the
    | login page.
    |
    */
    'name' => 'Laravel-loop',

    /*
    |--------------------------------------------------------------------------
    | Laravel-loop logo
    |--------------------------------------------------------------------------
    |
    | The logo of all loop pages. You can also set it as an image by using a
    | `img` tag, eg '<img src="http://logo-url" alt="Admin logo">'.
    |
    */
    'logo' => '<b>loop</b> ',

    /*
    |--------------------------------------------------------------------------
    | Laravel-loop mini logo
    |--------------------------------------------------------------------------
    |
    | The logo of all loop pages when the sidebar menu is collapsed. You can
    | also set it as an image by using a `img` tag, eg
    | '<img src="http://logo-url" alt="Admin logo">'.
    |
    */
    'logo-mini' => '<b>lo</b>',

    /*
    |--------------------------------------------------------------------------
    | Laravel-loop bootstrap setting
    |--------------------------------------------------------------------------
    |
    | This value is the path of laravel-loop bootstrap file.
    |
    */
    //    'bootstrap' => app_path('Admin/bootstrap.php'),

    /*
    |--------------------------------------------------------------------------
    | Laravel-loop route settings
    |--------------------------------------------------------------------------
    |
    | The routing configuration of the loop page, including the path prefix,
    | the controller namespace, and the default middleware. If you want to
    | access through the root path, just set the prefix to empty string.
    |
    */
    'route' => [

        'prefix' => env('ADMIN_ROUTE_PREFIX', 'loop'),

        'namespace' => 'App\\Http\\Controllers',

        'middleware' => ['web', 'api'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel-loop install directory
    |--------------------------------------------------------------------------
    |
    | The installation directory of the controller and routing configuration
    | files of the loopistration page. The default is `app/Admin`, which must
    | be set before running `artisan loop::install` to take effect.
    |
    */
    'directory' => app_path('Http'),



];
