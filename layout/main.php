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
    <link rel="shortcut icon" type="image/png" href="assets/img/logo.png">
    <title><?= $this->title ?></title>
    <?= $this->css() ?>
</head>
<body>
    <header>
        <nav class="navbar">
            <a class="navbar-brand" href="<?= Url::to(['home/index']); ?>">mnajafy</a>
            <button class="navbar-toggler">
                Menu<span></span>
            </button>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to(['template/new']); ?>">new</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to(['template/index']); ?>">web themes & templates</a>
                    </li>
                    <li class="nav-item hover-n">
                        <a href="tel:0667527248" class="btn btn btn-outline-warning">Tel : 06.67.52.72.48</a>
                    </li>
                </ul> <!-- end navbar-nav -->
            </div> <!-- end navbar-collapse -->
        </nav> <!-- end nav -->
    </header> <!-- end header -->
    
    <div class="banner-main">
        <div class="card">
            <div class="card-body">
                <h1>Créer votre site internet<hr></h1>
                <p>Créez un site web à votre image, que vous soyez débutant ou un professionnel aguerri.</p>
                <a class="btn btn-primary" href="#">C'est parti !</a>
            </div>
            <div class="card-footer">
                <a href="#"><span class="badge badge-f">facebook</span></a>
                <a href="#"><span class="badge badge-f">instagram</span></a>
                <a href="#"><span class="badge badge-f">likdin</span></a>
                <a href="#"><span class="badge badge-f">github</span></a>
            </div>
        </div>
    </div> <!-- end banner-main -->

    <main>
        <?= $content ?>
    </main>

    <footer>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
            &copy; 2020
            </li>
            <li class="breadcrumb-item">
                <a href="#">m.najafy@hotmail.com</a>
            </li>
        </ol>
    </footer> <!-- end footer -->
    <?= $this->js() ?>
</body>
</html>