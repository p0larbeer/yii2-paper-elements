<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 15.07.15
 * Time: 8:23
 */

namespace p0larbeer\paper\elements;

use yii\helpers\Html;

class PaperIconButton extends Widget
{
    /**
     * @var string the tag to use to render the paper-icon-button
     */
    public $tagName = 'paper-icon-button';
    /**
     * @var string Specifies the icon name or index in the set of icons available in the icon's icon set.
     * If the icon property is specified, the src property should not be.
     */
    public $icon = '';
    /**
     * @var string Specifies the icon name or index in the set of icons available in the icon's icon set.
     * If the icon property is specified, the src property should not be.
     */
    public $alt = '';
    /**
     * @var string The URL of an image for the icon.
     * If the src property is specified, the icon property should not be.
     */
    public $src = '';

    public function init()
    {
        $view = $this->getView();
        PaperIconButtonAsset::register($view);
    }
    public function run()
    {
        if($this->icon !== null){
            $this->options['icon'] = $this->icon;
        }
        if($this->src !== null){
            $this->options['src'] = $this->src;
        }
        if($this->alt !== null){
            $this->options['alt'] = $this->alt;
        }

        return Html::tag($this->tagName, null , $this->options);
    }
}