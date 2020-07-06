<?php

namespace Core\Assets;

use Core\BaseObject;
/**
 * AssetBundle
 */
class AssetBundle extends BaseObject 
{
    /**
     * @var array
     */
    public $js = [];
    /**
     * @var array
     */
    public $css = [];
    /**
     * @param View $view
     */
    public static function register($view) 
    {
        $view->registerAssetBundle(get_called_class());
    }
}