<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tz-sound
 */

?>

<footer class="footer block">
	<div class="wrap">
		<div class="footer__wrap">
			<div class="footer__left">
				<div class="footer__text">
					<p><b>ООО «АРГОС»</b> <br>
						ОГРН 1227700315897 </p>
					<p>121069, г Москва, ул Поварская, <br>
						д. 31/29, эт/пом/ком/оф <br>
						П/VI/9/52</p>
				</div>
			</div>

			<div class="footer__right">
				<div class="footer__text">
					<p class="footer__title">связаться с нами</p>

					<p>
						<a href="tel:<?php echo phone_format( get_field( 'phone', 'options' ) ); ?>"><?php echo get_field( 'phone', 'options' ); ?></a>
						<br>
						<a href="tel:<?php echo phone_format( get_field( 'phone2', 'options' ) ); ?>"><?php echo get_field( 'phone2', 'options' ); ?></a>
					</p>

					<p>
						<a href="mailto:<?php echo get_field( 'email', 'options' ); ?>"><?php echo get_field( 'email', 'options' ); ?></a>
						<br>
						<a href="mailto:contact@argos.com.ru">contact@argos.com.ru</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body></html>