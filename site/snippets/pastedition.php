
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
            <?php if ($pastEdition->photos() != '') : ?>
                <a href="<?php echo $pastEdition->photos() ?>" target="_blank">Voir les photos</a>
            <?php endif ?>
            <?php if($page->template() != 'edition') : ?>
                <a href="<?php echo $pastEdition->url() ?>" class="btn btn-theme">En savoir plus</a>
            <?php endif ?>
        </div>
        <div class="col-md-8">
            <div class="responsive-video">
                <?php 
                  if($pastEdition->video() != ''){
                    if (preg_match("/\b(?:youtu|youtube)\b/i", $pastEdition->video())) {
                      echo youtube($pastEdition->video(), '100%');
                    } else if(preg_match("/\b(?:vimeo)\b/i", $pastEdition->video())) {
                      echo vimeo($pastEdition->video(), '100%');
                    }
                  }
                ?>
            </div>
        </div>
    </div>
</div>


