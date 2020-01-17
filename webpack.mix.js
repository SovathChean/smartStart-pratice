const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


   mix.js('resources/js/app.js', 'public/js')
       .sass('resources/sass/app.scss', 'public/css')
       .styles(['resources/css/css-responsive.css',
               'resources/css/style.css',
             ],'public/css/libs.css')
        .scripts([
                  'resources/js/index.js',
                  'resources/js/script.js'
        ],'public/js/libs.js');
