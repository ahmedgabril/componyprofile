import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';



import ckeditor5 from '@ckeditor/vite-plugin-ckeditor5';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,

        }),

    ],

});
