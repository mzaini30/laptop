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
					primary: '#009aae',

					secondary: '#007d00',

					accent: '#008eff',

					neutral: '#172522',

					'base-100': '#f6ffeb',

					info: '#00c2ff',

					success: '#00a671',

					warning: '#f28e00',

					error: '#ff6b91'
				}
			}
		]
	}
};

module.exports = config;
