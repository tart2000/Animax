<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="container mt">
        <div class="row">
          <div class="col-md-2 col-md-offset-2">
              <?php if($page->hasImages()): ?>
                  <div class="collectif-img">
                      <?php echo thumb($page->images()->first(), array('width'=>400, 'height'=>400, 'crop'=>true)) ?>
                  </div>
              <?php endif ?>
            <div class="member-content">
              <?php if ($page->website() != '') : ?>
                <i class="fa fa-external-link mr"></i><a href="<?php echo $page->website() ?>" target="_blank"><?php echo $page->website()->uri() ?></a></br>
              <?php endif ?>
              <?php if ($page->linkedin() != '') : ?>
                <i class="fa fa-linkedin mr"></i><a href="<?php echo $page->linkedin() ?>" target="_blank">LinkedIn</a></br>
              <?php endif ?>
              <?php if ($page->courriel() != '') : ?>
                <i class="fa fa-envelope mr"></i><a href="mailto:<?php echo $page->courriel() ?>" target="_blank">écrire</a></br>
              <?php endif ?>
              <?php if ($page->tel() != '') : ?>
                <i class="fa fa-phone mr"></i><?php echo $page->tel() ?>
              <?php endif ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text">
              <h1><?php echo $page->title()->html() ?> - <?php echo $page->boite() ?></h1>
              <hr>
              <strong><?php echo $page->position() ?></strong>
              <p><?php echo $page->text() ?></p>
            </div>
          </div>
        </div>

    </div>

  </main>

<?php snippet('footer') ?>