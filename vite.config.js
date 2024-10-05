import {defineConfig} from 'vite';

export default defineConfig({
    alias: {
        '@': '/src', // Assurez-vous que ceci pointe vers le bon répertoire
    },
    build: {
        rollupOptions: {
            input: {
                main: 'main.js',
                index: 'index.html',
            },
            output: {
                entryFileNames: 'main.js', // Nom du fichier JS sans hachage
                chunkFileNames: '[name].js', // Noms des fichiers de chunk sans hachage
                assetFileNames: '[name].[ext]',
            },
        },
        outDir: 'dist',
    },
});
