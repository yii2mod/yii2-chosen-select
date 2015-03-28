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
    public $sourcePath = '@bower/drmonty-chosen';

    /**
     * @var array
     */
    public $js = [
        'js/chosen.jquery.js',
        'js/chosen.proto.js',
    ];

    /**
     * @var array
     */
    public $css = [
        'css/chosen.css',
    ];

    /**
     * Depends
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
