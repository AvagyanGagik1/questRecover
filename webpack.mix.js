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
// mix.webpackConfig({ stats: {
//         children: true
//     }})


mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin/UI/helpers/imageScale.js','public/js/admin')
    .js('resources/js/admin/UI/helpers/imagePreview.js','public/js/admin')
    .js('resources/js/admin/UI/helpers/delete.js','public/js/admin')
    .js('resources/js/front/templateScript.js','public/js/front')
    .copyDirectory('resources/ckeditor','public')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

