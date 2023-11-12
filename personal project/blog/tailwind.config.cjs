/** @type {import('tailwindcss').Config}*/
const config = {
	content: ['./src/**/*.{html,js,svelte,ts}'],

	theme: {
		extend: {}
	},

	plugins: [require('@tailwindcss/typography'), require('daisyui')],
	daisyui: {
		themes: [
			{
				mytheme: {
					primary: '#1abfac',

					secondary: '#d4b3f9',

					accent: '#f72aaf',

					neutral: '#32243d',

					'base-100': '#f1f6f9',

					info: '#3067df',

					success: '#115a49',

					warning: '#b37209',

					error: '#f35984'
				}
			}
		]
	}
};

module.exports = config;
