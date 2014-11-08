<?php get_header(); ?>	
	<!--.content-->
	<div class="col-md-12 content">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="post col-md-6">
			<h2><?the_title();?></h2>
			<div class="col-md-4">
				<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}  ?>
				</a>
			</div>
			<div class="col-md-8">
				<?the_content();?>
			</div>
		</div>
		<!--/.post-->
	<?php endwhile; ?>
		
	</div>
	<!--/.content-->

<?php get_footer(); ?>