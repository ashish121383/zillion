<?php
/*
Template Name: Our Insights
*/
get_header(); 
if(have_posts()):
    while(have_posts()):the_post();
?>
<section class="insights insights-space">
      <div class="container">
            <div class="zillioContent">
              <h2 class="heading2"><?php the_title();  ?></h2>
            </div>
      </div>
    </section>
    <?php get_template_part( 'template-parts/home', 'blog' ); ?>
<?php endwhile; endif; get_footer(); ?>