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
                <img src="img/footer-logo.png" alt="Zillion">
              </div>
              <ul class="footer-menu">
                <li><a href="#">What we do</a></li>
                <li><a href="#">Who are we</a></li>
                <li><a href="#">Insights</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Join us</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
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
            <div class="col-lg-7"> <div class="copyright-section">
              <ul><li><a>Privacy Policy</a></li>
                <li><a>Terms</a></li>
                <li><a>Cookie policy</a></li></ul>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="copy-right">
                <span>© 2019, Zillion Consulting Group | All Rights Reserved.</span>
              </div>
            </div>
          </div>
        </div> 
      </footer>
<?php wp_footer(); ?>

</body>
</html>
