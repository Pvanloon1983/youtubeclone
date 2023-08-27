let mix = require('laravel-mix');
mix.disableSuccessNotifications();

mix.js('src/scripts.js', 'js')
   .sass('src/style.scss', 'css')
   .setPublicPath('assets');