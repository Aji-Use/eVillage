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
                sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto', 'sans-serif'],
                poppins: ['poppins', 'lora']
            },
            boxShadow: {
                'custom': '2px 2px 8px rgba(0, 0, 0, 0.2)',
            },
            gradient: {
                'custom-gradient': 'linear-gradient(to top, #1F4529, #1F4529, )'
            } 
        },
    },
    plugins: [],
};
