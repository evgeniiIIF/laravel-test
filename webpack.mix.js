const mix = require("laravel-mix");

mix.js("resources/assets/js/main.js", "public/assets/js");

mix.sass("resources/assets/sass/main.scss", "public/assets/css/");

mix.options({
    legacyNodePolyfills: true,
    processCssUrls: false,
    postCss: [
        require("postcss-custom-properties"),
        require("autoprefixer")({
            cascade: false,
        }),
        require("postcss-sort-media-queries"),
    ],
});

mix.copyDirectory("./resources/assets/img", "public/assets/img");

mix.copyDirectory("resources/assets/fonts", "public/assets/fonts");

mix.browserSync("127.0.0.1:8000");

mix.version();
