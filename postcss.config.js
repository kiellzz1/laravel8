const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       require('postcss-import'),
       require('tailwindcss'),
       require('autoprefixer'),
   ])
   .version()
   .webpackConfig({
       output: {
           chunkFilename: 'js/[name].js?id=[chunkhash]',
       },
       stats: {
           colors: true,
           errorDetails: true,
       },
   });
