const path = require('path');

module.exports = {
	mode: 'production',
	entry: './js/main.js',
	output: {
		filename: 'scripts.js',
		path: path.resolve(__dirname, ''),
	},

};