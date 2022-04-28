const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/profile.blade.php",
    ],

    variants: {
        textDecoration: [
            "responsive",
            "hover",
            "focus",
            "active",
            "group-hover",
        ],
    },

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                blue: "#93c5fd",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
