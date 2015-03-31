<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="container mt">
        <div class="row">

        <div class="col-md-12 mb">
          <h1><?php echo $page->title()->html() ?></h1>
          <?php echo $page->text()->kirbytext() ?>
        </div>

        
        <?php foreach(page('collectif')->children()->limit(6)->shuffle() as $member): ?>
            <div class="col-md-6 collectif-item">
                <div class="row">
                <div class="col-sm-4">
                    <a href="<?php echo $member->url() ?>">
                    <?php if($image = $member->images()->sortBy('sort', 'asc')->first()): ?>
                    <img src="<?php echo $image->url() ?>" alt="<?php echo $member->title()->html() ?>" class="img-responsive collectif-img">
                    <?php endif ?>
                    </a>
                </div>
                <div class="col-sm-8 collectif-text">
                    <a href="<?php echo $member->url() ?>">
                    <h4><?php echo $member->title()->html() ?> - <?php echo $member->boite()->html() ?></h4>
                    </a>
                    <hr>
                    <strong><?php echo $member->position()->excerpt(120) ?></strong></br>
                    <a href="<?php echo $member->url() ?>">Plus -></a>
                </div>
                </div>
              </div>
        <?php endforeach ?>
        </div>

    </div>

  </main>

<?php snippet('footer') ?>