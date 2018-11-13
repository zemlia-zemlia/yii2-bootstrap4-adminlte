<?php
/**
 * @copyright Copyright (c) 2015 arunsahlam
 * @license https://github.com/arunsahlam/yii2-bootstrap4-adminlte/blob/master/LICENSE
 * @link https://github.com/arunsahlam
 */

namespace arunsahlam\bs4adminlte\assets;

class Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
    ];
    public $js = [
        'js/adminlte.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}