<div id="footerwrap" class="bmt">
    <hr>

    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h4><?php echo page('editions')->title() ?></h4>
                <?php foreach (page('editions')->children() as $ed) : ?>
                    <a href="<?php echo $ed->url() ?>"><?php echo $ed->title() ?></a></br>
                <?php endforeach ?> 
                <div class="clearfix"></div>
                <p><a href="https://github.com/tart2000/animax"><i class="fa fa-github"></i></a></p>
            </div>
            <div class="col-sm-2 centered">
                <img src="/assets/images/logo_Animax_nb.png" class="img-responsive">
                <div class="spacing"></div>
                <a href="https://www.facebook.com/labanimax" class="btn-social btn-outline" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="http://twitter.com/AnimaxLab" class="btn-social btn-outline" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="http://www.linkedin.com/company/animaxlab" class="btn-social btn-outline" target="_blank"><i class="fa fa-linkedin"></i></a>
                <div class="spacing"></div>
                <a href="http://www.em-lyon.com/"><img src="/assets/images/emlyon.gif" class="img-responsive"></a>
                </div>
                
            <div class="col-sm-5">
                <h4 style="text-align:right;">Contact</h4>
                <p style="text-align:right;">
                    Collectif Animax</br>
                    6 rue Clément 69130 ECULLY</br>
                    FRANCE</br>
                    <a href="mailto:bonjour@animax.management" target="_blank">bonjour@animax.management</a></br>
                    06 13 68 14 25</br>
                </p>
            </div>
        </div> <!--/row -->
    </div> <!--/container -->
</div> <!--/footerwrap -->