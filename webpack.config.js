module.exports = {
  entry: __dirname + '/src/index.js',
  output: {
    filename: 'minimal-react-plugin.js',
    path: __dirname + '/assets/js'
  },
  module: {
    loaders: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader'
      }
    ]
  }
}
