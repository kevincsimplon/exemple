<?php include 'header.php';?>



<article class="col-xs-12">
  <div class="container">


    <?php
    if (have_posts()) : while (have_posts()) : the_post();
    ?>
<section class="col-md-12 col-xs-12">






<div class="cadre-date-article">
  <div class="centrage_date">

<em><h6 class="date_article"> posté le  <?php the_time('l d F ') ; ?></h6></em>

</div>
</div>




<?php  $title = get_the_title(); $keys= explode(" ",$s); $title = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">\0</strong>', $title); ?>



<h2  class="center sub-title-article-single"><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h2>
<center><div class="thecontent">
  <?php the_excerpt(); ?>
   </div></center>

  <div class="post-comments">
  <?php comments_template(); ?>
  </div>
</section>


<?php    $i ++; endwhile; endif?>
</article>
    <?php include 'footer.php';?>
