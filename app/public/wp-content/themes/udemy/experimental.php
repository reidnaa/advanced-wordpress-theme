<?php
/*
Template Name: experimental

*/

get_header();

?>
<!-- Page Title
                    ============================================= -->
                    <section id="page-title">
                    <div class="container clearfix">
                        <h1><?php the_title();?></h1>
                    </div>
                </section><!-- #page-title end -->
    
    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">
        <?php

            echo wp_login_url();

            ?>

        <div class="container clearfix">

          <!-- Post Content
          ============================================= -->
          
        
                   
          
          

        </div>

      </div>

    </section><!-- #content end -->

   <?php 

   
   get_footer();
   ?>