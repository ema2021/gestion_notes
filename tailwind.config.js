module.exports = {
	content: ["*.html", "./html/*.html", "*.php"],
	theme: {
		extend: {
			colors: {
				brand: "#0353A4",
			},
		},
	},
	plugins: [
		require("@tailwindcss/typography"),
		require("@tailwindcss/forms"),
		require("@tailwindcss/line-clamp"),
		require("@tailwindcss/aspect-ratio"),
	],
};
