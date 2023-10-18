import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    resolve: {
        alias: {
            "~bootstrap": path.resolve("node_modules/bootstrap"),
        },
    },
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/scss/public/app.scss",
                "resources/scss/private/app.scss",
            ],
            refresh: true,
        }),
    ],
});
