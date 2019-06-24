const mix = require('laravel-mix');
const fs = require('fs');
const browsersupport = require("./mesh-src/browserslistrc.js");

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
// mix.js('resources/js/app.js', 'public/js')
//     .babel('public/js/app.js', 'public/js/app.es5.js')

mix.scripts([
    'resources/js/app.js',
    'resources/js/docs.js'
], 'public/js/app.js')
.babel('public/js/app.js', 'public/js/app.es5.js');


mix.sass('resources/sass/app.scss', 'public/css')
    .sass('mesh-src/src/mesh-grid.scss', 'public/css')
    .sass('mesh-src/src/mesh.scss', 'public/css').options({
        autoprefixer: {
            options: {
                overrideBrowserslist: browsersupport.overrideBrowserslist
            }
        }
    });  
    
//Builder File
mix.js('resources/js/builder.js', 'public/js')
    .babel('public/js/builder.js', 'public/js/builder.js')

//BrowserSync
mix.browserSync('meshcss.com')


