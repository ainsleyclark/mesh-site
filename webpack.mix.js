const mix = require('laravel-mix');
const fs = require('fs');

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
    .babel('public/js/app.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('mesh-src/src/mesh.scss', 'public/css')
    .sass('mesh-src/src/mesh-grid.scss', 'public/css')

//Builder File
mix.js('resources/js/builder.js', 'public/js')
    .babel('public/js/builder.js', 'public/js/builder.js')

//Docs Pages
let jsFiles = fs.readdirSync('resources/js/docs');

jsFiles.forEach(item => {
    mix.js('resources/js/docs/' + item, 'public/js/docs/' + item)
    .babel('public/js/docs/' + item, 'public/js/docs/' + item)
})

//BrowserSync
mix.browserSync('meshcss.com')
    .disableNotifications();
