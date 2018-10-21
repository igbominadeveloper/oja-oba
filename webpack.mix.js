let mix = require('laravel-mix');

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
mix.styles([
    'resources/assets/nephos/css/bulma.css',
    'resources/assets/nephos/css/core.css',
    'resources/assets/nephos/js/slick/slick.css',
    'resources/assets/nephos/js/slick/slick-theme.css',
    'resources/assets/nephos/js/webuipopover/jquery.webui-popover.min.css',
    'resources/assets/nephos/js/izitoast/css/iziToast.min.css',
    'resources/assets/nephos/js/zoom/zoom.css',
    'resources/assets/nephos/js/jpcard/card.css',
    'resources/assets/nephos/css/chosen/chosen.css',
    'resources/assets/nephos/css/icons.min.css'
],'public/css/app.css')
.scripts(['resources/assets/nephos/js/app.js','resources/assets/nephos/js/nephos.js'],'public/js/bulma.js');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

