var path = require('path');
var webpack = require('webpack');
var postcss = require('postcss');
var ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
  entry: {
    bundle: './app.js',
  },
  output: {
    path: __dirname + '/dist',
    publicPath: '/',
    filename: '[name].js'
  },
  plugins: [
    new ExtractTextPlugin('bundle.css'),
  ],
  module: {
    loaders: [
      {
        test: /\.css$/,
        loader: ExtractTextPlugin.extract('style-loader', 'css-loader!postcss-loader'),
        include: path.join(__dirname, 'turret')
      }
    ],
  },
  postcss: function (webpack) {
    return [
      require("postcss-import")(),
      require("postcss-cssnext")(),
    ]
  }
};