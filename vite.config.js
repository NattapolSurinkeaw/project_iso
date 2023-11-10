import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                    'resources/css/app.css', 
                    'resources/js/app.js',
                    'resources/js/backend.js',
                    'resources/js/bootstrap.js',
                    'resources/js/main.js',

                    // backend
                    'resources/js/backend/home/home.js',
                ],
            refresh: true,
        }),
    ],
});
