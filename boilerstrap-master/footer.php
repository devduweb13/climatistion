<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */
?>
  	</div><!-- #main .wrapper -->
    <footer id="main-footer">
        <div class="container">
            <div class="row">

        <section id="footer-contact" class="col-xs-12 col-sm-6 col-md-4">

                <h2>Contact</h2>

            <div class="footer-contact-adresse">
                <img src="img/picto-maison.png" class="img-responsive" alt="">
                <p>2386 Ripple Street<br>
                Hillman, MI 49746</p>
            </div>

            <div class="footer-contact-mail">
                <img src="img/picto-contact.png" class="img-responsive" alt="">
                <p>contact@climatisation.com</p>
            </div>

        </section>


        <section id="footer-job" class="col-xs-12 col-sm-6 col-md-4">

            <h2>Job</h2>

            <p>Donec sollicitudin molestie malesuada. Nulla quis lorem Nulla quis lorem.</p>

            <div class="redirection-footer-job">

                <p><a href="">>> Rejoignez-nous</a></p>
                <p><a href="">>> Rejoignez-nous</a></p>

            </div>

        </section>


        <section id="footer-formulaire" class="col-xs-12 col-md-4">

            <h2>Demande de contact</h2>

            <form method="post" action="traitement.php">
                <p><input type="text" name="nom" id="nom-formulaire" placeholder="Votre Nom"></input></p>
                <p><input type="email" name="email" id="email-formulaire" placeholder="Votre Email"></input></p>
                <p><textarea name="message" id="demande-formulaire" rows="3" cols="2" placeholder="Formulez-nous votre demande"></textarea></p>
                <input type="submit" value="Envoyer" />
            </form>

        </section>

        </div>
        </div>
    </footer>
  </div><!-- #page -->

  <?php wp_footer(); ?>
</div>
</body>
</html>
