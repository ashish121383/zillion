<header class="mainheader header-main">
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
		  <?php 
		 	$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		  ?>
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt="Zillion"></a>
        <button id="nav-icon1" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
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
            <ul>
              <li>
                <a href="#"><span>Explore More</span> <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-fw"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" class=""></path></svg></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
	</header>