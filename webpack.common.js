const path = require('path');
const { ProvidePlugin } = require('webpack');

module.exports = {
	entry: './js/main.js',
	output: {
		filename: 'scripts.js',
		path: path.resolve(__dirname, ''),
	},
	externals: {
		jquery: 'jQuery'
	},
	plugins: [
		new ProvidePlugin({
			$: 'jquery',
		})
	]
};