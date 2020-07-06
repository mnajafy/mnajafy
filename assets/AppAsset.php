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
        'libs/fontawesome/fontawesome.min.css',
    ];

    public $js  = [
        'libs/jquery/jquery.js',
        'js/main.js',
    ];
}