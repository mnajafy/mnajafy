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
            <a class="navbar-brand" href="<?= Url::to(['home/index']) ?>">mnajafy</a>
            <button class="navbar-toggler">
                Menu<span></span>
            </button>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to(['about/index']) ?>">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to(['template/index']) ?>">web themes & templates</a>
                    </li>
                    <li class="nav-item hover-n">
                        <a href="<?= Url::to(['about/index', '#' => 'contact']) ?>" class="btn btn btn-outline-warning">contactez-nous !</a>
                    </li>
                </ul> <!-- end navbar-nav -->
            </div> <!-- end navbar-collapse -->
        </nav> <!-- end nav -->
    </header> <!-- end header -->
    
    <div class="banner-page">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ol class="breadcrumb">
                        <?php 
                        if (isset($this->params['breadcrumb']) && is_array($this->params['breadcrumb'])) 
                        {
                            foreach ($this->params['breadcrumb'] as $breadcrumb) 
                            {
                                if (is_array($breadcrumb)) 
                                {
                                    echo '<li class="breadcrumb-item"><a class="link-white" href="' . Url::to($breadcrumb['url']) . '">' . $breadcrumb['label'] . '</a></li>';
                                }
                                elseif (is_string($breadcrumb)) 
                                {
                                    echo '<li class="breadcrumb-item">' . $breadcrumb . '</li>';
                                }
                            }
                        } else { echo 'not fond'; }
                        ?>
                    </ol>
                </div> <!-- end col-6 -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end banner-page -->

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