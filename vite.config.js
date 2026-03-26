import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
    build: {
        outDir: 'dist',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                style: resolve(__dirname, 'assets/css/input.css'),
                main: resolve(__dirname, 'assets/js/main.js'),
            },
            output: {
                assetFileNames: 'style.css',
                entryFileNames: 'main.js',
            },
        },
    },
});
