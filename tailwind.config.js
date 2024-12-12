/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './application/views/**/*.php',
    './application/views/**/*.html',
  ],
  theme: {
    extend: {
      fontFamily: {
        body: ['Poppins', 'sans-serif'],
        sans: ['Poppins', 'sans-serif'],
    }
    },
  },
  plugins: [],
}

