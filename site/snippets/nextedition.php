<div id="next-edition" class="lpt pb">
    <div class="container mb">
        <div class="row">
        <?php $today=date('c'); ?>
        <?php foreach (page('editions')->children() as $nextEdition) : ?>
            <?php if ($nextEdition->startDate()->date('c') > $today) :?> 
            <div class="col-md-offset-4 col-md-8">
                <h1><?php echo $nextEdition->title(); ?></h1>
            </div>
            <div class="col-md-4">
                <h2 class="right"><i class="fa fa-calendar bmr"></i><?php echo $nextEdition->date('j', 'startDate') ?> - <?php echo $nextEdition->date('j M Y', 'endDate') ?></h2>
                <?php if ($nextEdition->locationLink() != "") :?>
                    <h2 class="right"><a href="<?php echo $nextEdition->locationLink() ?>"><i class="fa fa-map-marker bmr"></i><?php echo $nextEdition->location() ?></a></h2>
                <?php endif ?>
                <?php if ($nextEdition->inscriptions() != "") : ?>
                    <a href="<?php echo $nextEdition->inscriptions() ?>" class="btn btn-theme btn-lg right" target="_blank">Inscriptions</a>
                <?php endif ?>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-7 intro">
                <p><?php echo $nextEdition->text()->excerpt(300) ?></p>
                <a href="<?php echo $nextEdition->url() ?>">En savoir plus</a>
            </div>
            <?php endif ?>
        <?php endforeach ?>
        </div>
    </div>
</div>