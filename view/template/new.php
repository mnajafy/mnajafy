<?php

use Core\UrlManager\Url;

$this->title = 'New';
$this->params['breadcrumb'][] = ['label' => 'Home', 'url' => ['home/index']];
$this->params['breadcrumb'][] = ['label' => 'Template', 'url' => ['template/index']];
$this->params['breadcrumb'][] = $this->title;
?>
<section class="section">
    <div class="container">
        <div class="section-title">
            <h4><?= $this->title ?></h4>
            <hr>
        </div>
        <form method="POST">
            <div class="row">
                <div class="col-6">
                    <?= $form->title ?>
                    <?= $form->content ?>
                </div>
                <div class="col-6">

                </div>
            </div>
        </form>
    </div>
</section>