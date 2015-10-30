<?php snippet('header') ?>

<main class="main" role="main">

  <?php if ($page->date('U','startDate')  > date('U')) : ?>
  <!-- Future event -->
  <div class="container mt smb">
    <div class="row">
      <div class="col-md-12 center smb">
            <h1><?php echo $page->title() ?></h1>
        </div>
    </div>
  </div>

  <?php else : ?>
  <!-- Past event -->
    <div class="container mt smb">
      <div class="row">
        <div class="col-md-12 center smb">
            <h1><?php echo $page->title() ?></h1>
        </div>
        <div class="col-md-4">
            <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): ?>
                <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="img-responsive">
            <?php endif ?>
            <?php $edition = $page ?>
            <h3><?php echo $page->location() ?>, <?php snippet('date-range',array('edition'=>$edition)) ?></h3><br/>
            <div class="clearfix"></div>
            <p><?php echo $page->text()->kirbytext() ?></p>
        </div>
        <div class="col-md-8">
            <div class="responsive-video">
              <iframe src="//player.vimeo.com/video/<?php echo $page->Vimeolink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div> <!--/container -->
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