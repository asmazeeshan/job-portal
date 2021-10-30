<?php

get_header(); ?>
<?php
    $terms = get_queried_object();
?>
 
<div id="primary" class="site-content">
      <div id="content" role="main">
      <?php echo do_shortcode('[et_pb_section global_module="1175"] [/et_pb_section]');?>
         <div class="wrapper">
            <main id="post-content">
               <h1 class="jobs_category job_tax"><?php echo strtoupper($terms->taxonomy), ':', ucwords($terms->name) ; ?></h1>
        <?php while(have_posts()) : the_post();?>
            <article id="post-<?php the_ID(); ?>" >
            <h2 class="jobtitle"><?php the_title(); ?></h2>
            <div>
                <p><?php the_content(); ?></p>
                <a class="read_btn" href="<?php the_permalink(); ?>">Read More</a>
            </div>
            </article>
        <?php endwhile; ?> 
            </main> <!-- post-content -->


         </div><!-- wrapper -->
      </div><!-- #content -->
   </div><!-- #primary -->
 

<?php get_footer(); ?>