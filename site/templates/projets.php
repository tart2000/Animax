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

	<div class="container mt">
		<div class="row">
	    <?php foreach ($page->children() as $project) : ?>
	    	<?php snippet('project', array('project'=>$project)) ?>
		<?php endforeach ?>
		</div>
	</div>

  </main>

<?php snippet('footer') ?>