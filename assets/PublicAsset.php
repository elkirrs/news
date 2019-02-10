<?php
/**
 * Created by PhpStorm.
 * User: elkirrs
 * Date: 10.02.2019
 * Time: 10:24
 */

namespace app\assets;


use yii\web\AssetBundle;

class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/bootstrap.css',
        'public/css/main.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}