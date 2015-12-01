<div class="col-md-4 col-sm-6">
    <div class="project-thumb">
        <a href="<?php echo $project->url() ?>">
        <?php if($project->projectimage() != ''): ?>
          <?php $image = $project->projectimage()->toFile(); ?>
          <?php $cover = $image->url(); ?>
        <?php else : ?>       
            <?php $cover = $site->url().'/assets/images/defaut.jpg' ?>
        <?php endif ?>
        <div class="thumb-image" style="background-image:url(<?php echo $cover ?>)">
        </div>
        <div class="thumb-title">
            <h3><?php echo $project->title() ?></h3>
        </div>
        <div class="project-thumb-title">
            <?php echo $project->baseline()->excerpt(80) ?>
        </div>
        </a>
    </div>
  </div>