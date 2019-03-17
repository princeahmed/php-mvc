var webpack = require('webpack');
var path = require('path');
var glob = require('glob');
var ExtractTextPlugin = require("extract-text-webpack-plugin");
var PurgecssPlugin = require('purgecss-webpack-plugin');
var CleanWebpackPlugin = require('clean-webpack-plugin');

//project Mode Development|Production
var mode = 'development';

module.exports = {
    mode: mode,
    entry: {
        frontend: [
            __dirname + '/src/js/frontend.js',
            __dirname + '/src/css/frontend.scss'
        ],
        admin: [
            __dirname + '/src/js/admin.js',
            __dirname + '/src/css/admin.scss'
        ]
    },
    output: {
        filename: mode === 'production' ? '[name].min.js' : '[name].[chunkhash].js',
        path: path.resolve(__dirname, './public/assets')
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    use: [
                        'css-loader',
                        // Loader for webpack to process CSS with PostCSS
                        {
                            loader: 'postcss-loader',
                            options: {
                                plugins: function () {
                                    return [
                                        require('autoprefixer')
                                    ];
                                }
                            }
                        },
                        // Loads a SASS/SCSS file and compiles it to CSS
                        'sass-loader'
                    ],
                    fallback: 'style-loader'
                })
            },
            {
                test: /\.(jpg|png|gif)$/,
                use: [
                    {
                        loader: mode === 'production' ? 'url-loader' : 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            limit: mode === 'production' ? 8192 : false
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
            minimize: mode === 'production'
        }),

        new PurgecssPlugin({
            paths: glob.sync('./App/Views/**/*.blade.php'),
        }),

        new CleanWebpackPlugin({
            root: __dirname,
            verbose: true,
            dry: false,
            cleanStaleWebpackAssets: true,
            watch: false
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