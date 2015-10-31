<?php snippet('header') ?>



<main class="main mt" role="main">

  <?php $today=date('c'); ?>
  <?php $nextEditions = page('editions')->children()->filterBy('startDate','>',$today) ?>
  <?php foreach ($nextEditions as $nextEdition) : ?>
    <?php snippet('nextedition', array('nextEdition'=>$nextEdition)) ?>
  <?php endforeach ?>

  <hr>
  
  <!-- éditions passées -->
  <div class="center">
    <em>Éditions passées</em>
  </div>
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