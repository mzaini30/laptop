/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx,svelte}"],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
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
