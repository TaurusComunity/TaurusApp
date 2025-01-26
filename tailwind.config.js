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
          boxShadow: {
            'shadow-essentials': '0px 8px 28px rgba(255, 77, 109, 1)',
          },
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
                  default: '#1A2130',
                  light: '#A5B8D4',
                },
                machine: {
                  primary: '#57CC99',
                  secundary: '#C7F9CC',
                  complement: '#80ED99'
                },
                guru: {
                  primary: '#BB9457',
                  secundary: '#FFE6A7',
                  complement: '#99582A'
                },
                shopper: {
                  primary: '#3D4AEE',
                  secundary: '#87A2FF',
                  complement: '#8E9AAF'
                },
                essentials: {
                  primary: '#FF4D6D',
                  secundary: '#FFB3C1',
                  complement: '#FF758F'
                },
                smart: {
                  primary: '#DEE2FF',
                  secundary: '#FEEAFA',
                  complement: '#EFD3D7'
                },
              },
        },
    },
    plugins: [
    ],
};
