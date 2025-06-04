const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/')
    .setPublicPath('/bundles/contaotobiilightbox')
    .setManifestKeyPrefix('')
    .cleanupOutputBeforeBuild()
    .disableSingleRuntimeChunk()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .addEntry('tobii', './assets/js/tobii.js')
	.enableSassLoader()
;

const config = Encore.getWebpackConfig();
config.watchOptions = {
	poll: 150
};

module.exports = [config];