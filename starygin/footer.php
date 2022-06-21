<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starygin
 */

?>

</div>
<footer class="footer" id="contacts">
	<div class="footer__top">
		<div class="footer__container -container">
			<div class="footer__body">
				<div class="footer__main">
					<?php
					$menu = wp_nav_menu([
						'theme_location'  => 'footer',
						'container'       => 'false',
						'menu_class'      => '',
						'items_wrap'      => '<ul class="footer__menu menu-footer" id="%1$s" class="%2$s">%3$s</ul>',
						'echo'            => false,
						'fallback_cb'     => '',
					]);
					echo str_replace('<a', '<img src="http://localhost/wordpress/wp-content/uploads/2022/06/arrow-right.svg"> <a class="menu-footer__link"', $menu);
					?>
					<form action="#" class="footer__contact contact-footer -contact-form">
						<div class="contact-footer__label">Оставьте Ваш телефон и получите<br> консультацию бесплатно
						</div>
						<div class="contact-footer__row">
							<div class="contact-footer__input -input-form"><input class="-req -tel" autocomplete="off" type="tel" name="phone" data-value="Телефон"></div>
							<button type="submit" class="contact-footer__btn btn btn_white">Отправить</button>
						</div>
					</form>
				</div>
				<div class="footer__info info-footer">
					<div class="info-footer__header">
						<div class="info-footer__logo logo">
							<picture>
								<source srcset="http://localhost/wordpress/wp-content/uploads/2022/06/logo.svg" media="(prefers-color-scheme: dark)">
								<source srcset="http://localhost/wordpress/wp-content/uploads/2022/06/logo-black.svg" media="(prefers-color-scheme: light)">
								<img src="http://localhost/wordpress/wp-content/uploads/2022/06/logo-black.svg" alt="">
							</picture>
						</div>
					</div>
					<div class="info-footer__label"><?php echo get_theme_mod('footer_motto'); ?></div>
					<div class="info-footer__contact">
						<a href="tel:79021821221" class="info-footer__phone"><?php echo get_theme_mod('phone_number'); ?></a>
						<div class="info-footer__social social-footer">
							<?php
							$links = array();
							if (have_rows('footer__links')) :
								while (have_rows('footer__links')) : the_row();
									$links[] = get_sub_field('footer__link');
								endwhile;
							endif;
							?>
							<?php if (have_rows('footer__icons')) :
								while (have_rows('footer__icons')) : the_row(); ?>
									<?php $i = get_row_index(); ?>
									<a href=<?php echo $links[$i - 1] ?> class="social-footer__icon"><img src=<?php the_sub_field('footer__icon'); ?> alt="icon"></a>
							<?php endwhile;
							endif; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="footer__container footer__container_bottom -container">
			<div class="footer__copy">© <?php echo get_theme_mod('privacy_policy'); ?></div>
			<a href="" class="footer__link">Политика конфиденциальности</a>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>