<?php

namespace Assets;

use Core\Assets\AssetBundle;
/**
 * AppAsset
 */
class AppAsset extends AssetBundle 
{
    public $css = [
        'css/style.css',
        'libs/fontawesome/css/fontawesome-all.min.css',
    ];

    public $js  = [
        'js/jquery-3.5.1/jquery.js',
        'js/main.js',
    ];
}