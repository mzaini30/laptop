/** @type {import('@sveltejs/kit').Config} */
import adapterStatic from "@sveltejs/adapter-static";
import WindiCSS from "vite-plugin-windicss";

const config = {
  kit: {
    // hydrate the <div id="svelte"> element in src/app.html
    target: "#svelte",
    vite: {
      plugins: [WindiCSS()],
    },
    adapter: adapterStatic({
      fallback: "index.html",
    }),
  },
};

export default config;