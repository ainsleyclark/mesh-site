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

//Main JS & SASS
mix.js('resources/js/app.js', 'public/js')
    .babel('public/js/app.js', 'public/js/app.es5.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('mesh-src/src/mesh.scss', 'public/css')
    .sass('mesh-src/src/mesh-grid.scss', 'public/css')
    .minify('public/js/app.es5.js');

//Builder File
mix.js('resources/js/builder.js', 'public/js')
    .babel('public/js/builder.js', 'public/js/builder.es5.js')
    .minify('public/js/builder.es5.js');

//BrowserSync
mix.browserSync('meshcss.com');
