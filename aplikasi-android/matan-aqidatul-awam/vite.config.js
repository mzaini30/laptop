import { defineConfig } from "vite";
import { svelte } from "@sveltejs/vite-plugin-svelte";
import legacy from "@vitejs/plugin-legacy";
import pages from "vite-plugin-pages-svelte";
import WindiCSS from "vite-plugin-windicss";
import { mdsvex } from "mdsvex";

let plugins = [
  svelte({
    extensions: [".svelte", ".svx"],
    preprocess: mdsvex(),
  }),
  pages(),
  WindiCSS(),
];

// https://vitejs.dev/config/
export default defineConfig(({ mode }) => {
  if (mode == "android") {
    return {
      plugins: [legacy(), ...plugins],
    };
  } else {
    return {
      plugins: [...plugins],
    };
  }
});
