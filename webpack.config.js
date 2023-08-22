const OptimizeCssAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const TerserPlugin = require("terser-webpack-plugin");
const path = require("path");

module.exports = {
    mode: "production",
    entry: {
        global: path.resolve(
            __dirname,
            "wp-content",
            "themes",
            "planty",
            "assets",
            "scss",
            "global.scss"
        ),
    },
    output: {
        path: path.resolve(
            __dirname,
            "wp-content",
            "themes",
            "planty",
            "assets",
            "build"
        ),
    },
    module: {
        rules: [
            {
                test: /\.s(a|c)ss$/,
                use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
            },
            {
                test: /\.(png|svg|jpg|gif|ttf|eot|woff|woff2|mov|mp4)$/,
                use: [
                    {
                        loader: "file-loader?name=[name].[ext]",
                    },
                ],
            },
        ],
    },
    plugins: [
        new OptimizeCssAssetsPlugin(),
        new MiniCssExtractPlugin({ filename: "[name].min.css" }),
    ],
    optimization: {
        minimize: true,
        minimizer: [
            new TerserPlugin({
                terserOptions: {
                    ecma: 6,
                    compress: true,
                    output: {
                        comments: false,
                        beautify: false,
                    },
                },
            }),
        ],
    },
};
