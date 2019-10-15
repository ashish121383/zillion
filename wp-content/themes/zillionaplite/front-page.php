<?php 
/*
  Creating Custom Front Page Template
*/
get_header();
?>
 <section class="bannerSection">
      <div class="flexslider carousel">
        <ul class="slides">
          <li style="background-image: url(./img/slider-poster.png);">
            <div class="container">
              <div class="innercontent">
                <h1><i>Leaders</i> with <b><i>industry</i> experience.</b></h1>
                <p>Advising established players, emerging start-ups and everything in between.</p>
                <div class="arrow">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(./img/slider-poster.png);">
            <div class="container">
              <div class="innercontent">
                <h1><i>Leaders</i> with <b><i>industry</i> experience.</b></h1>
                <p>Advising established players, emerging start-ups and everything in between.</p>
                <div class="arrow">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(./img/slider-poster.png);">
            <div class="container">
              <div class="innercontent">
                <h1><i>Leaders</i> with <b><i>industry</i> experience.</b></h1>
                <p>Advising established players, emerging start-ups and everything in between.</p>
                <div class="arrow">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </li>
            <!-- items mirrored twice, total of 12 -->
          </ul>
        </div>
    </section>
   
        <section class="second-section space zellion-border">
            <?php 
                if(have_posts()):
                    while(have_posts()):the_post();
                ?>
                    <div class="container">
                        <div>
                            <h3 class="text-heading3">We transform brands by delivering coherent customer experiences, combining <b>Strategy, Creativity & Technology.</b></h3>
                        </div>
                        <div class="text-link">
                        <a href="about-us.html" target="_blank" class="btn-first">Learn About Us</a>
                        <a href="join.html" target="_blank" class="btn-first">Join Our Team</a>
                        </div>
                    </div>
                <?php endwhile; 
                    endif;?>
        </section>
           
    <article class="blog">
      <div class="container">
        <div class="blog-inner">
          <div class="small-heading">
            <h6>featured insights</h6>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6">
               <div class="blog-image">
                 <img src="img/wisdom.png" alt="Cybersecurity">
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="cybersecurity">
                 <a class="sub" href="insights-detail.html">Article</a>
                 <h3>
                  <a class="text-heading3" href="insights-detail.html">Cybersecurity: The Key to the digital enterprise</a>
                 </h3>
                  <p class="exparagraph">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups is the lorem ipsum.</p>
               </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-3 col-md-6">
              <div class="blog-info">
                  <div class="blog-image">
                    <img src="img/how-state-and-local-standard.png" alt="Enabling a secure">
                  </div>
                   <div class="blog-text">
                      <a class="sub" href="insights-detail.html">Article</a>
                      <h5 class="text-heading5"><a href="insights-detail.html">Enabling a secure ecosystem of connected the devices</a></h5>
                   </div>
              </div>
            </div>
              <div class="col-lg-3 col-md-6">
              <div class="blog-info">
                  <div class="blog-image">
                    <img src="img/speak-softly-make-tough-decisions.png" alt="Enabling a secure">
                  </div>
                   <div class="blog-text">
                      <a class="sub" href="insights-detail.html">Film</a>
                      <h5 class="text-heading5"><a href="insights-detail.html">European banking: An inescapable call for action</a></h5>
                   </div>
              </div>
            </div>
              <div class="col-lg-3 col-md-6">
              <div class="blog-info">
                  <div class="blog-image">
                    <img src="img/growing-opportunities.png" alt="Pricing">
                  </div>
                  <div class="blog-text">
                    <a class="sub" href="insights-detail.html">News</a>
                     <h5 class="text-heading5"><a href="insights-detail.html">Pricing: Distributors’ most powerful value- creation lever</a></h5>
                  </div>
              </div>
            </div>
              <div class="col-lg-3 col-md-6">
              <div class="blog-info">
                  <div class="blog-image">
                    <img src="img/hero-pricing-distributors.png" alt="Enabling a secure">
                  </div>
                  <div class="blog-text">
                    <a class="sub" href="insights-detail.html">Article</a>
                    <h5 class="text-heading5"><a href="insights-detail.html">Enabling a secure ecosystem of connected the devices</a></h5>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </article>

<?php 
get_footer();
?>

