# Login Zen

## Isi dari Tailwind Config

```javascript
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{svelte,js,ts,jsx,tsx}",
    "./node_modules/login-zen/**/*.svelte"
  ],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
}
```

## TODO

- [x] z-index paling atas