module.exports = {
  plugins: [
    require('postcss-import'),
    require('postcss-cssnext')({
      features: {
        rem: false
      }
    }),
    require('cssnano')({
      autoprefixer: false
    }),
  ]
}