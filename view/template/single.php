<?php

use Core\Framework;
use Core\UrlManager\Url;

$this->title = 'template : '.$dataTemplate->title;
$this->params['breadcrumb'][] = ['label' => 'Home', 'url' => ['home/index']];
$this->params['breadcrumb'][] = ['label' => 'Template', 'url' => ['template/index']];
$this->params['breadcrumb'][] = $dataTemplate->title;
?>
<section class="section">
    <div class="container">
        <div class="section-title">
            <h4><?= $dataTemplate->title; ?></h4>
            <h3><?= $dataTemplate->category_id; ?></h3>
            <hr>
        </div>
        <div class="section-body">
            <p><?= $dataTemplate->content; ?></p>
            <img src="<?= Framework::getAlias('@web/assets/img/templates/'.$dataTemplate->img) ?>" alt="">
        </div>
    </div>
</section>