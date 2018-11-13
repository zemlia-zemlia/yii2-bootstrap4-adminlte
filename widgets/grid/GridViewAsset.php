<?php
/**
 * @copyright Copyright (c) 2015 arunsahlam
 * @license https://github.com/arunsahlam/yii2-bootstrap4-adminlte/blob/master/LICENSE
 * @link https://github.com/arunsahlam
 */

namespace arunsahlam\bs4adminlte\widgets\grid;

class GridViewAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/datatables/media/css';
    public $css = [
        'dataTables.bootstrap.css',
    ];
    public $js = [];
    public $depends = [
        'arunsahlam\bs4adminlte\assets\Asset',
    ];
}
