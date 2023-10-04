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
          primary: "#f2ed8c",

          secondary: "#e8c640",

          accent: "#b4bf3b",

          neutral: "#242c38",

          "base-100": "#e7e9ee",

          info: "#83aee7",

          success: "#2dd26c",

          warning: "#e7a71d",

          error: "#f8573a",
        },
      },
    ],
  },
};
