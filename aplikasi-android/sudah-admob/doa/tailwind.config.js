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
          primary: "#8f68d6",

          secondary: "#dea6fc",

          accent: "#fff2b5",

          neutral: "#1f182b",

          "base-100": "#e8e9ed",

          info: "#3b7ae8",

          success: "#66ea99",

          warning: "#e8c517",

          error: "#f7514b",
        },
      },
    ],
  },
};
