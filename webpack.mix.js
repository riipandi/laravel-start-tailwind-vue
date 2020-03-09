const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

if (mix.inProduction()) { mix.disableNotifications().version(); }
mix.options({ uglify: { uglifyOptions: { compress: { drop_console: true } } } });

// --------------------------------------------------------------------------------------
// Main resources
// --------------------------------------------------------------------------------------
mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
     tailwindcss('tailwind.config.js'),
   ]).purgeCss({
      folders: ['resources'], extensions: ['html', 'md', 'js', 'php', 'vue'],
      whitelistPatterns: [ /language/ ],
    });
