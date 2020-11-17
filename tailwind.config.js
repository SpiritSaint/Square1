const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: defaultTheme.colors.black,
                white: defaultTheme.colors.white,
                gray: defaultTheme.colors.gray,
                red: defaultTheme.colors.red,
                yellow: defaultTheme.colors.yellow,
                green: defaultTheme.colors.green,
                blue: defaultTheme.colors.blue,
                indigo: defaultTheme.colors.indigo,
                purple: defaultTheme.colors.purple,
            }
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
