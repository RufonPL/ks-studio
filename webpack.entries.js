const path = require('path');
const webpack = require('webpack');
function _path(p) {
    return path.join(__dirname, p);
}
let base = {};
const backend = [
];
if (process.env.SCRIPT === "backend") {
    base = {
        backend
    };
} else {
    base = {
        app: _path('dev/js/entry-app.js'),
        home: _path('dev/js/entry-home.js')
    };
    // if (process.env.SCRIPT === 'frontend_backend') {
    //     base['backend'] = backend;
    // }
}

function insert(base, ...items) {
    return Object.keys(base).reduce(function (previous, current) {
        if (!base[current].splice) {
            base[current] = [base[current]];
        }
        previous[current] = Object.assign([], base[current]);
        previous[current].splice(0, 0, ...items);
        // console.log(previous[current]);
        return previous;
    }, {});
}
module.exports = {
    base,
    local: insert(base, "babel-polyfill", "webpack-dev-server/client"),
    production: insert(base, "babel-polyfill")
};
