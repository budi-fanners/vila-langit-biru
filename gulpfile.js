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
    mix.sass('app.scss');
});

elixir(function(mix) {
    mix.sass('app.scss')
		.scripts([
				'jquery.js', 
				'tether.min.js',
				'bootstrap.min.js', 
			], 'public/js/app.js')    
		.version([
				'public/css/app.css',
				'public/js/app.js',
			])
		.copy('resources/assets/fonts', 'public/build/fonts/')
		.copy('resources/assets/plugins/', 'public/plugins/');
});