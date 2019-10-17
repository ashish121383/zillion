<?php 
    get_header();

    if(have_posts()):
      while(have_posts()):the_post();
?>

<section class="insights insights-space">
      <div class="container">
            <div class="zillioContent">
              <h2 class="heading2"><?php the_title(); ?></h22>
            </div>
      </div>
</section>
    <section class="contact-page">
      <div class="container">
        <div class="contact contact2">
           <div class="forminner">
           <?php echo do_shortcode('[contact-form-7 id="215" title="Get In Touch"]'); ?>
           </div>
            <div class="R-contact backg-color">
              <div class="address">
                <h3 class="text-heading3">Contact <b>Details</b></h3>
                <hr>
                  <?php the_content(); ?>
              </div>
            </div>
         </div>
      </div>
    </section>
    <section class="explore">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="small-heading">
              <h6><?php the_field('section_heading'); ?></h6>
            </div>
          </div>
        </div>
        <ul class="office">
          <?php if(have_rows('office_location_repeater')):
                  while(have_rows('office_location_repeater')):the_row(); ?>
          <li>
            <div class="office-add">
              <div class="image">
                <img src="<?php the_sub_field('location_image'); ?>" alt="Ballerup  Denmark">
              </div>
              <div class="officeheading">
                <h5><?php the_sub_field('location_heading'); ?></h5>
                <p><?php the_sub_field('location_description'); ?></p>
              </div>
            </div>
          </li>
          <?php endwhile; endif;?>
        </ul>
      </div>
    </section>


<?php 
endwhile; endif;
get_footer(); ?>