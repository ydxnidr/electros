/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./application/controller/**/**/*.php',
		'./application/views/**/**/*.php',
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

