<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="container mt">
        <div class="row">

        <div class="col-md-12 mb">
          <h1><?php echo $page->title()->html() ?></h1>
          <p><?php echo $page->text() ?></p>
        </div>

        <?php $counter = 0 ?>        
        <?php foreach(page('collectif')->children()->limit(6)->shuffle() as $member): ?>
            <div class="col-md-6 collectif-item">
                <div class="row">
                <div class="col-sm-4">
                    <a href="<?php echo $member->url() ?>">
                    <?php if($member->hasImages()): ?>
                        <div class="collectif-img">
                            <?php echo thumb($member->images()->first(), array('width'=>400, 'height'=>400, 'crop'=>true)) ?>
                        </div>
                    <?php endif ?>
                    </a>
                </div>
                <div class="col-sm-8 collectif-text">
                    <a href="<?php echo $member->url() ?>">
                    <h4><?php echo $member->title()->html() ?> - <?php echo $member->boite()->html() ?></h4>
                    </a>
                    <hr>
                    <strong><?php echo $member->position()->excerpt(120) ?></strong></br>
                    <a href="<?php echo $member->url() ?>">Plus &rarr;</a>
                </div>
                </div>
            </div>
            <?php $counter++ ?>
            <?php if ($counter%2 == 0) : ?>
                <div class="clearfix"></div>
            <?php endif ?>
        <?php endforeach ?>
        </div>

    </div>

  </main>

<?php snippet('footer') ?>