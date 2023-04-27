import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/sass/portal.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
