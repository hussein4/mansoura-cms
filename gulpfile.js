var elixir = require('laravel-elixir');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
    mix.less('admin-lte/AdminLTE.less');
    mix.less('bootstrap/bootstrap.less');

    mix.styles ([
        'libs/bootstrap.min.css',
        'libs/select2.min.css',
        'libs/jquery.datetimepicker.css'
    ]);

    mix.scripts(
        [
            'libs/jquery.js',
            'libs/select2.min.js',
            'libs/jquery.datetimepicker.full.min.js'
        ]);



});


/*
elixir(function(mix) {
    mix.sass('app.scss');

    mix.styles([
             'vendor/normalize.css',
             'app.css'
    ],null, 'public/css');

    mix.phpUnit().phpSpec();

    mix.version('public/css/all.css');


});

    */