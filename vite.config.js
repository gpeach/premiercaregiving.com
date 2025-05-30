import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

// export default defineConfig({
//     server: {
//         host: '0.0.0.0',
//         port: 5173,
//         hmr: {
//             host: '10.0.0.198', // 👈 Your PC's IP address
//         },
//     },
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//         tailwindcss(),
//     ],
// });

export default defineConfig({
    base: '/',
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/sass/premiercaregiving.scss'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // Laravel expects this
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
                style: 'resources/css/app.css',
                caregiving: 'resources/sass/premiercaregiving.scss',
            },
        },
        manifest: true,
        emptyOutDir: true,
    },
});
