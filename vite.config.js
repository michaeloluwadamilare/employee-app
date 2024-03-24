import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/assets/css/style.css',
                'public/assets/js/main.js',
            ],
            refresh: true,
        }),
    ],

    server: {
        // Define the base directory from which Vite serves files
        base: './public',
      },
});