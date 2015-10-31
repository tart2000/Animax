<div id="next-edition" class="lpt pb">
    <div class="container mb">
        <div class="row">
        <?php $today=date('c'); ?>
        <?php foreach (page('editions')->children() as $nextEdition) : ?>
            <?php if ($nextEdition->startDate()->date('c') > $today) :?> 
            <div class="col-md-offset-4 col-md-8">
                <h1><?php echo $nextEdition->title(); ?></h1>
            </div>
            <div class="col-md-4 right spt">
                <h4 class="up"><i class="fa fa-calendar mr"></i><?php snippet('date-range', array('edition'=>$nextEdition)) ?></h4>
                <?php if ($nextEdition->locationLink() != "") :?>
                    <h4 class="up"><i class="fa fa-map-marker mr"></i><?php echo $nextEdition->location() ?></h4>
                <?php endif ?>
                <div class="clearfix"></div>
                <?php if ($nextEdition->inscriptions() != "") : ?>
                    <a href="<?php echo $nextEdition->inscriptions() ?>" class="btn btn-theme btn-lg smt smb" target="_blank">Inscriptions</a>
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