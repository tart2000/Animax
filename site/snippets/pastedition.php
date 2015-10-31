
<div class="container smb">
    <div class="row">
        <div class="col-md-12 center smb">
            <h1><?php echo $pastEdition->title() ?></h1>
        </div>
        <div class="col-md-4">
            <?php if($pastEdition->postimage() != ''): ?>
                <?php $image = $pastEdition->postimage()->toFile(); ?>
                <img src="<?php echo $image->url() ?>" alt="<?php echo $pastEdition->title()->html() ?>" class="img-responsive">
            <?php endif ?>
            <div class="">
                <h4 class="up spt"><i class="fa fa-calendar mr"></i> <?php snippet('date-range', array('edition'=>$pastEdition)) ?></h4>
                <h4 class="up"><i class="fa fa-map-marker mr"></i> <?php echo $pastEdition->location() ?></h4>
            </div>
            <p><?php echo $pastEdition->text()->kirbytext() ?></p>
            <?php if($page->template() != 'edition') : ?>
                <a href="<?php echo $pastEdition->url() ?>" class="btn btn-theme">En savoir plus</a>
            <?php endif ?>
        </div>
        <div class="col-md-8">
            <div class="responsive-video">
              <iframe src="//player.vimeo.com/video/<?php echo $pastEdition->Vimeolink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
    </div>
</div>


