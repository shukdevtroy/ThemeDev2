<?php 
  
  get_header();
?>
  <section class="all-posts-banner">
    <div class="container">
      <div class="banner-img">
          <img src="<?php echo bloginfo('template_directory').'/assets/img/banners.jpg'?>" class="img-fluid">
      </div>
    </div>
  </section>

  <section class="all-posts">
    <div class="container">
      <div class="row">
        
        <?php 
          if(have_posts()):
            while(have_posts()):
              the_post();
            ?>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-img">
                      <?php 
                        if(has_post_thumbnail()):
                          the_post_thumbnail();
                        endif;
                      ?>
                    </div>
                    <div class="card-content">
                        <span class="card-tag"><?php echo the_category();?></span>
                        <h2 class="card-title"><a href="<?php echo the_permalink();?>"><?php echo the_title();?></a></h2>
                        <p class="card-desc"><?php echo the_excerpt();?></p>
                        <div class="card-metadata">


                        </div>
                    </div>
                </div>
              </div>

            <?php
            endwhile;

          endif;

        ?>
      </div>
    </div>
  </section>
<?php
  get_footer();

?>
    