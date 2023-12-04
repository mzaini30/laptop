import daisyui from "daisyui";

/** @type {import('tailwindcss').Config} */
export default {
  content: ["./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}"],
  theme: {
    extend: {},
  },
  plugins: [daisyui],
  daisyui: {
    themes: [
      {
        mytheme: {
          primary: "#ffffff",

          secondary: "#ffffff",

          accent: "#ffffff",

          neutral: "#ffffff",

          "base-100": "#ffffff",

          info: "#ffffff",

          success: "#00ffff",

          warning: "#ffffff",

          error: "#ffffff",
        },
      },
    ],
  },
};
