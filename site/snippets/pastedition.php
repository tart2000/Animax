<div id="past-edition" class="lpt pb bmb bpb">
    <?php $today=date('c'); ?>
    <?php foreach (page('editions')->children()->filterBy('startDate','<',$today)->limit(1) as $pastEdition) : ?>
            <div class="container smb">
                <div class="row">
                    <div class="col-md-12 center">
                        <h1>Dernière édition</h1>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <?php if($image = $pastEdition->images()->sortBy('sort', 'asc')->first()): ?>
                            <img src="<?php echo $image->url() ?>" alt="<?php echo $pastEdition->title()->html() ?>" class="img-responsive">
                        <?php endif ?>
                        <h2><?php echo $pastEdition->location() ?>, <?php echo $pastEdition->date('j', 'startDate') ?> - <?php echo $pastEdition->date('j M Y', 'endDate') ?></h2><br/>
                        <div class="clearfix"></div>
                        <p><?php echo $pastEdition->text()->kirbytext() ?></p>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="responsive-video">
                          <iframe src="//player.vimeo.com/video/<?php echo $pastEdition->Vimeolink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                      </div>
                    </div>
                </div>
            </div>
            <div class="container">
            <h3 class="center">Projets</h3>
            <div class="row">
                <?php $thetag=$pastEdition->projectLabel() ?>
                <?php foreach(page('projets')->children()->filterBy('tags',$thetag,',') as $project): ?>
                    <?php snippet('project', array('project'=>$project)) ?>
                <?php endforeach ?>
            </div><!-- portfolio -->
        </div><!-- portfolio container -->
        <div class="container">
            <h4 class="center">Avec le soutien de :</h4>
            <div class="row">
                <?php foreach ($pastEdition->children()->filterBy('template','partner') as $partner) : ?>
                    <div class="col-md-3 col-xs-6 col-sm-4 smt partner">
                        <a href="<?php echo $partner->partnerLink() ?>">
                            <?php if($image = $partner->images()->first()): ?>
                                <img src="<?php echo $image->url() ?>" alt="<?php echo $partner->title()->html() ?>" class="img-responsive">
                            <?php endif ?>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    <?php endforeach ?>
</div>