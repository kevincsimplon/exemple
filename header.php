<!doctype html>
<html  <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <?php echo utf8_encode($variable);?>
  <meta name="viewport" content="width=device-width">
  <meta name="viewport" content="initial-scale=1.0 maximum-scale=1.0" />
  <title>
  <?php // WordPress custom title script
  // is the current page a tag archive page?
  if (function_exists('is_tag') && is_tag()) {
  	// if so, display this custom title
  	echo 'Tag Archive for &quot;'.$tag.'&quot; - ';
  // or, is the page an archive page?
  } elseif (is_archive()) {
  	// if so, display this custom title
  	wp_title(''); echo ' Archive - ';
  // or, is the page a search page?
  } elseif (is_search()) {
  	// if so, display this custom title
  	echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
  // or, is the page a single post or a literal page?
  } elseif (!(is_404()) && (is_single()) || (is_page())) {
  	// if so, display this custom title
  	wp_title(''); echo ' - ';
  // or, is the page an error page?
  } elseif (is_404()) {
  	// yep, you guessed it
  	echo 'Not Found - ';
  }
  // finally, display the blog name for all page types
  bloginfo('name');
  ?>
  </title>

    <meta name="description" content="">
    <meta NAME="keywords" CONTENT="">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.lazyload.js" ></script>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600|Permanent+Marker" rel="stylesheet">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97005334-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

 <header class="col-xs-12 bg_blue">
    <div class="container">
      <nav class="desktop">
          <div class="cadre_logo">
             <a class="" href="<?php bloginfo('url'); ?>/">    <img class="logo" src="<?php bloginfo('template_url'); ?>/img/wow_pve_hl_guilde_fr_illuzion_logo.png" alt="" /> </a>
          </div>
          <div class="menu">
              <?php
              wp_nav_menu(array
              (time_location  => 'nav'
               ));
               ?>
             </div>
               <ul class="rs">
                 <li><a target="_blank"href="https://www.warcraftlogs.com/guilds/200706" target="_blank">Logs</a></li>
                 <li> <a target="_blank"href="https://www.youtube.com/channel/UC8WvdDFmvj74lI5E2mefrCw"><i class="fa fa-youtube-play"></i></a> </li>
                 <li><a target="_blank"class="nav-link" href="http://www.wowprogress.com/guild/eu/hyjal/Illuzion" target="_blank">
                 <p style="font-weight: bold; text-shadow: 1px 1px 1px black;font-size: 17px;padding-left: 3px;padding-right: 3px;">w</p>
                 </a></li>
               </ul>
      </nav>
    </div>
</header>

<div class="mobile">
    <button class="hamburger">Toggle</button>
    <?php
        wp_nav_menu(array
        (time_location  => 'nav'
         ));
        ?>
</div>
