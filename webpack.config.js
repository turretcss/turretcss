var path = require('path');
var webpack = require('webpack');
var postcss = require('postcss');
var ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
  entry: {
    turret: __dirname + '/turret.js',
    docs: __dirname + '/docs/assets/docs.js',
  },
  output: {
    path: __dirname + '/docs/dist',
    publicPath: '/',
    filename: '[name].js'
  },
  plugins: [
    new ExtractTextPlugin('[name].css'),
  ],
  module: {
    loaders: [
      {
        test: /\.css$/,
        loader: ExtractTextPlugin.extract('style-loader', 'css-loader!postcss-loader'),
        includes: [
          path.join(__dirname, 'turret'),
          path.join(__dirname, 'docs/src')
        ]
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