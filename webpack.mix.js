const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.setPublicPath("/");
mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        //
]);

mix.webpackConfig({
    resolve: {
        fallback: {
            // "stream": false,
            // "zlib": false,
            "stream": require.resolve("stream-browserify"),
            "zlib": require.resolve("browserify-zlib"),
            extensions: [ '.js', '.vue' ],
            alias     : { '@': `${ __dirname  }/resources` },

        },
        output: {
            publicPath   : '/',
            chunkFilename: 'js/[name].[chunkhash].js',
        },
    }
});

