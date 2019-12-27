module.exports = {
  entry: __dirname + '/src/js/index.js',
  output: {
    filename: 'minimal-react-plugin.js',
    path: __dirname + '/assets/js'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: 'babel-loader'
      }
    ]
  }
}
