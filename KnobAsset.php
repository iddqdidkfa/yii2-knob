<?php


namespace softcommerce\knob;


use yii\web\AssetBundle;

class KnobAsset extends AssetBundle
{
    public $sourcePath = '@vendor/softcommerce/yii2-knob/assets';
    public $js = ['js/jquery.knob.min.js'];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
} 