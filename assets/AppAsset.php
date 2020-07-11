<?php

namespace Assets;

use Core\Assets\AssetBundle;
/**
 * AppAsset
 */
class AppAsset extends AssetBundle 
{
    public $css = [
        'assets/libs/fontawesome/fontawesome.min.css',
        'assets/css/style.css',
    ];

    public $js  = [
        'assets/libs/jquery/jquery.js',
        'assets/js/function.js',
    ];
}