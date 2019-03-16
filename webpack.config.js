var webpack = require('webpack');
var path = require('path');
const glob = require('glob')
var ExtractTextPlugin = require("extract-text-webpack-plugin");
const PurgecssPlugin = require('purgecss-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');

const mode = 'development';

module.exports = {
    mode: mode,
    entry: {
        frontend: [
            __dirname + '/public/assets/development/js/frontend.js',
            __dirname + '/public/assets/development/css/frontend.scss',
        ],
        admin: [
            __dirname + '/public/assets/development/js/admin.js',
            __dirname + '/public/assets/development/css/admin.scss'
        ]
    },
    output: {
        filename: mode === 'production' ? '[name].min.js' : '[name].[chunkhash].js',
        path: path.resolve(__dirname, './public/assets/production')
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    use: [
                        'css-loader',
                        'sass-loader'
                    ],
                    fallback: 'style-loader'
                })
            },
            {
                test: /\.(jpg|png|gif)$/,
                use: [
                    {
                        // loader: 'file-loader',
                        // options: {
                        //     name: '[name].[ext]'
                        // }
                        loader: mode === 'production' ? 'url-loader' : 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            //limit: 8192
                        }
                    },
                    {
                        loader: 'image-webpack-loader',
                    }
                ]
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: 'babel-loader'
            }
        ]
    },

    plugins: [
        new ExtractTextPlugin(mode === 'production' ? '[name].min.css' : '[name].[chunkhash].css'),

        new webpack.LoaderOptionsPlugin({
            minimize: mode === 'production' ? true : false
        }),

        new PurgecssPlugin({
            paths: glob.sync('./App/Views/**/*.blade.php'),
        }),

        new CleanWebpackPlugin({
            root: __dirname,
            verbose: true,
            dry: false,
            cleanStaleWebpackAssets: true
        }),
        
        function () {
            this.plugin('done', stats => {
                require('fs').writeFileSync(
                    path.join(__dirname, 'public/assets/manifest.json'),
                    JSON.stringify(stats.toJson().assetsByChunkName)
                );
            })
        }
    ]
};