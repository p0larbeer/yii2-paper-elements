<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 15.07.15
 * Time: 3:20
 */

namespace p0larbeer\paper\elements;

use yii\web\AssetBundle;

class PaperElementsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/p0larbeer/yii2-paper-elements/assets';
    public $href = [];
    public $options = [
        'except'=>[
            'demo',
            'test'
        ]
    ];
    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);
        $manager = $view->getAssetManager();
        foreach ($this->href  as $href) {
            $view->registerLinkTag(['rel'=>'import','href'=>$manager->getAssetUrl($this, $href)]);
        }

    }
}