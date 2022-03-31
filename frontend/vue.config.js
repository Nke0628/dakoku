module.exports = {

    /*
    webpackはデフォルトで以下ファイルをエントリーポイントとしている。
    entry: {
      app: [
        './src/main.js'
      ]
    }
     */

    /*
    サーバを起動した時のルートパス
    webpackの output.publicPath と同等
    サブパスにデプロイしたい場合は指定する必要がある 例)/my-app/
     */
    publicPath: '/',

    /*
    本番ビルドファイルが生成されるディレクトリ
    ターゲットディレクトリはビルド前に削除される
     */
    outputDir: '../public',

    /*
    npm run buildした際にソースのindexファイルが生成される場所
    outputDirからのパスを記載する。
    指定しなければindex.htmlがoutputDirに生成される
     */
    indexPath: process.env.NODE_ENV === 'production'
        ? '../resources/views/index.blade.php'
        : 'index.html',

    devServer: {
        host: '0.0.0.0',
        useLocalIp: true,
        proxy: {
            '/api': {
                target: 'http://192.168.33.10:8000'
            }
        }
    }
}
