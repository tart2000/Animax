<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="<?php echo $site->url ?>" alt=""><img src="/assets/images/logo_Animax.png" class="img-responsive"></a>
    </div>
    <div class="navbar-collapse collapse navbar-right">
      <ul class="nav navbar-nav">
        <?php foreach($pages->visible() as $p): ?>
          <li>
            <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
          </li>
        <?php endforeach ?>
        <!-- bouton inscriptions -->
        <?php $today=date('c'); ?>
        <?php if ($nextEdition = page('editions')->children()->filterBy('startDate','>',$today)->first()) : ?>
          <?php if ($nextEdition->inscriptions() != '') : ?>
            <li class="register">
              <a href="<?php echo $nextEdition->url() ?>">Inscriptions</a>
            </li>
          <?php endif ?>
        <?php endif ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
