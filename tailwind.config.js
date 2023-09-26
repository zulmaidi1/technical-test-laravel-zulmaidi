/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.ts",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend:
    {
      colors: {
        primary: '#CA171E',
        black: '#101010'
      },
      fontFamily: {
        'hanken-grotesk': ['Hanken Grotesk', 'sans-serif']
      },
      fontSize: {
        sm: '14px',
        base: '16px',
        xl: '24px',
        '2xl': '40px',
        '3xl': '64px',
        '4xl': '104px'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

