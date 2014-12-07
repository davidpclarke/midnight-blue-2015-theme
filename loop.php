<!-- Masonry container -->
<div id="container">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- Masonry item -->
		<div class="item">
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<?php the_post_thumbnail('thumbnail'); ?>
					<?php endif; ?>
					<!-- /post thumbnail -->

					<!-- post title -->
					<h2>
						<?php the_title(); ?>
					</h2>
					<!-- /post title -->
				</a>
			</article>
			<!-- /article -->
		</div>
		<!-- /Masonry item -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->

	<?php endif; ?>
</div>
<!-- Masonry container -->
