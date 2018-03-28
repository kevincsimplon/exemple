<?php
/*
Template Name: forum
*/
?>
<?php include 'header.php' ?>


<div class="container-fluid background_forum">

<div id="container" class="container forum_cadre">

    <div id="content" class="pageContent">
  <div class="col-xs-12 right">
<?php


//fonction a remplacer dans forum.php à chaque maj d'asgarosforum
    // function showLoginMessage() {
    //     if (!is_user_logged_in()) {
    //         $loginMessage = '<div class="info">'.__('Vous devez vous identifier pour créer des messages et des sujets sur d\'autres catégories.', 'asgaros-forum').'&nbsp;<a href="'.esc_url(wp_login_url($this->getLink('current'))).'">'.'</a><a href="'.wp_registration_url().'">'.__('Register', 'asgaros-forum').'</a></div>';
    //         $loginMessage = apply_filters('asgarosforum_filter_login_message', $loginMessage);
    //         echo $loginMessage;
    //     }
    // }
?>
  </div>
    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>


    </div><!-- #content -->
</div><!-- #container -->
</div>
<style media="screen">
#af-wrapper .post-message p {
  margin: 0 0 20px;
  padding: 0px;
  color: #2d2d2d;
  font-size: 13px;
  font-weight: 300;
}
</style>
<?php include 'footer.php' ?>
