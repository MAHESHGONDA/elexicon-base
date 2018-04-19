<?php
/**
 * Post index page template
 * @package elexicon
 */

get_header(); ?>

<div id="index">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>

						<?php \Elexicon\Helper::get_partial('post-list'); ?>

					<?php endwhile; ?>
				<?php else : ?>

					<h4><?php _e('No posts found!', \Elexicon\Helper::$theme_prefix); ?></h4>

				<?php endif; ?>

			</div>
		</div>
	</div><!-- .container -->
</div>

<?php
get_footer();
