<?php


namespace softcommerce\knob;


use yii\web\AssetBundle;

class KnobIconAsset extends AssetBundle
{
    public $sourcePath = '@vendor/softcommerce/yii2-knob/assets';
    public $js = ['js/jquery.knob.icon.min.js'];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
} 