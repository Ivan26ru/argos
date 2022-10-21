<!DOCTYPE html><!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>Главная</title>
	<meta content="" name="description">

	<link href="assets/img/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link href="assets/img/favicon/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="assets/img/favicon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="assets/img/favicon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">

	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

	<link href="assets/css/reset.css" rel="stylesheet">

	<link href="assets/libs/animate/animate.css" rel="stylesheet">

	<link href="assets/fonts/fonts.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/media.css" rel="stylesheet">

	<script src="assets/libs/modernizr/modernizr.js"></script>

</head>

<body>

<header class="header">
	<div class="wrap">
		<div class="header__wrap">
			<div class="header__logo"><img alt="" src="assets/img/logo__argos_white.png"></div>
			<div class="header__menu">
				<div class="header__menu-div">
					<ul class="header__menu-ul">
						<li><a href="#">Главная</a></li>
						<li><a href="#">О компании</a></li>
						<li><a href="#">Продукция</a></li>
					</ul>
				</div>
			</div>
			<div class="header__contacts">
				<a href="tel:+7 (111) 111-11-11" class="header__phone">+7 (111) 111-11-11</a>
				<a href="mailto:info@argos.com.ru" class="header__mail">info@argos.com.ru</a>
			</div>

			<a href="#" class="header__btn my-btn my-btn__white">ПЕРЕЗВОНИТЕ МНЕ</a>
		</div>
	</div>
</header>

<div class="top block block__dark">
	<div class="wrap">
		<div class="top__wrap">
			<div class="top__services">
				<p class="top__services-item top__services-item_doc">Работаем по 44-ФЗ и 223-ФЗ</p>
				<p class="top__services-item top__services-item_car">Отгрузка со склада в Москве</p>
				<p class="top__services-item top__services-item_time">В максимально сжатые сроки</p>
			</div>

			<p class="top__title">Оптовые поставки <br>химической продукции</p>
			<p class="top__title-small">в промышленной отрасли</p>
		</div>
	</div>
</div>

<div class="about block">
	<div class="wrap">
		<div class="about__wrap">
			<p class="title">О компании</p>
			<div class="about__content">
				<p>Компания «Аргос» является поставщиком химической продукции, организует импорт и экспорт поставок по России и странам СНГ.</p>
				<p>Мы работаем со всеми видами промышленной химии. Поставки осуществляются с оптового склада в Москве. Вся продукция - от производителя.</p>
			</div>
		</div>
	</div>
</div>

<div class="privilege block block__dark">
	<div class="wrap">
		<div class="privilege__wrap">
			<p class="title">Наши преимущества</p>
			<div class="privilege__gallery gallery">
				<?php for ($i = 1; $i <= 4; $i++) { ?>
					<div class="gallery__item">
						<div class="gallery__item-img">
							<img src="assets/img/gallery/gal_<?php echo $i ?>.png" alt="">
						</div>
						<p class="gallery__label">Соблюдение сроков</p>
					</div>
					<?php
				} ?>
			</div>
		</div>
	</div>
</div>

<div class="products block">
	<div class="wrap">
		<div class="products__wrap">
			<p class="title">Продукция</p>
			<div class="products__content">
				<div class="tiles">
					<?php for ($i = 1; $i < 9; $i++) { ?>
						<div class="tiles__item">
							<div class="tiles__img"><img src="assets/img/tiles/tile_<?php echo $i; ?>.png" alt=""></div>
							<p class="tiles__text">Органические растворители</p>
						</div>
					<?php } ?>
				</div>

				<div class="products__label-btn">Ознакомиться с полным ассортиментом нашей продукции можно, скачав PDF-файл.</div>
				<a href="#" class="products__btn my-btn">скачать PDF</a>
			</div>
		</div>
	</div>
</div>

<div class="questions block block__dark">
	<div class="wrap">
		<div class="questions__wrap">
			<div class="questions__left">
				<p class="questions__title title">Возникли вопросы?</p>
				<p class="questions__text">Не нашли интересующую вас позицию в каталоге? Оставьте запрос, и мы вам поможем!</p>
				<a href="#" class="questions__tel">+7 (495) 111-11-11</a>
			</div>

			<div class="questions__right">
				<form action="" style="outline: 1px solid red;height: 100px;"></form>
			</div>
		</div>
	</div>
</div>

<div class="seo block">
	<div class="wrap">
		<div class="seo__wrap">
			<p class="seo__title">Заказать промышленную химию оптом от производителя</p>
			<p class="seo__text">Компания "АРГОС" - поставщик промышленной химии по России и странам СНГ. Вся продукция сертифицирована и отвечает требованиям безопасности/соответствует стандартам качества/ГОСТам. Помимо оптовых поставок, взаимодействие может проходить в рамках контрактного производства. Мы всегда готовы предложить гибкие условия сотрудничества. У нас налажены связи с поставщиками сырья и тары, что позволяет нам исполнять контракты со строгим соблюдением сроков. Наша цель - долгосрочное взаимовыгодное партнерство, которое позволит вам уменьшить затраты на транспортировку, хранение и переработку продукции.</p>
		</div>
	</div>
</div>

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
					<p class="footer__title">связаться с нами<</p>

					<p><a href="#">+7 (111) 111-11-11</a></p>

					<p>info@argos.com.ru <br>
						contact@argos.com.ru</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--[if lt IE 9]>
<script src="assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="assets/libs/respond/respond.min.js"></script>
<![endif]-->

<script src="assets/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="assets/libs/animate/animate-css.js"></script>

<script src="assets/js/main.js"></script>

</body>
</html>