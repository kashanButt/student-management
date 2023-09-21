const mix = require("laravel-mix");

mix.setPublicPath("public");
mix.css("resources/css/app.css", "public/css");
mix.js("resources/js/app.js", "public/js");
