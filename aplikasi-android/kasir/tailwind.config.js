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
          primary: "#7ad63e",

          secondary: "#441b9b",

          accent: "#75ffe5",

          neutral: "#2b2834",

          "base-100": "#262d40",

          info: "#8bb6df",

          success: "#1abc97",

          warning: "#c98313",

          error: "#e54373",
        },
      },
    ],
  },
};
