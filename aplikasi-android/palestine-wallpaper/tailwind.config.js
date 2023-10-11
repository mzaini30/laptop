/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx,svelte}"],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")], daisyui: {
    themes: [
      {
        mytheme: {
        
"primary": "#6200a8",
        
"secondary": "#8dfc9c",
        
"accent": "#2c90d3",
        
"neutral": "#2b1b31",
        
"base-100": "#f9f9fb",
        
"info": "#6eb5e7",
        
"success": "#38e58c",
        
"warning": "#cc8005",
        
"error": "#fb4652",
        },
      },
    ],
  },
};
