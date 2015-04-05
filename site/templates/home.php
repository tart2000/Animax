<?php snippet('header') ?>

  <main class="main" role="main">

    <?php snippet('head') ?>

    <div class="container mt">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="jumbotron">
              <?php echo $page->text()->kirbytext() ?>
              </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row centered">
            <h1>Retour sur la première édition</h1>
            <hr>
            <div class="spacing"></div>
            <div class="row">
                <div class="col-md-4 left">
                    <img src="/assets/images/valpre.jpg" class="img-responsive">
                    <h3>Valpré, 20, 21 novembre 2014</h3>
                    <p>Cette première édition, expérimentale, a réuni 5 équipes de 6 personnes, avec chacune un facilitateur dédié, pour 24h de créativité intense.</p>
                    <p>Devant l'enthousiasme des participants, des partenaires et des organisateurs, vous pouvez être sûrs qu'il y aura une prochaine édition !</p>
                    <p>Vous pouvez retrouver ci-dessous le détail des projets qui ont été dévelopés.</p>
                </div>
                <div class="col-md-8 left">
                    <div class="responsive-video">
                        <iframe src="//player.vimeo.com/video/114807563?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div> <!--/row -->
    </div> <!--/container -->


    <?php snippet('projects') ?>

    <?php snippet('partenaires') ?>

    <?php snippet('questions') ?>

  </main>

<?php snippet('footer') ?>