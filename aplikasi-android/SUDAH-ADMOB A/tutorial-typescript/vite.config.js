import { defineConfig } from "vite";
import { svelte } from "@sveltejs/vite-plugin-svelte";
import legacy from "@vitejs/plugin-legacy";
import pages from "vite-plugin-pages-svelte";
import uno_css from "unocss/vite";
import { presetTypography, presetUno } from "unocss";
import transformerVariantGroup from "@unocss/transformer-variant-group";
import { mdsvex } from "mdsvex";
// import viteMdx from "vite-plugin-mdx";

let pengaturan_lainnya = {
  build: {
    rollupOptions: {
      // ... (konfigurasi rollup lainnya)
      output: {
        manualChunks(id) {
          // Pisahkan file .md menjadi chunk terpisah
          if (id.endsWith(".md")) {
            return "md-chunks/" + id.slice(id.lastIndexOf("/") + 1, -3);
          }
        },
      },
    },
  },
};

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
      ...pengaturan_lainnya,
    };
  } else {
    return {
      plugins: [...plugins],
      ...pengaturan_lainnya,
    };
  }
});
