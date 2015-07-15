<?php

/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 15.07.15
 * Time: 4:20
 */
namespace p0larbeer\paper\elements;


use yii\helpers\Html;

class Button extends Widget
{
    /**
     * @var string the tag to use to render the button
     */
    public $tagName = 'paper-button';
    /**
     * @var string the button label
     */
    public $label = 'Button';
    /**
     * @var boolean whether the label should be HTML-encoded.
     */
    public $encodeLabel = true;

    public function init()
    {
        $view = $this->getView();
        ButtonAsset::register($view);
    }

    public function run()
    {
        return Html::tag($this->tagName, $this->encodeLabel ? Html::encode($this->label) : $this->label, $this->options);
    }
}