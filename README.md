Chosen Select Widget for Yii 2
=========
Chosen Select Widget based on Chosen jQuery plugin [chosen](http://harvesthq.github.io/chosen)

[![Latest Stable Version](https://poser.pugx.org/yii2mod/yii2-chosen-select/v/stable)](https://packagist.org/packages/yii2mod/yii2-chosen-select) [![Total Downloads](https://poser.pugx.org/yii2mod/yii2-chosen-select/downloads)](https://packagist.org/packages/yii2mod/yii2-chosen-select) [![License](https://poser.pugx.org/yii2mod/yii2-chosen-select/license)](https://packagist.org/packages/yii2mod/yii2-chosen-select)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). 

Either run

```
php composer.phar require --prefer-dist yii2mod/yii2-chosen-select "*"
```

or add

```json
"yii2mod/yii2-chosen-select": "*"
```

to the require section of your composer.json.

Usage
------------
1) Usage with ActiveForm and model
```php
   echo $form->field($model, 'subject')->widget(\yii2mod\chosen\ChosenSelect::className(),[
                    'items' => [
                        'first' => 'First',
                        'second' => 'Second'
                    ],
                ]); 

  ```
  
2) Usage without a model
```php
   echo \yii2mod\chosen\ChosenSelect::widget([
        'name'  => 'select',
        'items' => BooleanEnum::listData(),
        'options' => [
            'width' => '95%'
        ]
    ]);
```

Select Options 
----------------
You can find them on the [options page](http://harvesthq.github.io/chosen/options.html)
