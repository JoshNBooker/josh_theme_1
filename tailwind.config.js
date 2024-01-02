/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./*.php'],
	theme: {
		extend: {
			spacing: {
				'8xl': '96rem',
				'9xl': '128rem',
			},
			borderRadius: {
				'4xl': '2rem',
			},
			colors: {
				blue: '#a2e8e1',
				red: '#ed4b32',
				darkOrange: '#ed561a',
				orange: '#f5b47f',
				pink: '#f09292',
				purple: '#ae6eb5',
				coral: '#fa5f5f',
				black: '#101211',
				lavender: '#6052f2',
			},
			fontFamily: {
				sans: ['Graphik', 'sans-serif'],
				serif: ['Merriweather', 'serif'],
			},
			dropShadow: {
				'3xl': '0 35px 35px rgba(0, 0, 0, 0.75)',
				'4xl': [
					'0 35px 35px rgba(0, 0, 0, 0.25)',
					'0 45px 65px rgba(0, 0, 0, 0.15)',
				],
			},
			keyframes: {
				lift: {
					'0%, 100%': { transform: 'translateY(0)' },
					'50%': { transform: 'translateY(-10px)' },
				},
			},
			animation: {
				lift: 'lift 1s ease-in-out infinite',
			},
		},
	},
	plugins: [],
};
