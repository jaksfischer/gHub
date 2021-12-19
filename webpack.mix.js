const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

/*mix.js('resources/js/app.js', 'public/js')
.sass('resources/sass/app.scss', 'public/css');*/
mix.scripts(
    [
        'node_modules/jquery/dist/jquery.slim.js',
        'node_modules/jquery-typeahead/dist/jquery.typeahead.min.js'
    ], 'public/js/libs.js')
    .styles([
        'node_modules/jquery-typeahead/dist/jquery.typeahead.min.css'
    ], 'public/css/libs.css');
