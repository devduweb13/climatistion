<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */

get_header();
get_sidebar( 'mobile' ); ?>


<div id="image-principale">

</div>

<section id="services-climatisation" class="col-xs-12">
		<div class="container">
				<div class="row">

				<div class="services-climatisation-bloc col-xs-12 col-lg-8">

						<h2>Nos services Climatisation Pose Entretien</h2>

						<p>Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia.</p>

						<div class="redirection-services">
								<a href="">En savoir +</a>
						</div>

				</div>

				<div class="image-services ">
						<img src="<?php echo get_template_directory_uri(); ?>/img/climatisation.png" class="img-responsive" alt="">
				</div>

				</div>
		</div>
</section>


<section id="estim-climatisation" class="col-xs-12">
		<div class="container">
				<div class="row">

		<div class="visuel-maison col-xs-4 col-sm-5 col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/visuel-maison.png" class="img-responsive" alt="">
		</div>

		<div class="estim-climatisation-bloc col-xs-8 col-sm-7 col-md-8">
				<div class="row">

						<h2>Estimez votre isolation</h2>

						<div class="col-xs-12">
								<div class="row">

										<div class="col-xs-10 col-md-7">
												<div class="row">
										<p>Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur.</p>
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

				<p>+33 1 11 11 11 11</p>

				<p>contact@climatisation.com</p>

				<p>2386 Ripple Street<br>
						Hillman, MI 49746</p>

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
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-mitsubishi.png" class="img-responsive" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-panasonic.png" class="img-responsive" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partenaires-daikin.png" class="img-responsive" alt="">
				</div>
		</div>

				</div>
		</div>
</section>


<section id="bandeau-entreprise-certifiee" class="col-xs-12">

		<p>Une entreprise certifiée,<br>
				c'est gage de qualité!</p>

</section>


<section id="bandeau-certification" class="col-xs-12">
		<div class="container">
				<div class="row">

				<div class="bandeau-certification-bloc col-xs-12 col-md-8">

						<h2>Nos certifications</h2>

						<div class="col-xs-12 col-sm-8">
								<div class="row">

										<div class="col-xs-12">
												<div class="row">
										<p>Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur arcu erat, accumsan id imperdiet et.</p>
												</div>
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
