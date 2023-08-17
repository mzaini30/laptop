import { defineConfig } from "vite";
import { svelte } from "@sveltejs/vite-plugin-svelte";
import legacy from "@vitejs/plugin-legacy";
import pages from "vite-plugin-pages-svelte";
import uno_css from "unocss/vite";
import { presetTypography, presetUno } from "unocss";
import transformerVariantGroup from "@unocss/transformer-variant-group";
import { mdsvex } from "mdsvex";

let plugins = [
  svelte({
    extensions: [".svelte", ".svx", ".md"],
    preprocess: mdsvex({
      extensions: [".md"],
      layout: "./src/layout.svelte",
    }),
  }),
  pages({
    extensions: ["svelte", "md"],
  }),
  uno_css({
    // ...
    transformers: [transformerVariantGroup()],
    presets: [presetUno(), presetTypography()],
  }),
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
