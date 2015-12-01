<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="container mt">

      <div class="project-title smb">
        <h1 class="center"><?php echo $page->title()->html() ?></h1>
      </div>

      <div class="row">
          <div class="col-md-7 col-md-offset-1">
              <div class="responsive-video">
                <?php 
                  if($page->video() != ''){
                    if (preg_match("/\b(?:youtu|youtube)\b/i", $page->video())) {
                      echo youtube($page->video(), '100%');
                    } else if(preg_match("/\b(?:vimeo)\b/i", $page->video())) {
                      echo vimeo($page->video(), '100%');
                    }
                  }
                ?>
              </div>

              <h4><?php echo $page->baseline()->html() ?></h4>

              <?php echo $page->text()->kirbytext() ?>

          </div>
          <div class="col-md-3">
            
            <?php if($page->projectimage() != ''): ?>
              <?php $image = $page->projectimage()->toFile(); ?>
              <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="img-responsive">
            <?php endif ?>

            <div class="spacing"></div>
            <p><b>Equipe :</b>
            <ul> 
              <?php foreach ($page->team()->split(',') as $guy) : ?>
              <li><?php echo $guy ?></li> 
              <?php endforeach ?>
            </ul>
            </p>

            <b>Facilitateur</b>
            <ul>
                <li><a href=""><?php echo $page->facilitator() ?></a></li>
            </ul>
            
            <div class="spacing"></div>

            <?php if($page->teamimage() != ''): ?>
              <?php $image = $page->teamimage()->toFile(); ?>
              <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="img-responsive">
            <?php endif ?>

          </div>
      </div> <!--/row -->
      <div class="row mt">
        <div class="col-md-10 col-md-offset-1"
          <nav class="" role="navigation">
            <ul class="pager">
              <?php if($prev = $page->prevVisible()): ?>
              <li class="previous"><a href="<?php echo $prev->url() ?>">&larr; précédent</a></li>
              <?php endif ?>
              <?php if($next = $page->nextVisible()): ?>
              <li class="next"><a href="<?php echo $next->url() ?>">suivant &rarr;</a></li>
              <?php endif ?>
            </ul>
          </nav>
        </div>
      </div>
  </div> <!--/container -->




  </main>

<?php snippet('footer') ?>