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
          primary: "#db39d0",

          secondary: "#89a2d3",

          accent: "#e0b982",

          neutral: "#201c26",

          "base-100": "#3d3e43",

          info: "#7dafe8",

          success: "#198551",

          warning: "#986a06",

          error: "#f96684",
        },
      },
    ],
  },
};
