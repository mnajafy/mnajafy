<?php

use Core\UrlManager\Url;

$this->title = 'Edit';
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
        <p><?= Url::to(['template/edit', '/' => 'hello', 'id' => 'world', 'value' => 'delta yopi', '#' => 'world']); ?></p>
    </div>
</section>