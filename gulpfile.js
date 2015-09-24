var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('footer.sass');




    mix.scripts([
        "app.js",
        "ajax.js"
    ]);

    mix.scripts([
        "gmap.js",

    ],'public/js/gmap.js');


    mix.scripts([
        "realtime.js",

    ],'public/js/realtime.js');



    mix.scripts([
        "graph.js",

    ],'public/js/graph.js');




});
