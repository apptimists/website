var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';

elixir(function(mix) {
    var env = argv.e || argv.env || 'local';
    var port = argv.p || argv.port || 3000;

    mix.sass('main.scss')
        .browserify('main.js')
        .copy('node_modules/font-awesome/fonts', 'source/fonts')
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'source/fonts/bootstrap')
        .copy('node_modules/flag-icon-css/flags', 'source/flags')
        .exec('./vendor/bin/jigsaw build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
        .browserSync({
            server: { baseDir: 'build_local' },
            proxy: null,
            files: [ 'build_local/**/*' ]
        });
});
