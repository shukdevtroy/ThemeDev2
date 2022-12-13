<?php 
  
  get_header();
?>
  <!-- <section class="all-posts-banner">
    <div class="container">
      <div class="banner-img">
          <img src="<?php echo bloginfo('template_directory').'/assets/img/banners.jpg'?>" class="img-fluid">
      </div>
    </div>
  </section> -->

  <section class="single-post">
    <div class="container">
      <div class="row">
        <!-- post details -->
        <div class="col-lg-8">
          <div class="bacon-blog-post bacon-shadow">
            <?php 
              if(has_post_thumbnail()):
                the_post_thumbnail('medium_large', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);
              endif;
            ?>
            
            <div class="bacon-blog-post-inner">
              <h2 class="card-title"><?php echo the_title();?></h2>

              <div class="additional">
                <img src="<?php echo bloginfo('template_directory').'/assets/img/author.jpeg'?>">
                <span class="post-author">Julia Andrason</span>
                <span class="post-date"><?php echo get_the_date();?></span>
                <span class="post-comment"><?php echo comments_number();?></span>
              </div>
                <p><?php echo the_content();?></p>
            </div>
          </div>
          <div class="cs-tags">
              <div class="tags">
                  <?php echo the_tags();?>
                  
              </div>
          </div>
          <div class="p-comments">
            <?php 
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            ?>
          </div>
        </div>
        <!-- sidebar -->
        <div class="col-lg-4">
          <?php get_sidebar(); ?>
        </div>
      <!--  -->
      </div>
    </div>
  </section>
<?php
  get_footer();

?>
    