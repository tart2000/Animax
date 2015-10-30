<?php snippet('header') ?>

<?php snippet('head2') ?>

<div id="godown" class="fa fa-arrow-down"></div>

<?php snippet('nextedition') ?>

<div class="container mb">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 center">
            <h1><?php echo $page->baseline() ?></h1>
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
        <div class="col-md-12 center">
            <a href="/a-propos" class="btn btn-lg btn-theme mt">En savoir plus</a>
        </div>
    </div>
</div>

<div id="past-edition" class="lpt pb bmb bpb">
    <?php $today=date('c'); ?>
    <?php $pastEdition = page('editions')->children()->filterBy('startDate','<',$today)->first() ?>
    <?php snippet('pastedition', array('pastEdition'=>$pastEdition)) ?>
</div>

<?php snippet('questions') ?>

<?php snippet('footer') ?>