
<?php get_header(); ?>

<?php if ( is_front_page() || is_home() ) { ?>

	<div class="container home-container">
		<?php include('inc-homepage.php'); ?>
	</div><!--/.container-->

<?php } else { ?>

	<div class="content-container">
		<div class="row">

			<div class="col-sm-8">
			<?php
				if ( have_posts() ) :
					
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'content', get_post_format() );
					endwhile;
					
                endif;
			?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div><!--/.container-->

<?	} ?>
<?php get_footer(); ?>