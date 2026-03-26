/** @type {import('tailwindcss').Config} */
export default {
    content: ['./**/*.php', './assets/js/**/*.js'],
    theme: {
        extend: {},
    },
    plugins: [require('daisyui')],
    daisyui: {
        themes: ['light', 'dark'],
    },
};
