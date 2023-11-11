/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens: {
        'h-800': { 'raw': '(min-height: 800px)' },
        'h-850': { 'raw': '(min-height: 850px)' },
        'h-900': { 'raw': '(min-height: 900px)' },
        'h-1050': { 'raw': '(min-height: 1050px)' },
        'h-1250': { 'raw': '(min-height: 1250px)' },

      }
    },
  },
  plugins: [],
}

