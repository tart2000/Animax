<?php snippet('header') ?>

<?php snippet('head') ?>

<a href="#next-edition"><div id="godown" class="fa fa-arrow-down"></div></a>

<?php snippet('nextedition') ?>

<div class="container mb">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 center">
            <h1>Animax, c’est LE laboratoire collaboratif qui innove en management !</h1>
        </div>
        <div class="col-md-5 col-md-offset-1 intro">
            <h3>Pourquoi ?</h3>
            <?php echo $page->pourquoi()->kirbytext() ?>
        </div>
        <div class="col-md-5 intro">
            <h3>Comment ?</h3>
            <p><?php echo $page->comment()->kirbytext() ?></p>
        </div>
        <div class="col-md-10 col-md-offset-1 intro">
            <p><?php echo $page->text()->kirbytext() ?></p>
        </div>
    </div>
</div>

<hr>

<?php snippet('pastedition') ?>

<?php snippet('questions') ?>

<?php snippet('footer') ?>