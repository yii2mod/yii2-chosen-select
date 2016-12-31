<?php

namespace yii2mod\chosen;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Chosen Select Widget based on Chosen jQuery plugin {@link http://harvesthq.github.io/chosen)
 * @package yii2mod\chosen
 *
 * @author Igor Chepurnoy
 */
class ChosenSelect extends InputWidget
{
    /**
     * @var array the HTML attributes for the input tag. In default it contains ['data-placeholder' => 'Please select...', 'multiple' => false]
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * @var array select items
     */
    public $items = [];

    /**
     * @var array Plugin options. In default it contains ['width' => '100%']
     */
    public $pluginOptions = [];

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after the object is initialized with the
     * given configuration.
     */
    public function init()
    {
        parent::init();

        if(empty($this->options['data-placeholder'])) {
            $this->options['data-placeholder'] = 'Please select...';
        }
        if(empty($this->options['multiple'])) {
            $this->options['multiple'] = false;
        }
        if(empty($this->pluginOptions['width'])) {
            $this->pluginOptions['width'] = '100%';
        }
    }

    /**
     * Render chosen select
     * @return string|void
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
        $js = '$("#' . $this->getInputId() . '").chosen(' . $this->getPluginOptions() . ');';
        $view->registerJs($js, $view::POS_END);
    }

    /**
     * Return plugin options in json format
     * @return string
     */
    public function getPluginOptions()
    {
        return Json::encode($this->pluginOptions);
    }
    
    /**
     * Return input id
     */
    public function getInputId()
    {
        return $this->options['id'];
    }
}
