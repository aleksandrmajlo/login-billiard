const mix = require('laravel-mix');
/*
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
*/
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


mix.webpackConfig({
   plugins: [],
   resolve: {
      extensions: ['.js', '.json', '.vue'],
      alias: {
         '~': __dirname + '/resources/assets/js',
      }
   },
   output: {
      chunkFilename: 'js/[id].js'
   }
});