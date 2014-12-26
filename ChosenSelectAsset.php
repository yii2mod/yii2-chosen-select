<?php

namespace yii2mod\chosen;

use yii\web\AssetBundle;

/**
 * Class ChosenSelectAsset
 * @package yii2mod\chosen
 */
class ChosenSelectAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/yii2mod/yii2-chosen-select/assets';

    /**
     * @var array
     */
    public $js = [
        'chosen.jquery.js',
        'chosen.proto.js',
    ];

    /**
     * @var array
     */
    public $css = [
        'chosen.css',
    ];

    /**
     * Depends
     * @var array
     */
    public $depends = [
        'app\assets\AppAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
