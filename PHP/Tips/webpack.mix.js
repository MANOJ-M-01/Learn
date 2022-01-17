//https://github.com/tailwindlabs/tailwindcss-jit/issues/24
const mix = require('laravel-mix');

mix.sass('resources/css/app.scss', 'public/css').options({
    postCss: [
      require('autoprefixer')({
        browsers: ['last 2 versions'],
        grid: true,
      }),
    ],
  });
