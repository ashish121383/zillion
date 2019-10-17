<section class="explore">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="small-heading">
              <h6><?php the_field('zillion_heading'); ?></h6>
            </div>
          </div>
        </div>
        <div class="row">
          <?php if(have_rows('explore_more_repeater')):
                    while(have_rows('explore_more_repeater')):the_row();
                $explore_more_heading = get_sub_field('explore_more_heading');    
                $explore_more_content = get_sub_field('explore_more_content');        
                $explore_more_image = get_sub_field('explore_more_image'); 
                $explore_more_page_link = get_sub_field('explore_more_page_link');           
            ?>
          <div class="col-lg-6 col-md-6 explore-detail">
            <div class="explore-image">
               <img src="<?php echo $explore_more_image['url']; ?>" alt="<?php echo $explore_more_image['alt']; ?>">
            </div>
            <div class="explore-content">
              <h3 class="text-heading3"><?php echo $explore_more_heading; ?></h3>
               <a class="paragraph1" href="<?php echo $explore_more_page_link; ?>"><?php echo $explore_more_content; ?> <img src="<?php echo get_template_directory_uri()?>/img/left-arrow-a.svg" alt="arrow"></a>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </section>