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

    mix.copyDirectory('resources/assets/img', 'public/static/img');
    mix.copyDirectory('resources/assets/webfonts', 'public/static/css/webfonts');
    mix.copyDirectory('resources/assets/js/lib/dataTables', 'public/static/js/lib/dataTables');
    mix.copyDirectory('resources/assets/css/lib/dataTables', 'public/static/css/lib/dataTables');
    mix.copyDirectory('resources/assets/css/lib/font', 'public/static/css/lib/font');
    mix.copyDirectory('resources/assets/js/lib/select2', 'public/static/js/lib/select2')
    mix.copyDirectory('resources/assets/js/lib/bootstrap-switch', 'public/static/js/lib/bootstrap-switch')
    mix.copyDirectory('resources/assets/js/lib/summernote', 'public/static/js/lib/summernote')
    mix.copyDirectory('resources/assets/js/web/', 'public/static/js/web')
    mix.copyDirectory('resources/assets/css/web/', 'public/static/css/web')
    mix.copyDirectory('resources/assets/css/fonts/', 'public/static/css/fonts');

    mix.js('resources/assets/js/admin.js', 'public/static/js')
    mix.js('resources/assets/js/bootstrap.bundle.min.js', 'public/static/js')
    mix.js('resources/assets/js/lib/sweetalert2.all.js', 'public/static/js/lib')
    mix.js('resources/assets/js/lib/bootstrap.bundle.js', 'public/static/js/lib')
        .sass('resources/assets/sass/admin.scss', 'public/static/css');
    
    mix.styles('resources/assets/css/auth-custom.css', 'public/static/css/auth-custom.css')
    mix.styles('resources/assets/css/admin-custom.css', 'public/static/css/admin-custom.css')
    mix.styles('resources/assets/css/lib/fontawesome.css', 'public/static/css/lib/fontawesome.css')
    mix.styles('resources/assets/css/lib/select2-bootstrap4.css', 'public/static/css/lib/select2-bootstrap4.css')
    mix.styles('resources/assets/css/lib/select2.css', 'public/static/css/lib/select2.css')
    mix.styles('resources/assets/css/lib/summernote-bs4.css', 'public/static/css/lib/summernote-bs4.css')
    mix.styles('resources/assets/css/lib/icheck-bootstrap.css', 'public/static/css/lib/icheck-bootstrap.css');