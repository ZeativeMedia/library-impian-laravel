/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                custom: "#3B82F6",
                primary: "#3B82F6",
            },
        },
    },
    plugins: [require("daisyui")],
};
