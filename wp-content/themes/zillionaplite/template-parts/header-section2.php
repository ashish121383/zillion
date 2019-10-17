<header class="header-main">
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php the_field('header_logo','option');?>" alt="Zillion">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php 
              wp_nav_menu(
                 array(
                  'theme_location' => 'header-menu',
                  'menu'  => ' ',
                  'menu_class' => 'navbar-nav justify-content-center mx-auto nav-zillion',
                  'menu_id' => 'custom-header-menu',
                  'container' => '',
                  'container_class' => '',
                  'walker'          => new Description_Walker
                 ) 
              );
          ?>
          <div class="header-right-wrap mt-50">
             <?php  get_template_part('template-parts/content','search'); ?>
            </div>
          </div>
        </div>
      </nav>
    </header>