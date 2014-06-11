yii2-knob
=========

Yii2 widget for jQuery Knob plugin (http://anthonyterrien.com/knob/)

Usage:
```php
echo softcommerce\knob\Knob::widget([
        'name' => 'animated_knob_with_icon',
        'value' => 62,
        'icon' => '<span class="glyphicon glyphicon-flash"></span>',
        'options' => [
            'data-min' => '0',
            'data-max' => '100',
            'data-width' => '100',
            'data-height' => '100',
        ],
        'knobOptions' => [
            'readOnly' => true,
            'thickness' => '.25',
            'dynamicDraw' => true,
            'fgColor' => '#9fc569',
        ],
    ]
);
```
