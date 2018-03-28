<?php include 'header.php';?>

<!-- <div id="content" class="site-content slider full-bg-img"> -->
<?php
    //  if (is_home() || is_front_page()) {
      //    echo do_shortcode("[metaslider id=26]"); //
    //  }
  ?>
<!-- </div>  -->
<div class="header_home col-xs-12">
</div>


<div class="liquid_bg">
<div class="container_index" id="main-layout">
<section class="cadre_main style-stream bg_blue_light item">

<section class="section_float">
  <div class="col-xs-12 cadre_title_block">
    <h2>News</h2>
    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('news_text') ) ?>
    <!-- Save widget-->
    <!-- <p class="color_white">Bienvenue sur le site de la guilde Illuzion, raids, nouveaux patchs, recap de kill ou interviews,
les infos news de la guilde c’est ici</p> -->
  </div>
  <div class="row text-xs-left">
<div class="col-lg-6 col-md-6 col-xs-12">
<!--Maximum d'articles sur la homepage-->
<?php
global $query_string;
query_posts("posts_per_page=4&paged=$paged");
if (have_posts()) : while (have_posts()) : the_post();
?>

<?php if( ($wp_query->current_post + 3) < ($wp_query->post_count) ) {
// Si c'est le dernier article alors on l'affiche de cette manière.
?>

<article class="single-news solo_news  last-article" id="post-<?php the_ID(); ?>" style="border-bottom: none;">
<!--Image-->
<section class="view overlay hm-white-slight solo_img">
  <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
<a href="<?php the_permalink(); ?>">
<div class="mask "></div>
</a>
</section>
            <!--Excerpt-->
            <section>
            <div class="news-data col-md-pull-6">
                <p class="color_white"><strong><i class="fa fa-clock-o"></i>  <?php the_time(' F, Y');?></strong></p>
            </div>
            <h3>
              <a href="<?php the_permalink(); ?>" class="color_white"><?php the_title(); ?></a>
            </h3>
            <span class="comment_number_article"> <span class="fa fa-comments"></span> <?php comments_number('0', '1', '%'); ?></span>
            <div class="color_debug">
            <p class="color_violet"> <?php the_excerpt(); ?></p>
          </div>
            <div class="cadre-btn">
         <a href="<?php the_permalink(); ?>" class="color_white"> Lire l'article</a>          </div>
  </section>
        </article>
    </div>
  <?php
  }
  else{
  ?>
  <!--Les autres articles s'affichent avec ce style-->
  <div class="col-lg-6 col-md-6 col-xs-12 ">

      <!--Small news-->
      <div class="single-news multi_news">
          <div class="row">
              <div class="col-md-5 col-sm-6 col-xs-12">
                  <!--Image-->
                  <div class="view overlay hm-white-slight img-smal">
                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                         <a href="<?php the_permalink(); ?>">
                          <div class="mask"></div>
                      </a>
                  </div>
              </div>
              <!--Excerpt-->
              <div class="col-md-7 col-sm-6 col-xs-12">
                  <p class="color_violet"><strong> <?php the_time(' F, Y');?></strong></p>
                   <a href="<?php the_permalink(); ?>" class="color_white"> <?php the_title(); ?>

      </a>
              </div>
          </div>
      </div>
      <!--/Small news-->
    </div>
  <?php  } ?>
  <div>
    <?php    $i ++; endwhile; endif?>
      </div>
      <div class="col-lg-6 col-md-6">
      </div>
  </div><!--/First row-->

</section>

<section class="section_float">
<div class="col-xs-12 cadre_title_block">
  <h2> rejoindre la guilde</h2>
  <p class="color_white">Ok on est genial mais tu y gagnes quoi à jouer avec nous ? </p>
</div>
<!--First row-->
  <div class="row ">
    <div class="col-md-5 col-sm-6 col-xs-12 join_gu_img">
        <img data-original= "<?php bloginfo('template_url'); ?>/img/wow_pve_hl_guilde_fr_illuzion_perso3.png" alt="" class="lazy">
    </div>
    <div class="col-md-7 col-sm-6 col-xs-12">
        <div class="row">
            <div class="col-xs-1">
                <i class="fa fa-bank color_bluefonce"></i>
            </div>
            <div class="col-xs-10">
                <h4 class="color_white no_marg">Experience</h4>
                <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Experience') ) ?>
                <!-- Save widget-->
                <!-- <p class="color_gray">La guilde Illuzion compte des membres qui pour la plupart jouent ensembles depuis plusieurs années
et propose donc une expèrience forte et mature dans le monde du PVE HL.</p> -->
            </div>
        </div>
        <div style="height:50px"></div>
        <div class="row">
            <div class="col-xs-1">
                <i class="fa  fa-rocket color_bluefonce"></i>
            </div>
            <div class="col-xs-10">
                <h4 class="color_white no_marg">Challenge</h4>
                <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Challenge') ) ?>
                <!-- Save widget-->
                <!-- <p class="color_gray">Une partie de la guilde Illuzion a brillé par le passé en terminant 4e FR sur Emerald Nightmare.
Cette performance n'est pas qu'éphémère, elle est toujours présente dans la tête de ses joueurs et ne demande qu'à ressurgir.</p> -->
            </div>
        </div>
        <div style="height:50px"></div>
        <div class="row">
            <div class="col-xs-1">
                <i class="fa fa-hand-peace-o color_bluefonce"></i>
            </div>
            <div class="col-xs-10 pad_10_match">
                <h4 class="color_white no_marg">Ambiance</h4>
                <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Ambiance') ) ?>
                <!-- Save widget-->
                <!-- <p class="color_gray">L'un des points forts de la guilde, c'est son ambiance saine et positive.</p> -->
            </div>
        </div>
    </div>
</div>
</section>


<section class="section_float last_section">
<div class="col-xs-12 cadre_title_block ">
  <h2> Notre joueur cible</h2>
  <p class="color_white">Es tu le joueur que nous recherchons ?  </p>
</div>
<!--First row-->
  <div class="row ">
    <div class="col-md-7 col-sm-7 col-xs-12">
        <div class="row">
            <div class="col-xs-1">
              <i class="fa  fa-line-chart color_bluefonce"></i>
            </div>
            <div class="col-xs-10">
                <h4 class="color_white no_marg">Performance</h4>
                <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Performance') ) ?>
                <!-- Save widget-->
                <!-- <p class="color_gray">Illuzion table majoritairement sur la performance individuelle et la peformance en équipe.
                   Notre guilde attache une importance à la maitrise parfaite de votre personnage pour rester cohérent par rapport à l'avancée PVE de la guilde.</p> -->
            </div>
        </div>
        <div style="height:50px"></div>
        <div class="row">
            <div class="col-xs-1">
              <i class="fa  fa-trophy color_bluefonce "></i>
            </div>
            <div class="col-xs-10">
                <h4 class="color_white no_marg">Esprit de guilde</h4>
                <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Esprit') ) ?>
                <!-- Save widget-->
                <!-- <p class="color_gray">C'est un des points les plus importants au sein de la guilde. L'entraide et l'esprit d'équipe sont primordiaux.
                   L'interêt de la guilde passe avant l'interêt personnel. Au final, tout le monde y trouve son compte.</p> -->
            </div>
        </div>
        <div style="height:50px"></div>
        <div class="row">
            <div class="col-xs-1">
                <i class="fa fa-hand-peace-o color_bluefonce"></i>
            </div>
            <div class="col-xs-10 pad_10_match">
                <h4 class="color_white no_marg">Implication</h4>
                <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Implication') ) ?>
                <!-- Save widget-->
                <!-- <p class="color_gray">La guilde Illuzion recherche des joueurs impliqué et autonome, chacun a la responsabilité de sa propre performance. Nous sommes présent pour faire du PVE et on attend la même chose de votre part.</p> -->
            </div>
        </div>
    </div>
    <div class="col-md-5 col-sm-5 col-xs-12 join_gu_img">
        <img data-original= "<?php bloginfo('template_url'); ?>/img/wow_pve_hl_guilde_fr_illuzion_perso4.png" alt="" class="lazy">
    </div>
</div>
</section>

</section>




<section class="sidebar bg_blue_light item">


<div class="col-xs-12">
<h3>Faites vivre le site</h3>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6X8AFTE6MSWBW">
<input type="image" style="    width: 60%;margin: auto;display: block;"src="http://illuzion.fr/wp-content/uploads/2017/12/don.jpg" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
<div class="col-xs-12 progress">
    <div class="col-xs-12 rank_cadre">
      <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('rank') ) ?>
    </div>
  </div>
  <div class="col-xs-12 progress">
    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('progress') ) ?>
  </div>
<div id="widget_histoire" class="col-xs-12 progress">
  <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('recrutement') ) ?>
</div>

<div class="site-content slider no_pad col-xs-12 progress" >
  <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('video') ) ?>
  <div id="ancre3"></div>
</div>
<div class="site-content slider no_pad col-xs-12 progress" >
  <?php
 if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('roster') ) ?>
  <div id="ancre2"></div>
</div>


<div class="site-content slider no_pad col-xs-12 progress" >
  <?php
 if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('twitter') ) ?>

 <div class="custom-follow-button">
  <a href="https://twitter.com/intent/user?screen_name=illuzion_guilde" target="_blank" alt="Follow alistairtweedie">
    <i class="btn-icon"></i>
    <span class="btn-text">Follow @illuzion_guilde</span>
  </a>
</div>

  <div id="ancre2"></div>
</div>
</section>

</div>
</div>


<style media="screen">
.Demon td{
color: #A330C9!important;
}
.comment_number_article{
color: white;
    position: absolute;
        right: 20px;
    top: 0;
    font-size: 18px;
}
.fa-comments{
    color: #F44336;
}
.home .cadre-btn a:hover{
text-decoration:none;
color: #a0a5ff;
transition: 0.75s;}
a:hover{ text-decoration:none;}
#wowprogress .down {
    color: #4CAF50 !important;
    font-size: 13.5px;
}
</style>




    <?php include 'footer.php';?>
