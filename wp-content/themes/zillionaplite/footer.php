<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zillionAplite
 */

?>
	<footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="footer-logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo home_url('/wp-content/uploads/2019/10/footer-logo.png'); ?>" alt="Zillion">
				</a>
              </div>

			  <?php 
			 	wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'menu' => '',
						'menu_class' => 'footer-menu',
						'menu_id' => 'custom-footer',
						'container' => '',
						'container_class' => '',
						'container_id' => ''
					)
				 ); 
			  ?>
            </div>
            <div class="col-lg-4">
              <div class="footer-left">
                <div class="newslater">
                  <span>SUBSCRIBE TO OUR LATEST INSIGHTS</span>
                  <div>
                    <input type="text" name="search" placeholder="Email Address">
                    <a><img src="img/left-arrow.svg"></a>
                  </div>
                </div>
                <div class="social">
                  <ul>
                    <li><a href="#"><img src="img/facebook-logo.svg" alt="facebook"></a></li>
                    <li><a href="#"><img src="img/linkedin.svg" alt="facebook"></a></li>
                    <li><a href="#"><img src="img/instagram.svg" alt="facebook"></a></li></ul>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row copyright">
            <div class="col-lg-7"> 
			
			  <?php echo preg_replace( '/<div class="textwidget">(.*?)<\/div>/' , '$1' , get_dynamic_sidebar('copywrite-1') );
 			 ?>
            </div>
            <div class="col-lg-5">			
              <div class="copy-right">
                <span>© <?php echo date("Y"); ?>, Zillion Consulting Group | All Rights Reserved.</span>
              </div>
            </div>
          </div>
        </div> 
      </footer>
<?php wp_footer(); ?>
</body>
</html>
