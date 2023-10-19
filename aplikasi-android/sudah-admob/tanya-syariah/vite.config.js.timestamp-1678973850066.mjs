// vite.config.js
import { defineConfig } from "vite";
import { svelte } from "@sveltejs/vite-plugin-svelte";
import legacy from "@vitejs/plugin-legacy";
import pages from "vite-plugin-pages-svelte";
import preprocess from "svelte-preprocess";
var plugins = [
  svelte({
    preprocess: [
      preprocess({
        postcss: true
      })
    ]
  }),
  pages()
];
var vite_config_default = defineConfig(({ mode }) => {
  if (mode == "android") {
    return {
      plugins: [legacy(), ...plugins]
    };
  } else {
    return {
      plugins: [...plugins]
    };
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxhcGxpa2FzaSBhbmRyb2lkXFxcXHRhbnlhLXN5YXJpYWhcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIkM6XFxcXGFwbGlrYXNpIGFuZHJvaWRcXFxcdGFueWEtc3lhcmlhaFxcXFx2aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vQzovYXBsaWthc2klMjBhbmRyb2lkL3RhbnlhLXN5YXJpYWgvdml0ZS5jb25maWcuanNcIjtpbXBvcnQgeyBkZWZpbmVDb25maWcgfSBmcm9tIFwidml0ZVwiO1xyXG5pbXBvcnQgeyBzdmVsdGUgfSBmcm9tIFwiQHN2ZWx0ZWpzL3ZpdGUtcGx1Z2luLXN2ZWx0ZVwiO1xyXG5pbXBvcnQgbGVnYWN5IGZyb20gXCJAdml0ZWpzL3BsdWdpbi1sZWdhY3lcIjtcclxuaW1wb3J0IHBhZ2VzIGZyb20gXCJ2aXRlLXBsdWdpbi1wYWdlcy1zdmVsdGVcIjtcclxuaW1wb3J0IHByZXByb2Nlc3MgZnJvbSBcInN2ZWx0ZS1wcmVwcm9jZXNzXCI7XHJcblxyXG5sZXQgcGx1Z2lucyA9IFtcclxuICBzdmVsdGUoe1xyXG4gICAgcHJlcHJvY2VzczogW1xyXG4gICAgICBwcmVwcm9jZXNzKHtcclxuICAgICAgICBwb3N0Y3NzOiB0cnVlLFxyXG4gICAgICB9KSxcclxuICAgIF0sXHJcbiAgfSksXHJcbiAgcGFnZXMoKSxcclxuXTtcclxuXHJcbi8vIGh0dHBzOi8vdml0ZWpzLmRldi9jb25maWcvXHJcbmV4cG9ydCBkZWZhdWx0IGRlZmluZUNvbmZpZygoeyBtb2RlIH0pID0+IHtcclxuICBpZiAobW9kZSA9PSBcImFuZHJvaWRcIikge1xyXG4gICAgcmV0dXJuIHtcclxuICAgICAgcGx1Z2luczogW2xlZ2FjeSgpLCAuLi5wbHVnaW5zXSxcclxuICAgIH07XHJcbiAgfSBlbHNlIHtcclxuICAgIHJldHVybiB7XHJcbiAgICAgIHBsdWdpbnM6IFsuLi5wbHVnaW5zXSxcclxuICAgIH07XHJcbiAgfVxyXG59KTtcclxuIl0sCiAgIm1hcHBpbmdzIjogIjtBQUE2UixTQUFTLG9CQUFvQjtBQUMxVCxTQUFTLGNBQWM7QUFDdkIsT0FBTyxZQUFZO0FBQ25CLE9BQU8sV0FBVztBQUNsQixPQUFPLGdCQUFnQjtBQUV2QixJQUFJLFVBQVU7QUFBQSxFQUNaLE9BQU87QUFBQSxJQUNMLFlBQVk7QUFBQSxNQUNWLFdBQVc7QUFBQSxRQUNULFNBQVM7QUFBQSxNQUNYLENBQUM7QUFBQSxJQUNIO0FBQUEsRUFDRixDQUFDO0FBQUEsRUFDRCxNQUFNO0FBQ1I7QUFHQSxJQUFPLHNCQUFRLGFBQWEsQ0FBQyxFQUFFLEtBQUssTUFBTTtBQUN4QyxNQUFJLFFBQVEsV0FBVztBQUNyQixXQUFPO0FBQUEsTUFDTCxTQUFTLENBQUMsT0FBTyxHQUFHLEdBQUcsT0FBTztBQUFBLElBQ2hDO0FBQUEsRUFDRixPQUFPO0FBQ0wsV0FBTztBQUFBLE1BQ0wsU0FBUyxDQUFDLEdBQUcsT0FBTztBQUFBLElBQ3RCO0FBQUEsRUFDRjtBQUNGLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
