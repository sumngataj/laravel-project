/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/**.vue",
    ],
    theme: {
        extend: {
            colors: {
                "pink-violet": "#c0a4b4",
                "dirty-gray": "#f8f8f8",
                "pink-hover": "#efc4d2",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
