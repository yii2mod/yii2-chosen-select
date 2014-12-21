Chosen Select Widget for Yii 2
=========
- Chosen Select Widget based on Chosen jQuery plugin [chosen](http://harvesthq.github.io/chosen)


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
```php
// Render form select:
   echo $form->field($model, 'subject')->widget(\yii2mod\chosen\ChosenSelect::className(),[
                    'items' => [
                        'first' => 'First',
                        'second' => 'Second'
                    ],
                ]); 

                
// Render default select
   echo \yii2mod\chosen\ChosenSelect::widget([
        'items' => BooleanEnum::listData(),
        'options' => [
            'width' => '95%'
        ]
    ]);

```

Select Options 
----------------
You can find them on the [options page](http://harvesthq.github.io/chosen/options.html)
