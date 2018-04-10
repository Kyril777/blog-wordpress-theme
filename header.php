<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width-device-width">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<!-- Collapsible menu. -- >
		<nav class="media-nav">
			<div class="toggle">
				<i class="fa fa-bars menu" aria-hidden="true" ></i>
			</div>
			<?php
				$args = array(
					'theme_location' => 'header'
				);
			?>
			<?php wp_nav_menu( $args ); ?>
		</nav>

		<div class="container">

			<!-- site header -->
			<header class="site-header">

				<!-- Search box. -->
				<div class="hd-search">
					<?php get_search_form(); ?>
				</div><!-- /hd-search -->

				<h1><a href="<?php echo home_url(); ?>"><img class="animated bounceInLeft" src="<?php echo get_template_directory_uri(); ?>/iKyril-logo.png" width="" height="50%" alt="" />
</a></h1>
				<h4><span id="typed"></span></h4>
        <nav class="site-nav">
          <?php

            $args = array(
              'theme_location' => 'primary'
            );

          ?>

          <?php wp_nav_menu( $args ); ?>
        </nav>
			</header>
