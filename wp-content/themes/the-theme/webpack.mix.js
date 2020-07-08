let mix = require('laravel-mix');

/**
 * assets/js/app.js gets compiled into custom.js then minified into custom.min.js
 * assets/scss/style.scss gets compiled into style.css then source mapped
 */

mix.js('assets/js/app.js', 'assets/js/app-compiled.js').webpackConfig({
    node: {
        fs: "empty"
    }
}).minify('assets/js/custom.js').sass('assets/scss/style.scss', 'style.css').options({
    processCssUrls: false
}).sourceMaps().sass('assets/admin/app.scss', 'assets/admin/admin.css').sourceMaps()
    .js('assets/admin/app.js', 'assets/js/admin/main.js');