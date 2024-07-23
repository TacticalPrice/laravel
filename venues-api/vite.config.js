import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
    vue(),
  ],
  build: {
    manifest: true,
    outDir: 'public/build',
  },
  resolve: {
    alias: {
      'vue': resolve(__dirname, 'node_modules/vue/dist/vue.esm-bundler.js')
    }
  }
});
