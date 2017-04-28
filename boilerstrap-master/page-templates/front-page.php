<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Boilerstrap consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */

 get_header();
 get_sidebar( 'mobile' ); ?>



 <section id="services-climatisation" class="col-xs-12">
 		<div class="container">
 				<div class="row">

 				<div class="services-climatisation-bloc col-xs-12 col-lg-8">

 						<h2><?php the_field('titre') ;?></h2>

 						<p><?php the_field('contenu') ;?></p>

 						<div class="redirection-services">
 								<a href="">En savoir +</a>
 						</div>

 				</div>

 				<div class="image-services ">
 						<img src="<?php the_field('image')?>" class="img-responsive" alt="">
 				</div>

 				</div>
 		</div>
 </section>


 <section id="estim-climatisation" class="col-xs-12">
 		<div class="container">
 				<div class="row">

 		<div class="visuel-maison col-xs-4 col-sm-5 col-md-4">
 				<img src="<?php the_field('image_2')?>" class="img-responsive" alt="">
 		</div>

 		<div class="estim-climatisation-bloc col-xs-8 col-sm-7 col-md-8">
 				<div class="row">

 						<h2><?php the_field('titre_2') ;?></h2>

 						<div class="col-xs-12">
 								<div class="row">

 										<div class="col-xs-10 col-md-7">
 												<div class="row">
 										<p><?php the_field('contenue_2') ;?></p>
 												</div>
 										</div>

 										<div class="redirection-estimation col-xs-12 col-md-5">
 												<a href="">Estimez >></a>
 										</div>
 								</div>
 						</div>

 				</div>

 		</div>

 		<div class="image-estimation">
 				<img src="<?php echo get_template_directory_uri(); ?>/img/glacon.png" class="img-responsive" alt="">
 		</div>

 				</div>
 		</div>
 </section>

 <section id="contactez-nous" class="col-xs-12">
 		<div class="container">
 				<div class="row">

 		<div class="col-xs-12">
 				<div class="row">
 						<h2>Contactez-nous</h2>
 				</div>
 		</div>

 		<div class="infos-contactez-nous col-xs-12 col-sm-6">
 				<div class="row">

<?php the_field('contenu_gauche') ;?>

 				<ul>
 						<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icone-facebook.png" class="img-responsive" alt=""></a></li>
 						<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icone-twitter.png" class="img-responsive" alt=""></a></li>
 						<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icone-google.png" class="img-responsive" alt=""></a></li>
 						<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icone-linkedin.png" class="img-responsive" alt=""></a></li>
 						<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icone-youtube.png" class="img-responsive" alt=""></a></li>
 				</ul>

 				</div>
 		</div>

 		<div class="formulaire-contactez-nous col-xs-12 col-sm-6">
 				<div class="row">

 				<form method="post" action="traitement.php">
 						<p><input type="text" name="nom" id="nom-formulaire" placeholder="Votre Nom"></input></p>
 						<p><input type="email" name="email" id="email-formulaire" placeholder="Votre Email"></input></p>
 						<p><input type="tel" name="telephone" id="tel-formulaire" placeholder="Votre Téléphone"></input></p>
 						<p><textarea name="message" id="demande-formulaire" rows="5" cols="50" placeholder="Formulez-nous votre demande"></textarea></p>
 						<input type="submit" value="+">
 				</form>
 		</div>
 </div>

 <div id="bloc-formulaire">

 		<div class="image-formulaire">
 				<img src="<?php echo get_template_directory_uri(); ?>/img/bonhomme-formulaire.png" class="img-accroche" alt="logo-climatisation">
 		</div>

 		<div class="bloc-picto-formulaire"></div>

 </div>

 				</div>
 		</div>
 </section>



 <section id="map-home" class="col-xs-12">

 		<p>Google Map</p>

 </section>


 <section id="bandeau-partenaires" class="col-xs-12">
 		<div class="container">
 				<div class="row">

 		<div class="col-xs-12 col-md-3">
 				<div class="row">
 						<h2>Nos partenaires</h2>
 				</div>
 		</div>

 		<div class="logo-partenaires col-xs-12 col-md-9">
 				<div class="row">

					<?php
					$rows = get_field('partenaires' , 'option');
					if($rows)
					{


						foreach($rows as $row)
						{
							?>
<img src="<?php echo $row['image']  ?>" class="img-responsive" alt="">

							<?php
						}


					}
					 ?>

 				</div>
 		</div>

 				</div>
 		</div>
 </section>


 <section id="bandeau-entreprise-certifiee" class="col-xs-12">

 		<p><?php the_field('accroche_certification')?></p>

 </section>


 <section id="bandeau-certification" class="col-xs-12">
 		<div class="container">
 				<div class="row">

 				<div class="bandeau-certification-bloc col-xs-12 col-md-8">

 						<h2><?php the_field('titre_certification')?></h2>

 						<div class="col-xs-12 col-sm-8">
 								<div class="row">

 										<div class="col-xs-12">
 												<div class="row">
<p>
	<?php the_field('contenu_certification')?>
</p> 												</div>
 										</div>

 								</div>
 						</div>

 								<div class="redirection-certification col-xs-10 col-sm-4">
 										<a href="">Découvrir >></a>
 								</div>

 				</div>

 				</div>
 		</div>

 		<div class="image-certification">
 				<img src="<?php echo get_template_directory_uri(); ?>/img/carnet.png" class="img-responsive" alt="">
 		</div>

 </section>

 <?php get_footer(); ?>
