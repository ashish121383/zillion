<?php if(!is_front_page() || is_home())
    { 
        $banner_image = get_field('banner_image'); 
        $banner_title = get_field('banner_title'); 
        $banner_content = get_field('banner_content');
        
    if($banner_image && $banner_title && $banner_content)
    { 
        ?>
        <section class="innerbanner" style="background-image: url(<?php echo esc_url($banner_image['url']); ?>);">
            <div class="container">
                <div>
                    <h2 class="text-heading2"><?php echo $banner_title;  ?></b></h2>
                    <span class="text1"><?php echo $banner_content; ?></span>
                </div>
            </div>
        </section>
    <?php
        } 
    }   
    ?>
