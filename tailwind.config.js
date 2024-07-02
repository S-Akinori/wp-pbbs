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
      'main': '#043491',
      'main-cont': '#FEFEFE',
      'main-sub': '#C5ECFF',
      'accent': '#f0ee70',
      'accent-cont': '#ffffff',
    },
    },
  },
  plugins: [],
}
