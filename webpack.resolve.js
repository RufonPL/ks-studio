const path = require('path');
module.exports = {
    extensions: [".js"],
    modules: [
        'node_modules',
        path.join(__dirname, 'resources/assets/sass'),
        path.join(__dirname, 'resources/assets/js'),
        path.join(__dirname, 'resources/assets/img'),
    ]
};
