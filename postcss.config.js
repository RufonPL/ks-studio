const autoprefixer = require('autoprefixer');
const path = require('path');
function _path(p) {
    return path.join(__dirname, p);
}
module.exports = {
    parser: 'postcss-scss',
    plugins: [
        require('postcss-sassy-import')({
            debug: true,
            prefix: '_',
            extensions: ['.scss', '.css', ''],
            //
            // loadPaths: [
            //     (origin) => path.dirname(origin),
            //     (origin) => _path('resources/assets')
            // ]
        }),
        // autoprefixer({browsers: ['last 4 versions', 'ie >= 9']}),
    ]
};