const mix = require('laravel-mix');

/*
    |--------------------------------------------------------------------------
    | Mix Asset Management
    |--------------------------------------------------------------------------
    |
    | Mix provides a clean, fluent API for defining some Webpack build steps
    | for your Laravel application. By default, we are compiling the Sass
    | file for the application as well as bundling up all the JS files.
    |
*/

mix.js('resources/js/app.js', 'public/resources/js')
    .js('resources/js/main.js', 'public/resources/js')
    .js('resources/js/dashboard_1.js', 'public/resources/js')
    .js('resources/js/dashboard_2.js', 'public/resources/js')
    .js('resources/js/brand/create.js', 'public/resources/js/brand')
    .js('resources/js/brand/edit.js', 'public/resources/js/brand')
    .js('resources/js/brand/index.js', 'public/resources/js/brand')
    .js('resources/js/category/create.js', 'public/resources/js/category')
    .js('resources/js/category/edit.js', 'public/resources/js/category')
    .js('resources/js/category/index.js', 'public/resources/js/category')
    .js('resources/js/customer/cart.js', 'public/resources/js/customer')
    .js('resources/js/customer/home.js', 'public/resources/js/customer')
    .js('resources/js/customer/order_history.js', 'public/resources/js/customer')
    .js('resources/js/order/index.js', 'public/resources/js/order')
    .js('resources/js/order/show.js', 'public/resources/js/order')
    .js('resources/js/product/create.js', 'public/resources/js/product')
    .js('resources/js/product/edit.js', 'public/resources/js/product')
    .js('resources/js/product/index.js', 'public/resources/js/product')
    .js('resources/js/posts/index.js', 'public/resources/js/posts')
    .js('resources/js/posts/create.js', 'public/resources/js/posts')
    .js('resources/js/rating/index.js', 'public/resources/js/rating')
    .js('resources/js/role/index.js', 'public/resources/js/role')
    .postCss('resources/css/app.css', 'public/resources/css', [
        require("@tailwindcss/postcss"),
    ])
    .sourceMaps();
