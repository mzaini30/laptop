/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx,svelte}"],
  theme: {
    extend: {},
  },
  plugins: [require("@tailwindcss/typography"), require("daisyui")],
  daisyui: {
    themes: [
      {
        mytheme: {
          primary: "#a1f4a4",

          secondary: "#5c81bc",

          accent: "#55ed80",

          neutral: "#272b30",

          "base-100": "#ffffff",

          info: "#899eeb",

          success: "#3ce79a",

          warning: "#e58a0b",

          error: "#f03365",
        },
      },
    ],
  },
};
