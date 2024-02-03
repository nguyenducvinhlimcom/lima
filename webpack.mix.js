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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

//npm install bootstrap@3.3.2
mix.copy('node_modules/bootstrap/dist/css/bootstrap.css', 'public/bower_components/bootstrap/dist/css/bootstrap.css');
mix.copy('node_modules/bootstrap/dist/css/bootstrap.css.map', 'public/bower_components/bootstrap/dist/css/bootstrap.css.map');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.js', 'public/bower_components/bootstrap/dist/js/bootstrap.js');
// simple-line-icons.css
mix.copy('node_modules/simple-line-icons/css/simple-line-icons.css', 'public/bower_components/simple-line-icons/css');
mix.copyDirectory('node_modules/simple-line-icons/fonts', 'public/bower_components/simple-line-icons/fonts');
// animate.min.css
mix.copy('node_modules/animate.css/animate.min.css', 'public/bower_components/animate.css/animate.min.css');
// font-awesome
mix.copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/bower_components/font-awesome/css/font-awesome.min.css');
mix.copy('node_modules/font-awesome/fonts', 'public/bower_components/font-awesome/fonts');
// select2
mix.copy('node_modules/select2/dist/css/select2.min.css', 'public/assets/css');
mix.copy('node_modules/select2/dist/js/select2.min.js', 'public/assets/js');
// cropper
mix.copy('node_modules/cropper/dist/cropper.min.css', 'public/assets/css');
mix.copy('node_modules/cropper/dist/cropper.min.js', 'public/assets/js');
// jkanpan
mix.copy('node_modules/jkanban/dist/jkanban.min.css', 'public/assets/css');
mix.copy('node_modules/jkanban/dist/jkanban.min.js', 'public/assets/js');
// bootstrap-datetimepicker
mix.copy('node_modules/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 'public/assets/css');
mix.copy('node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 'public/assets/js');
// flag-icon
mix.copy('node_modules/flag-icon-css/css/flag-icons.min.css', 'public/assets/css');
mix.copy('node_modules/flag-icon-css/flags', 'public/assets/css/flags');
// nouislider
mix.copy('node_modules/nouislider/distribute/nouislider.min.css', 'public/assets/css');
mix.copy('node_modules/nouislider/distribute/nouislider.min.js', 'public/assets/js');
// slick
mix.copy('node_modules/slick-carousel/slick/slick.css', 'public/assets/css');
mix.copy('node_modules/slick-carousel/slick/slick-theme.css', 'public/assets/css');
mix.copy('node_modules/slick-carousel/slick/slick.min.js', 'public/assets/js');
// Jquery
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/bower_components/jquery/dist');
mix.copy('node_modules/jquery/dist/jquery.min.map', 'public/bower_components/jquery/dist');
// Jquery UI 1.10 dont have, by myspa
// __________________________________
// floatThead
mix.copy('node_modules/floatthead/dist/jquery.floatThead.min.js', 'public/assets/js');
// pusher
mix.copy('node_modules/pusher-js/dist/web/pusher.min.js', 'public/assets/js');
// wnumb
mix.copy('node_modules/wnumb/wNumb.js', 'public/assets/js');
// moment
mix.copy('node_modules/moment/min/moment.min.js', 'public/assets/js');
mix.copy('node_modules/moment/moment.js', 'public/bower_components/moment');
// fot jquery
mix.copy('node_modules/jquery.flot/jquery.flot.js', 'public/bower_components/flot/jquery.flot.js');
mix.copy('node_modules/jquery.flot/jquery.flot.pie.js', 'public/bower_components/flot/jquery.flot.pie.js');
mix.copy('node_modules/jquery.flot/jquery.flot.resize.js', 'public/bower_components/flot/jquery.flot.resize.js');
// flot tooltip
mix.copy('node_modules/jquery.flot.tooltip/js/jquery.flot.tooltip.js', 'public/bower_components/flot.tooltip/js/jquery.flot.tooltip.js');
// npm i screenfull@1.2.0
mix.copy('node_modules/screenfull/dist/screenfull.js', 'public/bower_components/screenfull/dist/screenfull.min.js');
// npm install jquery-slimscroll@1.3
mix.copy('node_modules/jquery-slimscroll/jquery.slimscroll.min.js', 'public/bower_components/slimscroll/jquery.slimscroll.min.js');
// npm install bootstrap-touchspin@3.0.1
mix.copy('node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css', 'public/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css');
mix.copy('node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js', 'public/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js');
// npm i footable@2.0.5
mix.copy('node_modules/footable/dist/footable.all.min.js', 'public/bower_components/footable/dist/footable.all.min.js');
mix.copy('node_modules/footable/css/footable.core.css', 'public/bower_components/footable/css/footable.core.css');
// npm i fullcalendar@2.3.1
mix.copy('node_modules/fullcalendar/dist/fullcalendar.min.js', 'public/bower_components/fullcalendar/dist/fullcalendar.min.js');
mix.copy('node_modules/fullcalendar/dist/fullcalendar.css', 'public/bower_components/fullcalendar/dist//fullcalendar.css');
mix.copy('node_modules/fullcalendar/dist/fullcalendar.theme.css', 'public/bower_components/fullcalendar/dist/fullcalendar.theme.css');
// npm i bootstrap-daterangepicker@1.3.2-1.1
mix.copy('node_modules/bootstrap-daterangepicker/daterangepicker.js', 'public/bower_components/bootstrap-daterangepicker/daterangepicker.js');
mix.copy('node_modules/bootstrap-daterangepicker/daterangepicker-bs3.css', 'public/bower_components/bootstrap-daterangepicker/daterangepicker-bs3.css');
// npm i bootstrap-tagsinput@0.5.0
mix.copy('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js', 'public/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js');
mix.copy('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css', 'public/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css');
