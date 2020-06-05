<?php
namespace seisvalt\web;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/fontawesome';
    public $css = [
        'css/all.min.css',
    ];
    public $publishOptions = [
        'only' => [
            'webfonts/*',
            'css/*',
        ]
    ];
}
