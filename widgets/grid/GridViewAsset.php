<?php


namespace zemlia\bs4adminlte\widgets\grid;

class GridViewAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/datatables/media/css';
    public $css = [
        'dataTables.bootstrap.css',
    ];
    public $js = [];
    public $depends = [
        'zemlia\bs4adminlte\assets\Asset',
    ];
}
