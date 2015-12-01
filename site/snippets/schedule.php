
<div class="container">
<section id="schedule" class="row">
    <div class="col-md-12 center">
        <h2><?php echo $horaire->title() ?></h2>
    </div>
    <div class="col-md-5 col-sm-12">
        <div class="content-tabs">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab">Jour 1</a></li>
              <li><a href="#tab2" data-toggle="tab">Jour 2</a></li>
            </ul>


            <div class="tab-content">  

                <div class="tab-pane active" id="tab1">
                    <ul class="accordion-group">
                        <?php foreach ($horaire->day1()->yaml() as $h) : ?>
                        <li class="accordion">
                            <a class="accordion-heading">
                                <time><?php echo $h['heure'] ?></time>
                                <h4 class="accordion-title"><?php echo $h['nom'] ?></h4>
                                <span class="fa fa-plus-circle pull-right"></span>
                            </a>
                            <div class="accordion-body">
                                <?php echo $h['desc'] ?>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <!-- fin tab 1 -->

                <div class="tab-pane" id="tab2">
                    <ul class="accordion-group">
                        <?php foreach ($horaire->day2()->yaml() as $h) : ?>
                        <li class="accordion">
                            <a class="accordion-heading">
                                <time><?php echo $h['heure'] ?></time>
                                <h4 class="accordion-title"><?php echo $h['nom'] ?></h4>
                                <span class="fa fa-plus-circle pull-right"></span>
                            </a>
                            <div class="accordion-body">
                                <?php echo $h['desc'] ?>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <!-- fin tab 2 -->
               
            </div>
        </div>

    </div>
    <div class="col-md-7 col-sm-12">
        <h3>Présentation</h3>
        <?php echo $horaire->text()->kirbytext() ?>    
    </div>

</section>
</div>