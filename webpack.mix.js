let mix = require('laravel-mix');

mix.js('resources/js/home.js', 'public/js')
    .js('resources/js/skill.js', 'public/js')
    .js('resources/js/actual_results.js', 'public/js')
    .js('resources/js/development.js', 'public/js')
    .js('resources/js/contact.js', 'public/js')
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css', {
      implementation: require('node-sass')
    });

mix.browserSync({
  files: [
    "public/**/*.*"
  ],
  proxy: "http://localhost:8000"
});
