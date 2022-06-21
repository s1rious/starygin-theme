<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starygin
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wrapper">
		<header class="header">
			<div class="header__wrapper -popup-padding">
				<div class="header__height"></div>
				<div class="header__container -container">
					<div class="header__body">
						<a href="#" class="header__logo logo">
							<img src=<?php echo get_theme_mod('second_logo'); ?> alt="img">
							<img src=<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]); ?> alt="img">
						</a>
						<nav class="header__menu menu">
							<?php
							$menu = wp_nav_menu([
								'theme_location'  => 'main',
								'container'       => 'false',
								'menu_class'      => 'menu__list',
								'echo'            => false,
								'fallback_cb'     => '',
							]);
							echo str_replace('<a', '<a class="menu__link"', $menu);
							?>
						</nav>
						<div class="header__actions" data-me="575.98, .menu, last">
							<a href="+79256810591" class="header__call">+7 (925) 681 05 91 </a>
							<div class="header__lang lang-header" data-spollers="min, 0">
								<a href="#" data-spoller-item class="lang-header__item">rus <span class="lang-header__arrow"></span></a>
								<div class="lang-header__body">
									<ul class="lang-header__list">
										<li>rus</li>
										<li><a href="#">en</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="header__burger burger-header"><span></span></div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->
		<div class="page">