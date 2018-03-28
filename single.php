<?php include 'header.php';?>


<section class="background_page">

  <div class="container">
<article class="col-xs-12 article_single background-font-body  background_container_page">
  <div class="cadre_title_block ">

<section class="col-md-12 col-xs-12">

<?php
      if (have_posts()) : while (have_posts()) : the_post();
  ?>

  <h2  class=" sub-title-article-single"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="thecontent">
   <?php the_content(); ?>
 </div>

<div class="post-comments">
<?php comments_template(); ?>
</div>
</section>
</div>
</article>
</div>
</section>

<style>
.comment-reply-title, .thecontent p {
    color: #fff;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 400;
    margin-bottom: 30px;
}
.comment p, .comment span{
color:white}

.comment cite{
    color: wheat;
    font-weight: bold;
}
.comment-reply-link{

color: #9fa4ff;
}
.comment-meta a:first-child{
color:wheat}



.comment-body{

    background: rgba(0, 0, 0, 0.1);
    color: black;
    border: 1px solid black;
    margin-bottom: 20px;
    padding: 10px;
}
.comment p, .comment span {
     color: #0f0f12;
    font-weight: 200;
    font-weight: 400;
}
.comment cite,.comment cite a {
    color: #9398ed;
    font-weight: bold;
}

.comment-meta a:first-child {
    color: #262a31;
}
.comment-meta{
    border-bottom: 0.0625rem dotted #C6C6D0;
}

.comment-reply-link:hover{
text-decoration: none;
color: #9fa4ff;
}
.cadre_title_block p{
margin-bottom: 30px;
color: #ececec;
}
form .comment-form-comment #comment {
    width: 40%!important;
    font-size: 13px;
}
</style>
<?php  endwhile; endif?>
<?php include 'footer.php';?>
