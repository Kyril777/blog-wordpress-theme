<?php

// Page specifically for single posts.
get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post">
		<br/>
				<?php the_post_thumbnail('banner-image'); ?>
		<h2><?php the_title(); ?></h2>


		<!-- info-box -->
    <div class="info-box">
      <h4>Need a Developer?</h4>
      <p>A website is not just a marketing tool; a website can be the business itself. Therefore, you will need a developer who thinks beyond design, coding and maintenance. You will need a developer who wants to see your brand succeed and contributes to your overall success. From beautiful layouts to brilliant apps, I got you covered. Have a peek at my <a href="http://ikyril.com/portfolio">portfolio</a>.</p>
    </div>

		<p class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in

			<?php

			$categories = get_the_category();
			$separator = ", ";
			$output = '';

			if ($categories) {

				foreach ($categories as $category) {

					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;

				}

				echo trim($output, $separator);

			}

			?>

			</p>

		<?php the_content(); ?>
	</article>

	<?php endwhile;

	else :
		echo '<p>No content found</p>';

	endif;

get_footer();

?>
