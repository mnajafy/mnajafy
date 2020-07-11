<?php
/* @var $this \Core\View */
/* @var $title string */
/* @var $message string */
$this->title = $title;
$this->params['breadcrumb'][] = ['label' => 'Home', 'url' => ['home/index']];
$this->params['breadcrumb'][] = $title;
?>
<section class="section">
    <div class="container">
        <div class="section-title">
            <h4><?= $title ?></h4>
            <hr>
        </div>
        <div><?= $message ?></div>
    </div>
</section>