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

mix.js(['resources/js/admin/admin.js'], 'public/js')
    .sass('resources/sass/admin/admin.scss', 'public/css');

mix.js(['resources/js/frontend/frontend.js'], 'public/js')
    .sass('resources/sass/frontend/frontend.scss', 'public/css')
    .copyDirectory('resources/images/frontend', 'public/images/frontend')
    .copyDirectory('resources/fonts/frontend', 'public/fonts/frontend');

if (mix.inProduction()) {
    mix.version();
}
