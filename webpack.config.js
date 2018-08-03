'use strict';
const path = require('path');
const webpack = require('webpack');
const rules = require('./webpack.rules');
// const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
const webpackEnv = require('./.webpack.env');
let PORT = webpackEnv.port, HOST = webpackEnv.host, THEMENAME = webpackEnv.themeName;

function _path(p) {
    return path.join(__dirname, p);
}
let plugins = [
    // new BundleAnalyzerPlugin(),
    new webpack.optimize.CommonsChunkPlugin({name: "commons", minChunks: 2}),
    new webpack.LoaderOptionsPlugin({debug: true, options: {context: __dirname}}),
    new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery',
        Popper: ['popper.js', 'default']
    })
];
module.exports = {
    devtool: 'source-map',
    entry: require('./webpack.entries').local,
    output: {
        path: _path(`/public/wp-content/themes/${THEMENAME}/dist`),
        filename: '[name].js',
        publicPath: `http://${HOST}:${PORT}/`
    },
    plugins,
    module: {
        rules: [
            rules.js,
            rules.handlebars,
            rules.fonts,
            rules.images,
            rules.html,
            {
                test: /\.scss$/,
                use: [
                    {loader: 'style-loader'},
                    {loader: 'css-loader', options: {importLoaders: 4, minimize: false}},
                    {loader: 'sass-loader'},
                    {loader: 'postcss-loader', options: {parser: 'postcss-scss'}},
                ],
            },
            {
                test: /\.css$/,
                use: [
                    {loader: 'style-loader'},
                    {loader: 'css-loader', options: {minimize: false}},
                    {loader: 'sass-loader'},
                    {loader: 'postcss-loader'}
                ]
            }
        ]
    },
    resolve: require('./webpack.resolve'),
    externals: require('./webpack.externals'),
    devServer: {
        host: HOST, port: PORT,
        disableHostCheck: true,
        headers: {
            "Access-Control-Allow-Origin": "*",
            "Access-Control-Allow-Methods": "GET, POST, PUT, DELETE, PATCH, OPTIONS",
            "Access-Control-Allow-Headers": "X-Requested-With, content-type, Authorization"
        }
    },
};
