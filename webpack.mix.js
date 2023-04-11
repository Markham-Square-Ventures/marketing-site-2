const mix = require("laravel-mix");
require("laravel-mix-jigsaw");

mix.disableSuccessNotifications();
mix.setPublicPath("source/assets/build");

mix
  .jigsaw()
  .js("source/_assets/js/main.js", "js")
  .js("source/_assets/js/light.min.js", "js")
  .js("source/_assets/js/thin.min.js", "js")
  .js("source/_assets/js/fontawesome.min.js", "js")
  .css("source/_assets/css/main.css", "css", [
    require("postcss-import"),
    require("tailwindcss"),
  ])
  .options({
    processCssUrls: false,
  })
  .version();
