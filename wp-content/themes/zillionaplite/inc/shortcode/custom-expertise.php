<?php 
    add_shortcode( 'expertise-offer', 'custom_expertise_call_back' );
    function custom_expertise_call_back(){ 
?>
<section class="experties-section space">
      <div class="container">
        <h3 class="text-heading3">Expertise & <b>Offerings</b></h3>
        <div class="row">
          <?php
            $args = array(
                'post_type' =>  'services',
                'posts_per_page' => -1 
            );
            $services_query = new WP_Query($args); 
            $i = 1; 
            if(have_posts()):
                while(have_posts()):the_post(); 
                $featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                $thumbnail_id    = get_post_thumbnail_id($post->ID);                    
                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
          ?>

          <div class="col-md-6 col-lg-4 pb-3 pt-3">
           <div class="innerspace">
              <div class="info-card <?php echo ($i == 1) ? 'active' : ''; ?>">
                    <div class="info-card-header">
                      <img src="<?php echo $featured_image_url;  ?>" alt="<?php echo empty($alt) ? get_the_title() : $alt; ?>" draggable="false">
                    </div>
                    <div class="info-card-body">
                      <h5 class="card-title"><?php the_title(); ?></h5>
                      <p><?php the_content; ?></p>
                    </div>
               </div><!-- .info-card END -->
           </div>
          </div>
            <?php $i++; endwhile; 
            endif;
            wp_reset_query(); 
            ?>
        </div>
      </div>
    </section>
    <?php } ?>