<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace ayrozjlc\adminlte3\assets_extra;
use yii\web\AssetBundle;
/**
 * DataTables asset bundle.
 *
 * @author Jose Lopez Chavez <ayroz.jlc@gmail.com>
 * @since 2.0
 */
class DataTablesAsset extends AssetBundle
{
    public $sourcePath  = '@vendor/almasaeed2010/adminlte/plugins/datatables';

    public $js = [
        YII_ENV_DEV ? 'jquery.dataTables.js' : 'jquery.dataTables.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
