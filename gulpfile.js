var elixir = require('laravel-elixir');



elixir(function(mix) {
    mix.sass([
        'all.scss',
    ], 'public/css/all.css');
});

elixir(function(mix) {
    mix.webpack('app.js');
});

elixir(function(mix) {
    mix.version(['css/all.css', 'js/app.js']);
});
