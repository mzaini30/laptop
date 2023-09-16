import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";
import pages from "vite-plugin-pages";
import legacy from "@vitejs/plugin-legacy";
import UnoCSS from "unocss/vite";
import transformerVariantGroup from "@unocss/transformer-variant-group";

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue(),
    pages(),
    legacy(),
    UnoCSS({
      transformers: [transformerVariantGroup()],
    }),
  ],
});
