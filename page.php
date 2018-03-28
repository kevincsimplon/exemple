  <?php include 'header.php';?>

<div class="background_page">

  <div id="primary" class="content-area page_style roster_page">
    <main id="main" class="site-main page_height" role="main">


    <div class="text-content">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>

</main>

</div>
</div>

  <?php include 'footer.php';?>
