import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                 'resources/js/app.js',
                 'resources/css/fontiran.css',
                 'resources/css/fontirannum.css',
                 'resources/css/taha.css',
                 'resources/js/map.js',
                 'resources/js/statistic.js',
            ],
            refresh: true,
        }),
    ],
});
