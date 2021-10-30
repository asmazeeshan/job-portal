
<?php
get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
 		<div class="wrapper">
 			<div id="post-content post_row">
				<?php
			$s=get_search_query();
			$args = array('s' =>$s);
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?>							</a>
                    </li>
                 <?php
        }
    }else{
?>
        <h2 class="search_head">Nothing Found</h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with 			some different keywords.</p>
           <?php get_search_form(); ?>
        </div>
<?php } ?>
		<?php echo do_shortcode('[et_pb_section global_module="1383"] 			  			[/et_pb_section]');?>
 						
 			</div><!-- wrapper -->
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer();