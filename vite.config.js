import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/darkmode.js'],
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
>>>>>>> nippot2
            refresh: true,
        }),
    ],
});
