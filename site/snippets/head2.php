<div id="carousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $counter = 0 ?>
    <?php foreach($page->images() as $img) : ?>
    <div class="item <?php e($counter == 0, 'active') ?>" style="background-image:url(<?php echo $img->url() ?>)">
        <div class="carousel-caption">
        <?php $counter++ ?>
      </div>
    </div>
    <?php endforeach ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div><!-- /headerwrap -->

<div id="headerwrap">
    <div class="container-fluid">
        <div class="row">
            <div class="blurb col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                <h1><?php echo $site->title() ?></h1>
                <h3><?php echo $site->description() ?></h3>
                <a href="/a-propos/" class="btn btn-lg btn-theme">En savoir plus</a>           
            </div>
            <div class="col-lg-6 col-lg-offset-3 himg">
            </div>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /headerwrap -->