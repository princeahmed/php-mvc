module.exports = {
    mode: 'development',
    entry: __dirname + '/public/assets/development/js/frontend.js',
    output: {
        filename: 'frontend.min.js',
        path: __dirname + '/public/assets/production/js'
    },
    module: {
        rules: [
            {
                test: /\.(css|scss)$/,
                use: [
                    'style-loader',
                    'css-loader'
                ]
            },
            {
                test: /\.(jpeg|jpg|png|gif)$/,
                use: [
                    'file-loader'
                ]
            }
        ]
    }
}