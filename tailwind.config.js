import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                mono: {
                  blanco: '#F5EFFF',
                  negro: '#060809',
                },
                bg: {
                  empty: '#1F1D2B',
                },
                semaforo: {
                  verde: '#1BCC75',
                  amarillo: '#FFA823',
                  rojo: '#FF3131',
                },
                secundary: {
                  DEFAULT: '#1A2130',
                  light: '#A5B8D4',
                },
                machine: {
                  primary: '#56Ab98',
                  secundary: '#87CBB9',
                },
                guru: {
                  primary: '#C58940',
                  secundary: '#E4CDA4',
                },
                shopper: {
                  primary: '#3D4AEE',
                  secundary: '#87A2FF',
                },
                essentials: {
                  primary: '#FF3131',
                  secundary: '#FF9D9D',
                },
                smart: {
                  primary: '#9A48D5',
                  secundary: '#DBBCF6',
                },
              },
        },
    },
    plugins: [],
};
