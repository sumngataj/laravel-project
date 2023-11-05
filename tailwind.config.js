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
                "blue-green": "#088F8F",
                "gold-highlight": "#875E2C",
                "pale-black": "#201c1c",
                "gray-border": "#a8a8a8",
                "gray-active": "#e9e9e9",
            },
        },
        backgroundSize: {
            auto: "auto",
            cover: "cover",
            contain: "contain",
            "50%": "50%",
            "40%": "40%",
            "30%": "30%",
            16: "4rem",
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
