const { mix } = require('laravel-mix');

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

// for plugin css
mix.styles([
    'public/themes/pusri/front/css/bootstrap.min.css',
    'public/themes/pusri/front/css/animate.min.css',
    'public/themes/pusri/front/css/loader.css',
    'public/themes/pusri/front/css/style.default.css',
    'public/themes/pusri/front/css/custom.css',
    'public/themes/pusri/front/css/slider-def.css',
], 'public/themes/pusri/front/build/css/plugins.css');


/* script compile */

mix.scripts([
	'public/themes/pusri/front/js/jquery-1.11.0.min.js',
	'public/themes/pusri/front/js/bootstrap.min.js',
	'public/themes/pusri/front/dropdown/js/modernizr.custom.63321.js',
	'public/themes/pusri/front/js/respond.min.js',
	'public/themes/pusri/front/js/jquery.cookie.js',
	'public/themes/pusri/front/js/waypoints.min.js',
	'public/themes/pusri/front/js/modernizr.js',
	'public/themes/pusri/front/js/bootstrap-hover-dropdown.js',
	'public/themes/pusri/front/js/front.js',
	'public/themes/pusri/front/dropdown/js/jquery.dropdown.js',
	'public/themes/pusri/front/js/myscript.js',
], 'public/themes/pusri/front/build/js/plugins.js');

