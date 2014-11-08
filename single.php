<?php get_header(); ?>	
<!--.content-->
	<div class="content col-md-8">

	<?php while ( have_posts() ) : the_post(); ?>	
		<div class="post col-md-12">
			<h2><?the_title()?></h2>
			<div class="col-md-4">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}  ?>
			</div>
			<div class="col-md-8">
				<?the_content();?>
			</div>
		</div>
		<!--/.post-->
		
	<?php // If comments are open or we have at least one comment, load up the comment template.
	 if ( comments_open() || '0' != get_comments_number() ) :
		comments_template();
	 endif;
	?>		
		
		
	<?php endwhile; ?>		



		
	</div>
	<!--/.content-->
	<div class="sidebar col-md-4">
		<form class="navbar-search pull-left">
			<input type="text" class="search-query" placeholder="Search">
		</form>
		<?get_sidebar();?>
	</div>	
<?php get_footer(); ?>		