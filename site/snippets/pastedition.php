
<div class="container smb">
    <div class="row">
        <div class="col-md-12 center smb">
            <h1><?php echo $pastEdition->title() ?></h1>
        </div>
        <div class="col-md-4 col-xs-12">
            <?php if($image = $pastEdition->images()->sortBy('sort', 'asc')->first()): ?>
                <img src="<?php echo $image->url() ?>" alt="<?php echo $pastEdition->title()->html() ?>" class="img-responsive">
            <?php endif ?>
            <h2><?php echo $pastEdition->location() ?>, <?php echo $pastEdition->date('j', 'startDate') ?> - <?php echo $pastEdition->date('j M Y', 'endDate') ?></h2><br/>
            <div class="clearfix"></div>
            <p><?php echo $pastEdition->text()->kirbytext() ?></p>
            <a href="<?php echo $pastEdition->url() ?>" class="btn btn-theme">Voir les projets</a>
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
<div class="center bmt">
    <a href="<?php echo $pastEdition->url() ?>">En savoir plus</a>
</div>


