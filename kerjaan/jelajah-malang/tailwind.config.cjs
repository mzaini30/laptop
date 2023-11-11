/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}"],
  theme: {
    extend: {},
  },
  plugins: [require("@tailwindcss/typography"), require("daisyui")],
  daisyui: {
    themes: [
      {
        mytheme: {
          primary: "#d7f77e",

          secondary: "#10c900",

          accent: "#9dbcf2",

          neutral: "#322839",

          "base-100": "#f2f5f8",

          info: "#6693e5",

          success: "#186849",

          warning: "#8e7110",

          error: "#f56a66",
        },
      },
    ],
  },
};
