const plugin = require("tailwindcss/plugin");

module.exports = {
  content: require("fast-glob").sync(
    [
      "source/**/*.{blade.php,blade.md,md,html,vue}",
      "!source/**/_tmp/*", // exclude temporary files
    ],
    { dot: true }
  ),
  theme: {
    fontSize: {
      4: "1rem",
      5: "1.25rem",
      6: "1.5rem",
      8: "2rem",
      10: "2.5rem",
      12: "3rem",
      16: "4rem",
      20: "5rem",
      24: "6rem",
      30: "7.5rem",
    },
    extend: {
      fontFamily: {
        primary: ["Gilmer", "sans-serif"],
        secondary: ["Figtree", "sans-serif"],
      },
      colors: {
        orange: {
          50: "#FFFCFA",
          100: "#FFEDE5",
          200: "#FFD9C7",
          300: "#FFC2A6",
          400: "#FF7B39",
          500: "#FF5200",
          600: "#D44F10",
        },
        gray: {
          700: "#5C5553",
          900: "#332A26",
        },
      },
      backgroundImage: {
        "hero-gradient": "linear-gradient(180deg, #FFEDE5 0%, #FFFFFF 77.05%)",
        "services-gradient":
          "linear-gradient(90deg, #FFEDE5 0%, #FFEDE5 62.5%, #FFFCFA 62.51%, #FFFCFA 100%)",
      },
      boxShadow: {
        "outline-orange": "-8px 8px 0 0 #FFC2A6",
      },
    },
  },
  plugins: [
    plugin(function ({ addComponents, theme }) {
      addComponents({
        ".transition-fast": {
          transitionProperty: theme("transitionProperty.all"),
          transitionDuration: theme("transitionDuration.100"),
          transitionTimingFunction: theme("transitionTimingFunction.in-out"),
        },
        ".transition-slow": {
          transitionProperty: theme("transitionProperty.all"),
          transitionDuration: theme("transitionDuration.300"),
          transitionTimingFunction: theme("transitionTimingFunction.in-out"),
        },
      });
    }),
  ],
};
