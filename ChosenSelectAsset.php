<?php

namespace yii2mod\chosen;

use yii\web\AssetBundle;

/**
 * ChosenSelectAsset bundle
 *
 * @author Igor Chepurnoy <chepurnoi.igor@gmail.com>
 *
 * @since 1.0
 */
class ChosenSelectAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle
     */
    public $sourcePath = '@bower/drmonty-chosen';

    /**
     * @var array list of JavaScript files that this bundle contains
     */
    public $js = [
        'js/chosen.jquery.js',
        'js/chosen.proto.js',
    ];

    /**
     * @var array list of CSS files that this bundle contains
     */
    public $css = [
        'css/chosen.css',
    ];

    /**
     * @var array list of JavaScript files that this bundle contains
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
