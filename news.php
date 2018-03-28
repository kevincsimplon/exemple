<?php
// Template Name: News
?>

<?php include 'header.php' ?>




<section class="background_page">

<div class="article_page">

    <div class="container bg_blue_middle last_section">
      <div class="background_article" >
        <div class="col-xs-12 cadre_title_block">
          <h2>News</h2>
          <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('title_page_news') ) ?>
          <!-- <p >Suivez les news et commentez !</p> -->
        </div>

  <div class="list_article">
      <?php
            global $query_string;
            query_posts("posts_per_page=20&paged=$paged");
            if (have_posts()) :
              // query_posts('cat=-13,cat=-14');

             while (have_posts()) : the_post();
        ?>

    <article class="col-md-12 col-sm-12 col-xs-12 center" id="post-<?php the_category_ID(); ?>">
      <div class="col-md-7">

        <a href="<?php the_permalink(); ?>">
            <div class="article_category">
               <p class="category_p">
                   <?php
                  $category = get_the_category();
                  echo $category[0]->cat_name;
                    ?>
              </p>
           </div>
        </a>
        <a href="<?php the_permalink(); ?>">
            <div class="article_thumbnail">
               <?php the_post_thumbnail(); ?>
               <div class="article_title">
               <a href="<?php the_permalink(); ?>">   <h4><?php the_title(); ?></h4> </a>
               </div>
            </div>
        </a>

      </div>
        <div class="col-md-5">

        <div class="article_time">
           <p>Publié le <?php the_time('j F Y');?></p>
        </div>

        <div class="article_excerpt">
           <?php the_excerpt(); ?>
        </div>
      </div>
    </article>
  <?php  endwhile; endif?>

  </div> <!-- /list_article-->
 </div> <!-- /Container-->
</div>

</div> <!-- /article_page-->

</section>
<?php include 'footer.php' ?>
