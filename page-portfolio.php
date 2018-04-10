<?php

get_header();

if(have_posts()) :
	while(have_posts()) : the_post(); ?>

	<article class="post-page">

		<!-- column-container -->
		<div class="column-container clearfix">
			<!-- title-column -->
			<h2><?php the_title(); ?></h2>
			<?php the_content(''); ?>
		</div>
	</article>

	<?php endwhile;

	else :
		echo '<p>No content found.</p>';

	endif;

get_footer();

?>
