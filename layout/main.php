<?php
use Assets\AppAsset;
use Core\UrlManager\Url;
/* @var $this \Core\View */
/* @var $content string */

AppAsset::register($this);
?>
<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?= $this->title ?></title>
        <?= $this->css() ?>
    </head>
    <body>
        <header>
        
        </header>
        
        <main>
            <?= $content ?>
        </main>
        <footer>
        
        </footer> <!-- end footer -->
        <?= $this->js() ?>
    </body>
</html>