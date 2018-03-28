
<?php wp_footer(); ?>


<footer class="page-footer footer-color center-on-small-only footer_index" style="clear:both">
    <!-- Links-->
    <div class="container-fluid">
        <div class="row">
            <!--Premiere colonne-->
            <div class="col-md-3 center">
                <h6 class="title border-title-footer">Charte de la guilde</h6>
<ul>
                <li class="padding-footer-link2"><a href="<?php bloginfo('url'); ?>/regles-guilde-wow-pve-fr-illuzion/" class="color_violet" target="_blank">Règles de la guilde</a></li>
                <li class="padding-footer-link2"><a href="<?php bloginfo('url'); ?>/rejoindre-la-guilde-illuzion-wow/" target="_blank" class="color_violet">Rejoindre la guilde</a></li>
</ul>
            </div>
            <!--Seconde colonne-->
            <div class="col-md-3 center">
                <h6 class="title  border-title-footer">Medias</h6>
                <ul>
                    <li class="padding-footer-link2">  <a href="http://www.wowprogress.com/guild/eu/hyjal/Illuzion" target="_blank" class="color_violet">Wowprogress</a></li>
                    <li class="padding-footer-link2">  <a href="https://www.warcraftlogs.com/guilds/200706" target="_blank" class="color_violet">Warcraftlogs</a></li>
                    <li class="padding-footer-link2"> <a href="http://eu.battle.net/wow/fr/guild/hyjal/Illuzion/" class="color_violet" target="_blank">Armurerie</a></li>
                    <li class="padding-footer-link2"> <a href="https://www.youtube.com/channel/UC9TY1id7njLGR1oetEcaWTw" target="_blank" class="color_violet">YouTube</a></li>
                </ul>
            </div>

            <!--troisième colonne-->
            <div class="col-md-3 center">
                <h6 class="title  border-title-footer">Informations</h6>
                <ul>
                    <li class="padding-footer-link2"> <a href="mailto:kevin.ciron.co@gmail.com" class="color_violet">Nous contacter</a></li>

                </ul>
            </div>
            <!--quatrième colonne-->
            <div class="col-md-3 center">
              <h6 class="title border-title-footer">Développé par kwiz</h6>
              <a href="mailto:kevin.ciron.co@gmail.com" >
                  <p class="color_violet padding-footer-link">Me contacter</p>
              </a>
            </div>

        </div>
    </div>
    <!--/ Links-->
    <div class="copyright col-xs-12">
      <p>© 2017 Illuzion theme </p>
    </div>

</footer>

<a href="#" title="Haut de page" class="scrollup"><i class="fa fa-arrow-up this-fa"></i></a>
<script type="text/javascript">
$('img.lazy').lazyload({
    effect: 'fadeIn',
});

$('.lazy').lazyload({
    effect: 'fadeIn',
});
</script>


<script>
    // Ouverture du menu hamburger
    jQuery(document).ready(function() {
        jQuery('.toggle-nav').click(function(e) {
            jQuery(this).toggleClass('active');
            jQuery('.menu ul').toggleClass('active');

            e.preventDefault();
        });
    });
</script>

<script>
    jQuery(document).ready(function() {
        $('button').click(function() {
            $(this).toggleClass('expanded').siblings('div').slideToggle();
        });
    });
</script>


<script>
ScrollToTop=function() {
  var s = $(window).scrollTop();
  if (s > 20) {
    $('.scrollup').fadeIn();
  } else {
    $('.scrollup').fadeOut();
  }
  $('.scrollup').click(function () {
      $('html, body').animate({ scrollTop: 0 }, 500);
      return false;
  });
}
StopAnimation=function() {
  $('html, body').bind('scroll mousedown DOMMouseScroll mousewheel keyup', function(){
    $('html, body').stop();
  });
}
$(window).scroll(function() {
  ScrollToTop();
  StopAnimation();
});
</script>

<script type="text/javascript">
    (function($) {

        var allPanels = $('.accordion > dd').hide();

        $('.accordion > dt > a').click(function() {
            allPanels.slideUp();
            $(this).parent().next().slideDown();
            return false;
        });

    })(jQuery);
</script>

<script>//scroll pour la navigation
	$(document).ready(function() {
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
	});
</script>


      </body>
    </html>
