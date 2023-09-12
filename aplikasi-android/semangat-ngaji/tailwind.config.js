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
          primary: "#7bc6ce",

          secondary: "#289bcc",

          accent: "#1f3de2",

          neutral: "#2d2136",

          "base-100": "#f4f5f6",

          info: "#0f87f0",

          success: "#138141",

          warning: "#f9d553",

          error: "#f14176",
        },
      },
    ],
  },
};
