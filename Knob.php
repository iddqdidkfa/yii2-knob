<?php


namespace softcommerce\knob;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

class Knob extends Widget
{
    public $options = [];
    public $knobOptions = [];
    public $name = '';
    public $min = 0;
    public $max = 100;
    public $value = 0;
    public $icon = null;

    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, 'jqKnob');
    }

    public function run()
    {
        if (!array_key_exists('id', $this->options)) {
            $this->options['id'] = $this->getId();
        }
        echo Html::textInput($this->name, $this->value, $this->options);
        $view = $this->getView();
        KnobAsset::register($view);
        $pluginsJs = "";
        if (!is_null($this->icon)) {
            KnobIconAsset::register($view);
            $pluginsJs .= "addKnobIcon('#{$this->options['id']}', '".addslashes($this->icon)."');\n";
        }
        if( $this->knobOptions['format'] )
        {
            $format = $this->knobOptions['format'];
            unset( $this->knobOptions['format'] );
        } else {
            $format = false;
        }
        $knobOptions = empty($this->knobOptions) ? '' : Json::encode($this->knobOptions);
        $js = !$format ? "jQuery('#{$this->options['id']}').knob({$knobOptions});\n" : "jQuery('#{$this->options['id']}').knob( jQuery.extend({$knobOptions},{format: {$format}}));\n";
        $js .= $pluginsJs;
        $view->registerJs($js);
    }
} 