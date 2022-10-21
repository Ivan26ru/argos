<?php get_template_part('template-parts/header') ?>

	<div class="top block block__dark">
		<div class="wrap">
			<div class="top__wrap">
				<div class="top__services">
					<p class="top__services-item top__services-item_doc">Работаем по 44-ФЗ и 223-ФЗ</p>
					<p class="top__services-item top__services-item_car">Отгрузка со склада в Москве</p>
					<p class="top__services-item top__services-item_time">В максимально сжатые сроки</p>
				</div>

				<p class="top__title"><?php echo get_field('top_title', 'options'); ?></p>
				<p class="top__title-small"><?php echo get_field('top_subtitle', 'options'); ?></p>
			</div>
		</div>
	</div>

	<div class="about block">
		<div class="wrap">
			<div class="about__wrap">
				<p class="title"><?php echo get_field('about_title', 'options'); ?></p>
				<div class="about__content"><?php echo get_field('about_text', 'options'); ?></div>
			</div>
		</div>
	</div>

	<div class="privilege block block__dark">
		<div class="wrap">
			<div class="privilege__wrap">
				<p class="title"><?php echo get_field('privilege_title', 'options'); ?></p>
				<div class="privilege__gallery gallery">
					<?php
					if (have_rows('privilege_gallery', 'options')):
						while (have_rows('privilege_gallery', 'options')) : the_row();
							$text = get_sub_field('text');
							$img = wp_get_attachment_image_url(get_sub_field("img"), 'thumbnail');
							?>
							<div class="gallery__item">
							<div class="gallery__item-img">
								<img src="<?php echo $img; ?>" alt="<?php echo $text ?>">
							</div>
							<p class="gallery__label"><?php echo $text; ?></p>
							</div><?php
						endwhile;
					endif; ?>
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
								<div class="tiles__img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tiles/tile_1.png" alt="">
								</div>
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

<?php get_template_part('template-parts/footer') ?>