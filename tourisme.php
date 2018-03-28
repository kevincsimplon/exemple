<?php
// Template Name: Tourisme
?>
<?php include 'header.php';?>

<div class="col-xs-12 background-tourisme">


<div class="container background-body">

<!--Section: Pricing v.1-->
<section class="section">

<div class="background-title-tourisme">

    <!--Section heading-->
    <h1 class="section-heading title-no-shadow mauve-text">Tourisme</h1>
    <!--Section description-->
    <p class="section-description">Illuzion  ouvre son service de tourisme aux joueurs désirant s’offrir certaines des offres citées ci-dessous.</p>
  </div>




        <!--Second column-->
        <div class="col-lg-4 col-md-4 mb-r first_tourisme">

<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('pl_hm') ) ?>
<!-- Save-->
            <!-- <div class="card pricing-card">
                <div class="price header indigo pl2">
                    <h2>500k pièces d’or</h2>
                    <div class="version">
                        <h5>Tomb of Sargeras NM</h5>
                    </div>
                </div>
                <div class="card-block striped">
                    <ul>
                        <li>
                            <p><i class="fa fa-check"></i> Pl rapide en 1h</p>
                        </li>
                        <li>
                            <p><i class="fa fa-check"></i> Explications de strats sur demande</p>
                        </li>
                        <li>
                            <p><i class="fa fa-thumbs-up"></i> Équipez vous rapidement</p>
                        </li>
                        <li>
                            <p><i class="fa fa-thumbs-up"></i>Haut fait: La chute du Trompeur</p>
                        </li>
                    </ul>
                </div>
            </div>-->
        </div>



        <div class="col-lg-4 col-md-4 mb-r ">
          <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('pl_mm') ) ?>

            <!-- <div class="card pricing-card">
                <div class="price header indigo pl2">
                    <h2>800k pièces d’or</h2>
                    <div class="version">
                        <h5>Tomb of Sargeras HM</h5>
                    </div>
                </div>
                <div class="card-block striped">
                    <ul>
                        <li>
                            <p><i class="fa fa-check"></i> Pl rapide en 2h</p>
                        </li>
                        <li>
                            <p><i class="fa fa-check"></i> Explications de strats sur demande</p>
                        </li>
                        <li>
                            <p><i class="fa fa-thumbs-up"></i> Équipez vous rapidement</p>
                        </li>
                        <li>
                            <p><i class="fa fa-thumbs-up"></i>Haut fait: La chute du Trompeur</p>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>


        <!--Third column-->
        <div class="col-lg-4 col-md-4 mb-r">
          <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('pl_m+') ) ?>

            <!-- <div class="card pricing-card">
                <div class="price header deep-purple pl3">
                    <h2>200k pièces d’or</h2>
                    <div class="version">
                        <h5>Mythique +15</h5>
                    </div>
                </div>
                <div class="card-block striped">
                    <ul>
                      <li>
                          <p><i class="fa fa-check"></i> Pl rapide en 20 minutes</p>
                      </li>
                      <li>
                          <p><i class="fa fa-check"></i> Coffre de la semaine équipement ilvl 930+</p>
                      </li>
                        <li>
                            <p><i class="fa fa-info"></i> Zahya#2311 </p>
                        </li>
                        <li>
                            <p><i class="fa fa-info"></i> Xran#2762</p>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>


</section>
<!--/Section: Pricing v.1-->

</div>
</div>

<?php include 'footer.php';?>
