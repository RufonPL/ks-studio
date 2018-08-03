'use strict';
const path = require('path');
const webpack = require('webpack');
const rules = require('./webpack.rules');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const ChunkManifestPlugin = require('chunk-manifest-webpack-plugin');
const WebpackMd5Hash = require('webpack-md5-hash');
const AssetsManifest = require('assets-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');

const webpackEnv = require('./.webpack.env');
let THEMENAME = webpackEnv.themeName;

function _path(p) {
    return path.join(__dirname, p);
}

const distPath = _path(`/public/wp-content/themes/${THEMENAME}/dist`);
const basicExtract = new ExtractTextPlugin("[name]-[contenthash].css");

function extract(loaders) {
    const fb = loaders.shift();
    return basicExtract.extract({fallback: fb, use: loaders});
}

let plugins = [
    new CleanWebpackPlugin([distPath]),
    basicExtract,
    new webpack.optimize.CommonsChunkPlugin({name: "commons", minChunks: 2}),
    new webpack.LoaderOptionsPlugin({debug: false, options: {context: __dirname}}),
    new webpack.HashedModuleIdsPlugin(),
    new webpack.optimize.UglifyJsPlugin({
        output: {
            comments: false
        },
        compress: {
            sequences: true,
            dead_code: true,
            conditionals: true,
            booleans: true,
            unused: true,
            if_return: true,
            join_vars: true,
            // drop_console: true
        },
        mangle: {
            except: ['$super', '$', 'exports', 'require']
        }
    }),
    new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery',
        Popper: ['popper.js', 'default']
    }),
    new WebpackMd5Hash(),
    new ChunkManifestPlugin({
        filename: "chunk-manifest.json",
        manifestVariable: "webpackManifest"
    }),
    new AssetsManifest({path: _path(`/public/wp-content/themes/${THEMENAME}/dist`)}),
];
module.exports = {
    devtool: 'source-map',
    entry: require('./webpack.entries').production,
    output: {
        path: distPath,
        filename: '[name]-[chunkhash].js',
        chunkFilename: '[name]-[chunkhash].js',
        publicPath: ``
    },
    plugins,
    module: {
        rules: [
            rules.js,
            rules.handlebars,
            rules.images,
            rules.fonts,
            rules.html,
            {
                test: /\.scss$/,
                use: extract([
                    {loader: 'style-loader'},
                    {
                        loader: 'css-loader',
                        options: {importLoaders: 5, minimize: true, discardComments: {removeAll: true}}
                    },
                    {loader: 'sass-loader'},
                    {loader: 'postcss-loader'},
                ]),
            },
            {
                test: /\.css$/,
                use: extract([
                    {loader: 'style-loader'},
                    {
                        loader: 'css-loader',
                        options: {minimize: true, importLoaders: 3, discardComments: {removeAll: true}}
                    },
                    {loader: 'sass-loader'},
                    {loader: 'postcss-loader'}
                ])
            }
        ]
    },
    resolve: require('./webpack.resolve'),
    externals: require('./webpack.externals'),
};
