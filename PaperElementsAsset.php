<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 15.07.15
 * Time: 3:20
 */

namespace p0larbeer\yii2\paper\elements;

use yii\web\AssetBundle;

class PaperElementsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/p0larbeer/yii2-paper-elements';
    public $options = [
        'except'=>[
            'demo',
            'test'
        ]
    ];
}