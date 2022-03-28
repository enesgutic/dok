let mix = require('laravel-mix');


mix.js('src/app.js', '/')
.sass('src/app.scss', '/')
.setPublicPath('dist');


mix.autoload({ 'jquery': ['window.$', 'window.jQuery'] });