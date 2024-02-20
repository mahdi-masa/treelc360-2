import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/fontiran.css',
                'resources/css/fontirannum.css',
                'resources/css/taha.css',
                'resources/js/map.js',
                'resources/js/app.js',
                'resources/js/datepicker.js',
                'resources/js/statistic.js',
                'resources/js/stat2.js',
            ],
            refresh: true,
        }),
    ],
});
