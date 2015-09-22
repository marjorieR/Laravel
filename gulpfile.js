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
        "ajax.js",
        "realtime.js",
        "graph.js",

    ]);

    mix.scripts([
        "gmap.js",

    ],'public/js/gmap.js');



    mix.scripts([



    ]);


});
