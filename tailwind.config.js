/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.php"
  ],
  theme: {
    extend: {
    colors: {
      'base': '#FEFEFE',
      'base-color': '#FEFEFE',
      'base-cont': '#222222',
      'main': '#003368',
      'main-cont': '#FEFEFE',
      'accent': '#D1432A',
      'accent-cont': '#ffffff',
    },
    },
  },
  plugins: [],
}
