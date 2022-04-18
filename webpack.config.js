const path = require("path");
const webpack = require("webpack");
const {VueLoaderPlugin} = require("vue-loader");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");
const RemovePlugin = require("remove-files-webpack-plugin");

module.exports = {
  mode: "development",
  entry: {
    "admin/assets/js": "./admin/assets/vue/mcq-system-admin.js",
    "public/assets/js": "./public/assets/vue/mcq-system-public.js",
    admin: "./admin/assets/scss/mcq-system-admin.scss",
    "public": "./public/assets/scss/mcq-system-public.scss",
  },
  resolve: {
    alias: {
      // vue$: "vue/dist/vue.esm.js", // Use the full build
      'Vue': 'vue/dist/vue.esm-bundler.js'
    },
  },
  output: {
    filename: "[name]/mcq-system.build.js",
    path: path.resolve(__dirname),
  },
  plugins: [
      new webpack.DefinePlugin({
        'process.env': {}
      }),
    new FixStyleOnlyEntriesPlugin(),
    new MiniCssExtractPlugin({
      filename: "[name]/assets/css/mcq-system.build.css",
    }),
    new VueLoaderPlugin(),
    new RemovePlugin({
      after: {
        include: ['./admin/assets/js/assets']
      }
    }),
  ],
  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: "vue-loader",
      },

      {
        test: /\.js$/,
        use: "babel-loader",
        exclude: /node_modules/,
      },
      {
        test: /.(sc|c)ss$/,
        use: [
          "vue-style-loader",
          "style-loader",
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              esModule: false,
            }
          },
          "css-loader",
          "sass-loader",
          {
            loader: "postcss-loader",
            options: {
              sourceMap: true,
              postcssOptions: {
                config:  "postcss.config.js",
              },
            },
          },
        ],
      },
      {
        test: /\.sass$/,
        use: [
          "vue-style-loader",
          "style-loader",
          "css-loader",
          {
            loader: "sass-loader",
            // Requires sass-loader@^7.0.0
            options: {
              implementation: require("sass"),
              fiber: require("fibers"),
              indentedSyntax: true, // optional
            },
            // Requires sass-loader@^8.0.0
            options: {
              implementation: require("sass"),
              sassOptions: {
                // fiber: require("fibers"),
                indentedSyntax: true, // optional
              },
            },
          },
        ],
      },
      {
        test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
        use: [
          {
            loader: "file-loader",
            options: {
              name: "[name].[ext]",
              outputPath: "admin/assets/fonts/",
            },
          },
        ],
      },
    ],
  },
};
