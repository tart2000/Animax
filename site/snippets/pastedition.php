<div id="past-edition" class="lpt pb">
    <?php $today=date('c'); ?>
    <?php foreach (page('editions')->children() as $pastEdition) : ?>
        <?php if ($pastEdition->startDate()->date('c') < $today) :?> 
            <div class="container smb">
                <div class="row">
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
                </div>
            </div>
            <div class="container">
            <h3 class="center">Projets</h3>
            <div class="row">
                <?php $thetag=$pastEdition->projectLabel() ?>
                <?php foreach(page('projects')->children()->filterBy('tags',$thetag,',') as $project): ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-thumb">
                            <a href="<?php echo $project->url() ?>">
                            <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
                            <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" class="img-responsive">
                            <?php endif ?>
                            <div class="project-thumb-title">
                                <h4><?php echo $project->title()->html() ?> - <?php echo $project->baseline()->excerpt(80) ?></h4>
                            </div>
                            </a>
                        </div>
                      </div>
                <?php endforeach ?>
            </div><!-- portfolio -->
        </div><!-- portfolio container -->
        <div class="container">
            <h4 class="center">Merci à nos partenaires, qui ont rendu cette édition possible    </h4>
            <div class="row">
                <?php foreach ($pastEdition->children() as $partner) : ?>
                    <div class="col-md-3 col-xs-6 col-sm-4 smt">
                        <a href="<?php echo $partner->partnerLink() ?>">
                        <?php if($image = $partner->images()->sortBy('sort', 'asc')->first()): ?>
                        <img src="<?php echo $image->url() ?>" alt="<?php echo $partner->title()->html() ?>" class="img-responsive">
                        <?php endif ?>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>


        <?php endif ?>
    <?php endforeach ?>
</div>