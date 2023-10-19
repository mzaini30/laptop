import { defineConfig } from "vite";
import { svelte } from "@sveltejs/vite-plugin-svelte";
import legacy from "@vitejs/plugin-legacy";
import pages from "vite-plugin-pages-svelte";
import WindiCSS from "vite-plugin-windicss";

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [svelte(), legacy(), pages(), WindiCSS()],
  resolve: {
    alias: {
      "node-fetch": "isomorphic-fetch",
    },
  },
  // define: {
  //   global: {},
  // },
});
