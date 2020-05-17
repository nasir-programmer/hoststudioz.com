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

mix.js('public/js/jquery-3.2.1.min.js', 'public/app/js').
js('public/js/popper.js', 'public/app/js').
js('public/js/bootstrap.min.js', 'public/app/js').
js('public/js/stellar.js', 'public/app/js').
js('public/vendors/lightbox/simpleLightbox.min.js', 'public/app/js').
js('public/vendors/nice-select/js/jquery.nice-select.min.js', 'public/app/js').
js('public/vendors/isotope/imagesloaded.pkgd.min.js', 'public/app/js').
js('public/vendors/isotope/isotope-min.js', 'public/app/js').
js('public/vendors/owl-carousel/owl.carousel.min.js', 'public/app/js').
js('public/js/jquery.ajaxchimp.min.js', 'public/app/js').
js('public/vendors/counter-up/jquery.waypoints.min.js', 'public/app/js').
js('public/vendors/counter-up/jquery.counterup.js', 'public/app/js').
js('public/js/mail-script.js', 'public/app/js').
js('public/js/theme.js', 'public/app/js');

mix.styles('public/css/bootstrap.css', 'public/app/css/bootstrap.css').
styles('public/vendors/linericon/style.css', 'public/app/css/style.css').
styles('public/css/font-awesome.min.css', 'public/app/css/font-awesome.min.css').
styles('public/vendors/owl-carousel/owl.carousel.min.css', 'public/app/css/owl.carousel.min.css').
styles('public/vendors/lightbox/simpleLightbox.css', 'public/app/css/simpleLightbox.css').
styles('public/vendors/nice-select/css/nice-select.css', 'public/app/css/nice-select.css').
styles('public/vendors/animate-css/animate.css', 'public/app/css/animate.css').
styles('public/css/style.css', 'public/app/css/style.css').
styles('public/css/responsive.css', 'public/app/css/responsive.css');

    
mix.js([
    'public/js/jquery-3.2.1.min.js',
    'public/js/popper.js',
    'public/js/bootstrap.min.js',
    'public/js/stellar.js',
    'public/vendors/lightbox/simpleLightbox.min.js',
    'public/vendors/nice-select/js/jquery.nice-select.min.js',
    'public/vendors/isotope/imagesloaded.pkgd.min.js',
    'public/vendors/isotope/isotope-min.js',
    'public/vendors/owl-carousel/owl.carousel.min.js',
    'public/js/jquery.ajaxchimp.min.js',
    'public/vendors/counter-up/jquery.waypoints.min.js',
    'public/vendors/counter-up/jquery.counterup.js',
    'public/js/mail-script.js',
    'public/js/theme.js',
], 'public/js/all.js');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
        'public/css/bootstrap.css',
        // 'public/vendors/linericon/style.css',
        'public/css/font-awesome.min.css',
        'public/vendors/owl-carousel/owl.carousel.min.css',
        'public/vendors/lightbox/simpleLightbox.css',
        'public/vendors/nice-select/css/nice-select.css',
        'public/vendors/animate-css/animate.css',
        'public/css/style.css',
        'public/css/responsive.css',
    ], 'public/css/all.css');
