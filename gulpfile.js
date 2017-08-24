const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
    .webpack('app.js', 'public/js/app.js')
    .webpack('maligue.js', 'public/js/maligue.js')
    .version('css/app.css');
});

/*elixir(function(mix) {
    mix.sass(['app.scss'], 'css/app.css')
        .webpack('app.js', 'editableTable.js')
        .version('css/app.css');*/

    //.publish("normalize-css/normalize.css", "public/css/vendor/normalize.css"); //je publie ("ça", dans"")
    //.styles([
    //      "public/css/app.css",
    //      "(public/css/vendor/normalize.css)" //cf fin video https://laracasts.com/series/laravel-5-and-the-front-end/episodes/4?autoplay=true
    //mix.phpUnit() //pour faire un test phpUnit pour voir erreur dans php (gulp tdd pour test en continu)
    //(OU mix.phpSpec()

