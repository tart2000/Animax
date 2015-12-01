<?php snippet('header') ?>

<main class="main mt" role="main">

  <?php if ($page->date('U','startDate')  > date('U')) : ?>
    <!-- Future event -->
    <div class="container smb">
      <div class="row">
        <div class="col-sm-12 center">
          <h1><?php echo $page->title() ?></h1>
        </div>
        <div class="col-md-3 pt">
          <?php if($page->postimage() != ''): ?>
            <?php $image = $page->postimage()->toFile(); ?>
              <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="img-responsive">
          <?php endif ?>
          <div class="right">
            <h4 class="up spt"><i class="fa fa-calendar mr"></i> <?php snippet('date-range', array('edition'=>$page)) ?></h4>
            <h4 class="up">
              <?php e($page->locationLink() != '','<a href="'.$page->locationLink().'">') ?> 
                <i class="fa fa-map-marker mr"></i> <?php echo $page->location() ?>
              <?php e($page->locationLink() != '','</a>') ?>
            </h4>      
            <?php if ($page->inscriptions() != '') : ?>
              <a href="<?php echo $page->url() ?>" class="btn btn-theme btn-lg">Inscriptions</a>
            <?php endif ?>
          </div>
        </div>
        <div class="col-md-9">
          <div class="intro">
            <?php echo $page->text()->kirbytext() ?>
          </div>
          <div>
            <?php if($page->hasDocuments()) : ?>
              <?php foreach ($page->documents() as $doc) : ?>
                <a href="<?php echo $doc->url() ?>" download><?php echo $doc->name() ?> (<?php echo $doc->niceSize() ?>)</a></br>
              <?php endforeach ?>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>

  <?php else : ?>
    <!-- Past event -->
    <?php snippet('pastedition', array('pastEdition'=>$page)) ?>
  
  <?php endif ?>

  <!-- projets -->
  <?php $thetag=$page->projectLabel() ?>
  <?php $projects = page('projets')->children()->filterBy('tags',$thetag,',') ?>
  <?php if ($projects != '') : ?>
    <div class="container">
      <h3 class="center">Projets</h3>
          <div class="row">
              <?php foreach($projects as $project): ?>
                  <?php snippet('project', array('project'=>$project)) ?>
              <?php endforeach ?>
          </div>
    </div><!-- projets container -->
  <?php endif ?>

  <!-- partenaires -->
  <?php $partners = $page->children()->filterBy('template','partner') ?>
  <?php if ($partners != '') : ?>
    <div class="container mt">
      <div class="center">
        <em>Avec le soutien de :</em>
      </div>
      <div class="row">
          <?php foreach ($partners as $partner) : ?>
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
  <?php endif ?>

</main>

<?php snippet('footer') ?>