import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/pages/index.js',
                'resources/js/pages/body-masses/index.js',
                'resources/js/pages/body-masses/edit.js',
            ],
            refresh: true,
        }),
    ],
});
