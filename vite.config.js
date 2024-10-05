import {defineConfig} from 'vite';

export default defineConfig({
    build: {
        rollupOptions: {
            input: {
                main: 'main.js',
                index: 'index.html',
            },
            output: {
                entryFileNames: 'main.js',
                chunkFileNames: '[name].js',
                assetFileNames: '[name].[ext]',
            },
        },
        outDir: 'dist',
    },
});
