import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*hello.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                twinkle: {
                  '0%, 100%': { opacity: 0.3 },
                  '50%': { opacity: 1 },
                },
              },
              backgroundImage: {
                'space-gradient': 'radial-gradient(circle, #1a1a2e, #16213e, #0f3460, #000000)',
              },
        },
    },
    plugins: [],
};


