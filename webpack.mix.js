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

mix.js('resources/js/package_simplifier/app.js', 'public/package_simplifier.js')
    .vue();

mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/font-awesome.min.css',
    'resources/css/style.css'
], 'public/package_simplifier.css');