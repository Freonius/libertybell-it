const path = require("path");
const {CleanWebpackPlugin} = require("clean-webpack-plugin");

module.exports = {
    mode: "production",
    entry: "./src/index.js",
    output: {
        filename: "bundle.[contentHash].js",
        path: path.resolve(__dirname, "dist/js")
    },
    module: {
        rules: [
          {
            test: /\.css$/,
            loader: "style-loader!css-loader"
          },
          {
            test: /\.less$/,
            loader: "style-loader!css-loader!less-loader"
          },
          {
            test: /\.scss$/,
            loader: "style-loader!css-loader!sass-loader"
          }
        ]
    },
    plugins: [
      new CleanWebpackPlugin()
    ]
};