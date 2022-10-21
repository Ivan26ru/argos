<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tz-sound
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php if (have_rows('code_for_header', 'options')): ?><?php while (have_rows('code_for_header', 'options')): the_row();
		$title = get_sub_field('title', 'option');
		$code = get_sub_field('code', 'option');
		if ($title) {
			echo "<!-- " . $title . "-->" . $code . "<!-- ." . $title . " -->";
		} else {
			echo $code;
		} ?><?php endwhile; ?><?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<div class="wrap">
		<div class="header__wrap">
			<div class="header__logo">
				<img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo__argos_white.png"></div>
			<div class="header__menu">
				<?php
				wp_nav_menu([
						'theme_location'  => 'menu',
						'container_class' => 'header__menu-div', // css-класс блока div
						'menu_class'      => 'header__menu-ul',
						'depth'           => 1, // количество уровней вложенности
				])
				?>
				<!--					<div class="header__menu-div">-->
				<!--						<ul class="header__menu-ul">-->
				<!--							<li><a href="#">Главная</a></li>-->
				<!--							<li><a href="#">О компании</a></li>-->
				<!--							<li><a href="#">Продукция</a></li>-->
				<!--						</ul>-->
				<!--					</div>-->
			</div>
			<div class="header__contacts">
				<a href="tel:+7 (111) 111-11-11" class="header__phone">+7 (111) 111-11-11</a>
				<a href="mailto:info@argos.com.ru" class="header__mail">info@argos.com.ru</a>
			</div>

			<a href="#" class="header__btn my-btn my-btn__white">ПЕРЕЗВОНИТЕ МНЕ</a>
		</div>
	</div>
</header>