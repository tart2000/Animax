<div id="portfoliowrap">
    <div class="container">
        <h3>Projets</h3>
        <div class="row">
            <?php foreach(page('projects')->children()->visible()->limit(6) as $project): ?>
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
</div><!--/Portfoliowrap -->

