module.exports = {
  content: require("fast-glob").sync(
    [
      "source/**/*.{blade.php,blade.md,md,html,vue}",
      "!source/**/_tmp/*", // exclude temporary files
    ],
    { dot: true }
  ),
  theme: {
    extend: {
      fontFamily: {
        sans: ["Gilmer", "sans-serif"],
      },
      colors: {
        orange: {
          50: "#FFFCFA",
          100: "#FFEDE5",
          200: "#FFD9C7",
          300: "#FFC2A6",
          400: "#FF7B39",
          500: "#FF5200",
        },
        gray: {
          700: "#5C5553",
          900: "#332A26",
        },
      },
    },
  },
  plugins: [],
};
