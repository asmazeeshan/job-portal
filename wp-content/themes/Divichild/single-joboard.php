<?php


get_header(); ?>
 	<div id="primary" class="site-content">
	<div id="content" role="main">
    	<?php echo do_shortcode('[et_pb_section global_module="1199"] [/et_pb_section]');?>
 	
    	<main id="post-content">
		<?php while ( have_posts() ) : the_post(); ?>
             <article id="post-<?php the_ID(); ?>"  class="article">
             	<h2 class="job_title"><?php the_title(); ?></h2>
            	<p><?php the_content(); ?></p>
            	<h2 class="job_req">REQUIRMENTS</h2>
				<div class="jobs-area">
					<ul>
						<li><strong>Skills:</strong> <?php echo 								           get_field('add_skills'); ?> </li>
						<li><strong>Experience:</strong><?php echo 											get_field('add_experience');?> </li>
						<li><strong>Job Shift:</strong><?php echo 											get_field('_job_shifts'); ?></li>
						<li><strong>Location:</strong><?php echo 											get_field('location'); ?></li>
						<li><strong>Salary:</strong><?php echo get_field('salary'); 						?></li>
					</ul>
				</div>
				<div>
                	<?php echo do_shortcode ('[contact-form-7 id="1110"  								title="LOGIN"]')?>
                </div>
            </article>
			    
		<?php endwhile; // end of the loop. ?>
	</main> <!-- post-content -->

 	</div><!-- wrapper -->
   </div><!-- #content -->
</div><!-- #primary -->
 <?php get_footer(); ?>