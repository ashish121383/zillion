<?php 
   /*
     Creating Custom Front Page Template
   */
    get_header();
   
   // Include Slider section
     get_template_part('template-parts/home','slider');
   ?>
        <section class="second-section space zellion-border">
          <?php 
              if(have_posts()):
                  while(have_posts()):the_post();
              ?>
          <div class="container">
              <div>
                <h3 class="text-heading3"><?php the_title(); ?></h3>
              </div>
              <div class="text-link">
                <?php the_content(); ?>
              </div>
          </div>
          <?php endwhile; 
              endif;?>
        </section>
    <?php get_template_part( 'template-parts/home', 'blog' ); ?>
<?php 
   get_footer();
?>