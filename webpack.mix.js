const mix = require('laravel-mix');

let cssOptions = {
    postCss: [
        require('tailwindcss'),
        require('postcss-nested')
    ],
    processCssUrls: false
}

mix.js('assets/js/main.js', '/')
.sass('assets/css/style.scss', '/')
    .options(cssOptions)
.sass('assets/css/editor-styles.scss', '/')
    .options(cssOptions)
