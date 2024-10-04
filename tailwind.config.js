/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: {
    content: ['./src/**/*.{html,php,js}', './public/**/*.{html,php,js}'],
    options: {
      safelist: [],
    },
  },
  theme: {
    extend: {},
  },
  plugins: [],
}

