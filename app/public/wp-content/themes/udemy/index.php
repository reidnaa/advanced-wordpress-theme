<?php

get_header();
?>

    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">
        
        <?php if (!is_single() && is_home() && function_exists('wpp_get_mostpopular') && get_theme_mod('rn_add_popular_posts')):
            wpp_get_mostpopular([
              'wpp_start' => '<div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
              <div><div class="container clearfix">
                  <span class="badge badge-danger bnews-title">' .  get_theme_mod('rn_add_popular_posts_title')  . ':</span><div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false"
                    data-pagi="false">
                    <div class="flexslider">
                      <div class="slider-wrap">',
                'wpp_end'   =>  '</div></div></div> </div></div></div>',
                'post_html' => ' <div class="slide"><a href="{url}"><strong>{text_title}
                </strong></a></div>',          
                ]);
              endif;?> <!-- show popular posts widget end -->
      
       
        <div class="container clearfix">

          <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts">

            <?php if (have_posts()): while(have_posts()): the_post();?>

              <?php get_template_part('/template-parts/post/content-excerpt');?>
            <?php endwhile;
            endif;?>

              

            </div><!-- #posts end -->

            <!-- Pagination
            ============================================= -->
            <div class="row mb-3">
              <div class="col-12">
                <?php next_post_link('&larr; Older ');?>
                <?php previous_post_link(' Newer &rarr;');?>
                <!-- <a href="#" class="btn btn-outline-secondary float-left">
                  &larr; Older
                </a>
                <a href="#" class="btn btn-outline-dark float-right">
                  Newer &rarr;
                </a> -->
              </div>
            </div>
            <!-- .pager end -->

          </div><!-- .postcontent end -->
          <?php get_sidebar();?>
          

        </div>

      </div>

    </section><!-- #content end -->

   <?php 

   
   get_footer();
   ?>