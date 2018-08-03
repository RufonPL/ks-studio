module.exports = {
    js: {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
        query: {"presets": ["es2015", "stage-0"]}
    },
    handlebars: {test: /\.(hbs|handlebars)$/, loader: "handlebars-loader"},
    fonts: {test: /\.(woff|woff2|eot|ttf|svg)$/, use: [{loader: 'url-loader', options: {limit: 100000000000000}}]},
    images: {test: /\.(png|jpg|gif)$/, use: [{loader: 'url-loader'}]},
    html: {
        test: /\.(html)/,
        use: 'raw-loader'
    },
};