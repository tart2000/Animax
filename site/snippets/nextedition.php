<div id="next-edition" class="pt pb">
    <div class="container mb">
        <div class="row">
        <?php $today=date('c'); ?>
        <?php foreach (page('editions')->children() as $nextEdition) : ?>
            <?php if ($nextEdition->startDate()->date('c') > $today) :?> 
            <div class="col-md-12 center">
                <h1><?php echo $nextEdition->title(); ?></h1>
            </div>
            <div class="col-md-4 col-xs-12">
                <h2 class="right"><?php echo $nextEdition->date('j', 'startDate') ?> - <?php echo $nextEdition->date('j M Y', 'endDate') ?></h2>
                <h2 class="right"><a href="<?php echo $nextEdition->locationLink() ?>"><?php echo $nextEdition->location() ?></a></h2>
                <?php if ($nextEdition->inscriptions() != "") : ?>
                    <a href="<?php echo $nextEdition->inscriptions() ?>" class="btn btn-theme btn-lg right">Inscriptions</a>
                <?php endif ?>
            </div>
            <div class="col-md-7">
                <p><?php echo $nextEdition->text()->kirbytext() ?></p>

            </div>
            <?php endif ?>
        <?php endforeach ?>
        </div>
    </div>
</div>