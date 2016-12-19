const elixir = require('laravel-elixir');
process.env.DISABLE_NOTIFIER = elixir.config.production;

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
       .webpack('app.js');

    mix.browserSync(
    {
    	proxy : 'sdm.dev',
        notify: false
    },
    [
		'app/**/*',
		'resources/views/**/*'
	]);
});
