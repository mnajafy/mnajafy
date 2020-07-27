<?php

use Core\Framework;
use Core\UrlManager\Url;

$this->title = 'web themes & templates';
$this->params['breadcrumb'][] = ['label' => 'Home', 'url' => ['home/index']];
$this->params['breadcrumb'][] = $this->title;
?>
<section class="section">
    <div class="container">
        <div class="section-title">
            <h4>templates</h4>
            <h3>category</h3>
            <hr>
            <ul class="breadcrumb tem">
            <?php foreach ($dataCategory as $key): ?>
                <li>
                    <?php if ($key->id == $category): ?>
                    <a href="<?= Url::to(['template/index', 'category' => $key->id]) ?>" class="btn btn-outline-dark active"><?= $key->title; ?></a>
                    <?php else: ?>
                    <a href="<?= Url::to(['template/index', 'category' => $key->id]) ?>" class="btn btn-outline-dark"><?= $key->title; ?></a>
                    <?php endif ?>
                </li>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="row">
            <?php foreach ($dataTemplate as $key): ?>
            <div class="col-6">
                <div class="card">
                    <div style="height:300px; overflow: hidden;">
                        <img src="<?= Framework::getAlias('@web/assets/img/templates/'. $key->img) ?>" alt="">
                    </div>
                    <div class="card-body">
                        <h5><?= $key->title; ?><small> (<?= $key->created_at; ?>) </small></h5>
                        <a href="#"><?= $key->m2_title; ?></a>
                        <p><?= $key->content; ?></p>
                        <a href="<?= Url::to(['template/single', '/' => $key->id]) ?>" class="btn btn-primary">voir !</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <div class="section-footer text-center-m">
            <a class="btn btn-outline-primary" href="#">voir plus!</a>
        </div>
    </div>
</section>