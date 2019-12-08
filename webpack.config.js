const path = require("path");
module.exports = {
    mode: "production",
    entry: "./src/index.js",
    output: {
        filename: "bundle.js",
        path: path.resolve(__dirname, "dist/js")
    },
    module: {
        rules: [
          {
            test: /\.less$/,
            loader: "style-loader!css-loader!less-loader"
          }
        ]
    }
};