<?php

namespace yii2mod\chosen;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Yii2 wrapper for Chosen plugin {@link http://harvesthq.github.io/chosen)
 *
 * @author Igor Chepurnoy <chepurnoi.igor@gmail.com>
 *
 * @since 1.0
 */
class ChosenSelect extends InputWidget
{
    /**
     * @var array select items
     */
    public $items = [];

    /**
     * @var array plugin options. By default it contains ['width' => '100%']
     */
    public $pluginOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (empty($this->options['data-placeholder'])) {
            $this->options['data-placeholder'] = 'Please select...';
        }

        if (empty($this->options['multiple'])) {
            $this->options['multiple'] = false;
        }

        if (empty($this->pluginOptions['width'])) {
            $this->pluginOptions['width'] = '100%';
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);
        } else {
            echo Html::dropDownList($this->name, $this->value, $this->items, $this->options);
        }
        $this->registerAssets();
    }

    /**
     * Register client assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        ChosenSelectAsset::register($view);
        $js = '$("#' . $this->options['id'] . '").chosen(' . $this->getPluginOptions() . ');';
        $view->registerJs($js, $view::POS_END);
    }

    /**
     * Return plugin options in json format
     *
     * @return string
     */
    public function getPluginOptions()
    {
        return Json::encode($this->pluginOptions);
    }
}
