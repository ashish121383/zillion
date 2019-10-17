<article class="blog">
      <div class="container">
        <div class="blog-inner">
          <div class="small-heading">
            <h6>Featured insights</h6>
          </div>
          <?php 
          global $post,$firstPosts;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'order' => 'DESC'

            );
            $query = new WP_Query($args);   
            if($query->have_posts()):
            ?>
                <div class="row">
                    <?php 
                        while($query->have_posts()):$query->the_post();
                         $firstPosts[] = $post->ID;
                        $featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
                        $insight_category_list = get_the_category();
                        $thumbnail_id    = get_post_thumbnail_id($post->ID);                    
                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                     ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-image">
                            <?php if(has_post_thumbnail()){ ?>
                            <img src="<?php echo $featured_image_url[0]; ?>" alt="<?php echo empty($alt) ? get_the_title() : $alt; ?>">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="cybersecurity">
                            <a class="sub"  href=" <?php echo get_category_link( $insight_category_list[0]->term_id ); ?>"><?php echo $insight_category_list[0]->name; ?></a>
                            <h3>
                            <a class="text-heading3" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="exparagraph"><?php the_content(); ?></p>
                        </div>
                    </div>
                    <?php endwhile; 

                    ?>
                </div>
             <?php endif; 
                wp_reset_query();
                $custom_exclude_post = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    array('post__not_in' => $firstPosts)
                );
                $custom_query = new WP_Query( $custom_exclude_post );   
                if($custom_query ->have_posts()):
             ?>
                <div class="row mt-5">
                    <?php 
                    $i = 1;
                    while($custom_query ->have_posts()):$custom_query ->the_post(); 
                    $firstPosts[] = array($post->ID); 
                    $custom_insight_category_list = get_the_category();
                    $custom_featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
                    $thumbnail_id    = get_post_thumbnail_id($post->ID);                    
                    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                    if($i>1){
                    ?>                   
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-info">
                        <?php if(has_post_thumbnail()){ ?>
                            <div class="blog-image">
                                <img src="<?php echo $custom_featured_image_url[0]; ?>" alt="<?php echo empty($alt) ? get_the_title() : $alt; ?>">
                            </div>
                            <?php } ?>
                            <div class="blog-text">
                                <a class="sub"  href=" <?php echo get_category_link( $custom_insight_category_list[0]->term_id ); ?>"><?php echo $custom_insight_category_list[0]->name; ?></a>
                                
                                <h5 class="text-heading5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            </div>
                         </div>
                    </div>
                <?php } $i++; endwhile; ?>
                </div>
                <?php endif;
                    wp_reset_query();

                if(is_page('insights')){ 
                    // More insights 
                    $more_insights_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'post__not_in' => $firstPosts,
                        'order' => 'DESC'
                    );
                    $more_insights = new WP_Query($more_insights_args);
                    if($more_insights->have_posts()):
        
                 ?>
        <div class="row">
          <div class="col-lg-12">
            <div class="small-heading">
              <h6>More INSIGHTS</h6>
            </div>
          </div>
        </div>
            <ul class="row">
             <?php while($more_insights->have_posts()):$more_insights->the_post();
                 $more_insight_category_list = get_the_category();
                 $more_featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
                 $more_thumbnail_id    = get_post_thumbnail_id($post->ID);                    
                 $more_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
             ?>           
            <li class="col-lg-3 col-md-6">
                <div class="blog-info">
                <div class="blog-image">
                    <img src="<?php echo $more_featured_image_url[0] ; ?>" alt="<?php echo $more_alt; ?>">
                </div>
                <div class="blog-text">
                <a class="sub"  href=" <?php echo get_category_link( $custom_insight_category_list[0]->term_id ); ?>"><?php echo $custom_insight_category_list[0]->name; ?></a>
                <h5 class="text-heading5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                </div>
                </div>
            </li>
            <?php endwhile; 
                    
            ?>           
            </ul>                                        
                    <?php endif; wp_reset_query(); } ?>           
        </div>
      </article>