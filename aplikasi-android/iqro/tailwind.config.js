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
          primary: "#bcf7a3",

          secondary: "#87e588",

          accent: "#fcc4ce",

          neutral: "#1f1424",

          "base-100": "#eee7f3",

          info: "#81a3ef",

          success: "#2acba8",

          warning: "#d58915",

          error: "#ec465c",
        },
      },
    ],
  },
};
