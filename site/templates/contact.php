<?php snippet('header') ?>

<main class="main bmt" role="main">
	<div class="center">
		<h2><?php echo $page->title() ?></h2>
	</div>
	<div class="container bmt">
	  	<div class="row">
	  		<div class="col-sm-8 col-sm-offset-2 col-xs-12">
	  			<div class="row">
					<div class="col-sm-7">
					  	<form action="//formspree.io/rbalay@mevolution.fr" id="form"  method="POST">
					  	
					  		<div class="form-group">
						    	<input class="form-control input-lg" id="name" required placeholder="Nom" type="text" name="name">
						    </div>

						    <div class="form-group">
						    	<input class="form-control input-lg" id="mail" required placeholder="Mail" type="email" name="mail">
							</div>

							<div class="form-group">
						    	<input class="form-control input-lg" id="tel" required placeholder="Téléphone" type="tel" name="tel">
						    </div>

						    <div class="form-group">
								<textarea class="form-control input-lg" rows="8" placeholder='Message' type='message' name='message'></textarea>
						    </div>

						    <input type="hidden" name="_next" value="<?php echo $site->url() ?>" />
						    <input type="hidden" name="_subject" value="Message du site Internet" />
						    <input type="text" name="_gotcha" style="display:none" />

						    <button type="submit" class="btn btn-effect">Envoyer</button>
						</form>
			  		</div>
			  		<!-- fin colonne de gauche -->
			  		<div class="col-sm-5 col-xs-12" id="info">
			  			<?php echo $page->text()->kirbytext(); ?>
					</div>
	  			</div> <!-- fin row intérieur -->
	  		</div> <!-- fin colonne centrale -->
	  	</div>	<!-- fin row -->
	</div> <!-- fin container -->
</main>

<?php snippet('footer') ?>