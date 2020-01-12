<?php

get_header();
?>

    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">


        <div class="container clearfix">

          <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">
          <?php if(have_posts()) :?>
                    <?php while(have_posts()): the_post();
                     
                    ?>

          <div class="single-post nobottommargin">
              

             

            <!-- Single Post
                        ============================================= -->
            <div class="entry clearfix">

            <!-- Entry Title
                            ============================================= -->
            <div class="entry-title">
                <h2><?php the_title();?></h2>
            </div><!-- .entry-title end -->

           

            <!-- Entry Image============================================= -->
            
           
            <!-- Entry Content
                            ============================================= -->
            <div class="entry-content notopmargin">
                <a href="<?php echo $post->guid;?>">Direct Download </a>
                <?php the_content();?>

               
               
                <!-- Post Single - Content End -->

               
                <div class="clear"></div>

            </div>
            </div><!-- .entry end -->

           
            <div class="line"></div>


            <?php 
            if(comments_open() || get_comments_number()):
            comments_template();
            endif;
            ?>
            

            </div>

          </div><!-- .postcontent end -->
          <?php endwhile ;endif;?>
          <?php get_sidebar();?>
          

        </div>

      </div>

    </section><!-- #content end -->

   <?php 

   
   get_footer();
   ?>