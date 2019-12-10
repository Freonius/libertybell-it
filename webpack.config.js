const path = require("path");
const fs = require("fs");
const {CleanWebpackPlugin} = require("clean-webpack-plugin");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCssAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");
const ScriptExtHtmlWebpackPlugin = require("script-ext-html-webpack-plugin");

let minimizer = [];


const getAllPages = () => {
  let htmlPath = path.resolve(__dirname, "src/html");
  let files;
  try {
    files = fs.readdirSync(htmlPath);
  }
  catch (err) {
    console.log(err);
    return;
  }
  files.forEach((file) => {
    minimizer.push(
      new HtmlWebpackPlugin({
        filename: path.join("./", file),
        template: path.join("./src/html/", file),
        minify: {
          removeAttributeQuotes: true,
          collapseWhitespace: true,
          removeComments: true
        }
      })
    )
  });
};

getAllPages();
minimizer.push(new TerserPlugin());
minimizer.push(new OptimizeCssAssetsPlugin());
minimizer.push(new ScriptExtHtmlWebpackPlugin({
  defaultAttribute: "defer"
}));
minimizer.push(new MiniCssExtractPlugin({ filename: "./css/[name].[contentHash].css" }));

module.exports = {
    mode: "production",
    entry: {
      main: "./src/index.js"
    },
    output: {
        filename: "js/bundle.[contentHash].js",
        path: path.resolve(__dirname, "dist")
    },
    module: {
        rules: [
          {
            test: /\.css$/,
            loader: "style-loader!css-loader"
          },
          {
            test: /\.less$/,
            loader: [MiniCssExtractPlugin.loader, "css-loader", "less-loader"]
          },
          {
            test: /\.scss$/,
            loader: "style-loader!css-loader!sass-loader"
          },
          {
            test: /\.html$/,
            loader: "html-loader"
          }
        ]
    },
    optimization: {
      minimizer: minimizer
    },
    plugins: [
      new CleanWebpackPlugin()
    ]
};