const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .copy(
        "node_modules/bootstrap/dist/css/bootstrap.css",
        "public/css/bootstrap.css"
    )
    .copy(
        "node_modules/bootstrap/dist/js/bootstrap.js",
        "public/js/bootstrap.js"
    )
    .copy(
        "node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css",
        "public/css/bootstrap-datepicker.css"
    )
    .copy(
        "node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js",
        "public/js/bootstrap-datepicker.js"
    )
    .copy(
        "node_modules/bootstrap-timepicker/css/bootstrap-timepicker.css",
        "public/css/bootstrap-timepicker.css"
    )
    .copy(
        "node_modules/bootstrap-timepicker/js/bootstrap-timepicker.js",
        "public/js/bootstrap-timepicker.js"
    );
