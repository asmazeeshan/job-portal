<?php get_header(); ?>
<div id="primary" class="site-content">
	<div id="content" role="main">
	<?php echo do_shortcode('[et_pb_section global_module="1175"] 			  [/et_pb_section]');?>
 		<div class="wrapper">
		 
 			<main id="post-content">
			 
			 <div class="jobs-row">
			 
				<?php while ( have_posts() ) : the_post(); ?>
       				<article  id="post-<?php the_ID(); ?>" class="job-wrap">
                  	<div class="job-img">
					  <?php the_post_thumbnail(); ?>
					</div>
					<div class="job-details">
						<h2 class="title_text"><?php the_title(); ?></h2>
                        <p class="excerpt_text"><?php the_excerpt(); ?></p>
               			<a class="read_btn" href="<?php the_permalink(); ?>?id=<?php the_ID();?>&post_title=<?php the_title(); ?>">Read More</a>
					</div>	
            		</article>
				
 
				<?php endwhile; // end of the loop. ?>
			</div>
			</main> <!-- post-content -->
		</div><!-- wrapper -->
	</div><!-- #content -->
</div><!-- #primary -->
 

<?php get_footer(); ?>