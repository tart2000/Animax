<?php snippet('header') ?>



  <main class="main" role="main">

    <div class="container mt">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="text">
                  <h1><?php echo $page->title()->html() ?></h1>
                  <?php echo $page->text()->kirbytext() ?>
                </div>
            </div>
        </div>

    </div>
    <?php $today=date('c'); ?>
<hr>
<!-- éditions passées -->
<h1>Editions passées</h1>
<?php $pastEditions = $page->children()->filterBy('endDate','<',$today) ?>
<?php $count = 1 ?>
<?php foreach ($pastEditions as $edition) : ?>
  	<?php snippet('pastedition', array('pastEdition' => $edition)) ?>
    <!-- séparation intermédiare -->
    <?php e($count<$pastEditions->count(),'<hr>') ?>
    <?php $count++ ?>
<?php endforeach ?>


  </main>

<?php snippet('footer') ?>