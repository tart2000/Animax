<?php snippet('header') ?>

<?php snippet('head') ?>

<a href="#next-edition"><div id="godown" class="fa fa-arrow-down"></div></a>

<?php snippet('nextedition') ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 center">
            <h1>Animax, c’est LE laboratoire collaboratif qui innove en management !</h1>
        </div>
        <div class="col-md-5 col-md-offset-1 intro">
            <h3>Pourquoi ?</h3>
            <?php echo $page->pourquoi()->kirbytext() ?>
        </div>
        <div class="col-md-5 intro">
            <h3>Comment ?</h3>
            <p><?php echo $page->comment()->kirbytext() ?></p>
        </div>
        <div class="col-md-10 col-md-offset-1 intro">
            <p><?php echo $page->text()->kirbytext() ?></p>
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



<?php snippet('footer') ?>