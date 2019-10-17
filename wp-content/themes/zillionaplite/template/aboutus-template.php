<?php 
/*
    Template Name: About Us
*/
get_header();

if(have_posts()):
    while(have_posts()):the_post();
?>
<section class="aboutSection space">
      <div class="container">
        <div class="mx-auto w-7 wrap-sec">
          <?php the_content(); ?>
        </div>
      </div>
</section>
<?php 
  $backgroung_image = get_field('section_banner_image');
?>
<section class="aboutSection1" style="background-image: url(<?php echo $backgroung_image['url'];  ?>);">
      <div class="container">
        <ul class="row">
         <?php if(have_rows('customer_achievement_repeater')):
                    while(have_rows('customer_achievement_repeater')):the_row();
            ?>
          <li class="col-lg-4 col-md-4">
            <h6 class="as-1"><?php the_sub_field('achievement_counter'); ?></h6>
            <p><?php the_sub_field('achievement_title'); ?></p>
          </li>
         <?php endwhile; endif; ?>
        </ul>
      </div>
    </section>

    <section class="aboutinfo space">
      <div class="container">
        <ul class="aboutInner">
          <?php 
            if(have_rows('about_us_repeater')):
              while(have_rows('about_us_repeater')):the_row();

                $about_section_image = get_sub_field('section_image');
                $about_section_title = get_sub_field('section_heading');
                $about_section_content = get_sub_field('section_description');
          ?>
          <li>
            <div class="about-L lr">
              <img class="img-fluid" src="<?php echo $about_section_image['url']; ?>" alt="<?php echo $about_section_image['alt']; ?>">
            </div>
            <div class="about-R rl">
              <h3 class="text-heading3"><?php echo $about_section_title;?></h3>
              <p class="paragraph1"><?php echo $about_section_content?></p>
            </div>
          </li>
          <?php 
            endwhile;
          endif;
          ?>
        </ul>
      </div>
    </section>
    <?php  
    // More About zillion
    get_template_part( 'template-parts/explore-more-about');
    // Ready to talk section
    get_template_part( 'template-parts/content-ready-to-talk');
    ?>
<?php endwhile; endif; 
get_footer(); ?>