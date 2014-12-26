<?php

namespace yii2mod\chosen;

use yii\base\InvalidConfigException;
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
     * @var array the HTML attributes for the input tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = ['data-placeholder' => 'Please select...', 'multiple' => false];

    /**
     * @var array select items
     */
    public $items = [];

    /**
     * @var array Plugin options
     */
    public $pluginOptions = ['width' => '100%'];

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after the object is initialized with the
     * given configuration.
     */
    public function init()
    {
        parent::init();
    }

    /**
     * Render chosen select
     * @return string|void
     */
    public function run()
    {
        if ($this->hasModel()) {
            $this->renderFormSelect();
        } else {
            $this->renderBaseSelect();
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
        $js = '$("#' . $this->getSelectId() . '").chosen(' . $this->getPluginOptions() . ');';
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
     * Return select id
     * @return mixed
     * @throws InvalidConfigException
     */
    public function getSelectId()
    {
        return $this->options['id'];
    }

    /**
     * Render default select without form
     */
    public function renderBaseSelect()
    {
        echo Html::dropDownList($this->name, $this->value, $this->items, $this->options);
    }

    /**
     * Render form select
     */
    public function renderFormSelect()
    {
        echo Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);
    }
}
