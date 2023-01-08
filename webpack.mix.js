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

mix
  .js("resources/js/app.js", "public/js")
  // .postCss("resources/css/app.css", "public/css")
  .sass('resources/sass/app.scss', 'public/css')
  // .copy(
  //   "node_modules/@fortawesome/fontawesome-free/webfonts",
  //   "public/webfonts"
  // )
  .copy(
    'node_modules/admin-lte/dist/img',
    'public/img'
  )
  .sourceMaps()
  ;

if (mix.inProduction()) {
  mix.version();
} else {
  // Uses inline source-maps on development
  mix.webpackConfig({
    devtool: "inline-source-map",
    stats: {
      children: true
    }
  });
}
