<div id="" class="lpt pb">
    <div class="container mb">
        <div class="row">
        <?php $today=date('c'); ?>
        <?php foreach (page('editions')->children() as $pastEdition) : ?>
            <?php if ($pastEdition->startDate()->date('c') < $today) :?> 
            <div class="col-md-12 center">
                <h1>Retour sur <?php echo $pastEdition->title(); ?></h1>
            </div>
            <div class="col-md-4 col-xs-12">
                <?php if($image = $pastEdition->images()->sortBy('sort', 'asc')->first()): ?>
                    <img src="<?php echo $image->url() ?>" alt="<?php echo $pastEdition->title()->html() ?>" class="img-responsive">
                <?php endif ?>
                <h2 class="right"><?php echo $pastEdition->location() ?> - <?php echo $pastEdition->date('j', 'startDate') ?> - <?php echo $pastEdition->date('j M Y', 'endDate') ?></h2>
                <div class="clearfix"></div>
                <p><?php echo $pastEdition->text()->kirbytext() ?></p>
            </div>
            <div class="col-md-8">
                <div class="responsive-video">
                  <iframe src="//player.vimeo.com/video/<?php echo $pastEdition->Vimeolink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
              </div>

            </div>
            <?php endif ?>
        <?php endforeach ?>
        </div>
    </div>
</div>