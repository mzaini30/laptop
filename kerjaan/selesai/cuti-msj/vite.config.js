import { defineConfig } from "vite";
import { svelte } from "@sveltejs/vite-plugin-svelte";
import legacy from "@vitejs/plugin-legacy";
import pages from "vite-plugin-pages-svelte";
import pluginYaml from "vite-plugin-yaml2";
import unoCss from "unocss/vite";
import transformerVariantGroup from "@unocss/transformer-variant-group";

let plugins = [
  svelte(),
  pages(),
  pluginYaml(),
  unoCss({ transformers: [transformerVariantGroup()] }),
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