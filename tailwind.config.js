/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.php"
  ],
  theme: {
    extend: {
    colors: {
      'base': '#111111',
      'base-color': '#111111',
      'base-cont': '#ffffff',
      'main': '#adff2f',
      'main-cont': '#111111',
      'accent': '#D1432A',
      'accent-cont': '#ffffff',
    },
    },
  },
  plugins: [],
}
