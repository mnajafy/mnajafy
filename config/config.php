<?php
$db    = require 'db.php';
$rules = require 'rules.php';
return [
    'db'         => $db,
    'layout'     => 'page',
    'basePath'   => dirname(__DIR__),
    'viewPath'   => dirname(__DIR__) . '\view',
    'layoutPath' => dirname(__DIR__) . '\layout',
    'urlManager' => [
        'class' => '\Core\UrlManager\UrlManager',
        'rules' => $rules
    ],
];
