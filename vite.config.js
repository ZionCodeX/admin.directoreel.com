import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/css/style.bundle.css',
                'resources/assets/js/scripts.bundle.js',
            ],
            refresh: true,
        }),
    ],
});
