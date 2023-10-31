<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
		<main class="page">
			<section class="scren-1" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/fon1/fon2.png);">
				<div class="scren-1__text">
					<h1 class="scren-1__title title"><?php the_field('main_title');?>
				</h1>
					<p class="scren-1__sub-title sub-title">
					<?php the_field('main_subtitle'); ?>
					
					</p>

					<p class="scren-1__sub-sub-title sub-sub-title">
					<?php the_field('main_subsubtitle'); ?>
					</p>
					<button data-popup="#popup" class="scren-1__button button">ЗАПИСАТЬСЯ НА
						КОНСУЛЬАЦИЮ</button>
				</div>
				<div class="scren-1__img scren-ibg">
					<picture><source srcset="<?php the_field('main_img');?>" type="image/webp"><img src="<?php the_field('main_img');?>" alt=""></picture>

				</div>
			</section>
			<section class="advantage">
				<div class="advantage__container">
					<h2 class="advantage__title title"><?php the_field('advantage_title'); ?></h2>
					<div data-tabs="768" data-tabs-button class="advantage__tabs">

						<nav data-tabs-titles class="advantage__navigation">
							<button type="button" class="advantage__button _tab-active">Революционный подход
								в фитнес индустрии</button>
							<button type="button" class="advantage__button">Уникальная система
								диагностики</button>
							<button type="button" class="advantage__button"> Поэтапная система
								реабилитации и тренировок</button>
							<button type="button" class="advantage__button">Подход,ориентированный
								на результат</button>
							<button type="button" class="advantage__button"> Физическая активность,как
								основа здорового образа жизни</button>
							<button type="button" class="advantage__button"> Быстрый и
								стабильный
								эффект</button>

						</nav>
						<div data-tabs-body class="advantage__content">

							<div class="advantage__body">
								<div class="advantage__navigation-tabs">
									<button class="advantage__button-tabs button-prev">
										<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.9705 21.0001C23.9705 21.7528 23.6831 22.5055 23.1095 23.0794L5.05023 41.1384C3.90144 42.2872 2.03887 42.2872 0.890542 41.1384C-0.257785 39.9901 -0.257785 38.1279 0.890542 36.979L16.8704 21.0001L0.8911 5.02114C-0.257227 3.87234 -0.257227 2.01034 0.8911 0.862103C2.03943 -0.287247 3.90199 -0.287247 5.05079 0.862103L23.11 18.9209C23.6837 19.495 23.9705 20.2477 23.9705 21.0001Z"
												fill="#94C31F" />
										</svg>
									</button>
									<button class="advantage__button-tabs button-next">
										<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.9705 21.0001C23.9705 21.7528 23.6831 22.5055 23.1095 23.0794L5.05023 41.1384C3.90144 42.2872 2.03887 42.2872 0.890542 41.1384C-0.257785 39.9901 -0.257785 38.1279 0.890542 36.979L16.8704 21.0001L0.8911 5.02114C-0.257227 3.87234 -0.257227 2.01034 0.8911 0.862103C2.03943 -0.287247 3.90199 -0.287247 5.05079 0.862103L23.11 18.9209C23.6837 19.495 23.9705 20.2477 23.9705 21.0001Z"
												fill="#94C31F" />
										</svg>
									</button>
								</div>
								<div class="advantage__cart cart">
									<div class="cart__body">
										<div class="cart__img -ibg_contain">
											<img src="@img/advantage/slide.png" alt="slide">
										</div>
										<div class="cart__content">
											<h3 class="cart__title">22rdsfgb22Революционный подход в фитнес
												индустрии
											</h3>
											<p class="cart__text">Мы представляем первый в Казахстане
												медицинский центр,
												объединивший новейшие технологии в области спортивной
												медицины, реабилитации и оздоровительного фитнеса.
												медицинский центр,
												объединивший новейшие технологии в области спортивной
												медицины, реабилитации и оздоровительного фитнеса.</p>
											<button class="cart__button button">Записаться на
												консультацию</button>
										</div>
						
									</div>
								</div>
							</div>
							<div class="advantage__body">
								<div class="advantage__navigation-tabs">
									<button class="advantage__button-tabs button-prev">
										<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.9705 21.0001C23.9705 21.7528 23.6831 22.5055 23.1095 23.0794L5.05023 41.1384C3.90144 42.2872 2.03887 42.2872 0.890542 41.1384C-0.257785 39.9901 -0.257785 38.1279 0.890542 36.979L16.8704 21.0001L0.8911 5.02114C-0.257227 3.87234 -0.257227 2.01034 0.8911 0.862103C2.03943 -0.287247 3.90199 -0.287247 5.05079 0.862103L23.11 18.9209C23.6837 19.495 23.9705 20.2477 23.9705 21.0001Z"
												fill="#94C31F" />
										</svg>
									</button>
									<button class="advantage__button-tabs button-next">
										<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.9705 21.0001C23.9705 21.7528 23.6831 22.5055 23.1095 23.0794L5.05023 41.1384C3.90144 42.2872 2.03887 42.2872 0.890542 41.1384C-0.257785 39.9901 -0.257785 38.1279 0.890542 36.979L16.8704 21.0001L0.8911 5.02114C-0.257227 3.87234 -0.257227 2.01034 0.8911 0.862103C2.03943 -0.287247 3.90199 -0.287247 5.05079 0.862103L23.11 18.9209C23.6837 19.495 23.9705 20.2477 23.9705 21.0001Z"
												fill="#94C31F" />
										</svg>
									</button>
								</div>
								<div class="advantage__cart cart">
									<div class="cart__body">
										<div class="cart__img -ibg_contain">
											<img src="@img/advantage/slide.png" alt="slide">
										</div>
										<div class="cart__content">
											<h3 class="cart__title">22sdfbdsfb22Революционный подход в фитнес
												индустрии
											</h3>
											<p class="cart__text">Мы представляем первый в Казахстане
												медицинский центр,
												объединивший новейшие технологии в области спортивной
												медицины, реабилитации и оздоровительного фитнеса.
												медицинский центр,
												объединивший новейшие технологии в области спортивной
												медицины, реабилитации и оздоровительного фитнеса.</p>
											<button class="cart__button button">Записаться на
												консультацию</button>
										</div>
						
									</div>
								</div>
							</div>
							<div class="advantage__body">
								<div class="advantage__navigation-tabs">
									<button class="advantage__button-tabs button-prev">
										<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.9705 21.0001C23.9705 21.7528 23.6831 22.5055 23.1095 23.0794L5.05023 41.1384C3.90144 42.2872 2.03887 42.2872 0.890542 41.1384C-0.257785 39.9901 -0.257785 38.1279 0.890542 36.979L16.8704 21.0001L0.8911 5.02114C-0.257227 3.87234 -0.257227 2.01034 0.8911 0.862103C2.03943 -0.287247 3.90199 -0.287247 5.05079 0.862103L23.11 18.9209C23.6837 19.495 23.9705 20.2477 23.9705 21.0001Z"
												fill="#94C31F" />
										</svg>
									</button>
									<button class="advantage__button-tabs button-next">
										<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.9705 21.0001C23.9705 21.7528 23.6831 22.5055 23.1095 23.0794L5.05023 41.1384C3.90144 42.2872 2.03887 42.2872 0.890542 41.1384C-0.257785 39.9901 -0.257785 38.1279 0.890542 36.979L16.8704 21.0001L0.8911 5.02114C-0.257227 3.87234 -0.257227 2.01034 0.8911 0.862103C2.03943 -0.287247 3.90199 -0.287247 5.05079 0.862103L23.11 18.9209C23.6837 19.495 23.9705 20.2477 23.9705 21.0001Z"
												fill="#94C31F" />
										</svg>
									</button>
								</div>
								<div class="advantage__cart cart">
									<div class="cart__body">
										<div class="cart__img -ibg_contain">
											<img src="@img/advantage/slide.png" alt="slide">
										</div>
										<div class="cart__content">
											<h3 class="cart__title">2222Революционный подход в фитнес
												индустрии
											</h3>
											<p class="cart__text">Мы представляем первый в Казахстане
												медицинский центр,
												объединивший новейшие технологии в области спортивной
												медицины, реабилитации и оздоровительного фитнеса.
												медицинский центр,
												объединивший новейшие технологии в области спортивной
												медицины, реабилитации и оздоровительного фитнеса.</p>
											<button class="cart__button button">Записаться на
												консультацию</button>
										</div>
						
									</div>
								</div>
							</div>
							<div class="advantage__body">
								<div class="advantage__navigation-tabs">
									<button class="advantage__button-tabs button-prev">
										<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.9705 21.0001C23.9705 21.7528 23.6831 22.5055 23.1095 23.0794L5.05023 41.1384C3.90144 42.2872 2.03887 42.2872 0.890542 41.1384C-0.257785 39.9901 -0.257785 38.1279 0.890542 36.979L16.8704 21.0001L0.8911 5.02114C-0.257227 3.87234 -0.257227 2.01034 0.8911 0.862103C2.03943 -0.287247 3.90199 -0.287247 5.05079 0.862103L23.11 18.9209C23.6837 19.495 23.9705 20.2477 23.9705 21.0001Z"
												fill="#94C31F" />
										</svg>
									</button>
									<button class="advantage__button-tabs button-next">
										<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.9705 21.0001C23.9705 21.7528 23.6831 22.5055 23.1095 23.0794L5.05023 41.1384C3.90144 42.2872 2.03887 42.2872 0.890542 41.1384C-0.257785 39.9901 -0.257785 38.1279 0.890542 36.979L16.8704 21.0001L0.8911 5.02114C-0.257227 3.87234 -0.257227 2.01034 0.8911 0.862103C2.03943 -0.287247 3.90199 -0.287247 5.05079 0.862103L23.11 18.9209C23.6837 19.495 23.9705 20.2477 23.9705 21.0001Z"
												fill="#94C31F" />
										</svg>
									</button>
								</div>
								<div class="advantage__cart cart">
									<div class="cart__body">
										<div class="cart__img -ibg_contain">
											<img src="@img/advantage/slide.png" alt="slide">
										</div>
										<div class="cart__content">
											<h3 class="cart__title">2222Революционный подход в фитнес
												индустрии
											</h3>
											<p class="cart__text">Мы представляем первый в Казахстане
												медицинский центр,
												объединивший новейшие технологии в области спортивной
												медицины, реабилитации и оздоровительного фитнеса.
												медицинский центр,
												объединивший новейшие технологии в области спортивной
												медицины, реабилитации и оздоровительного фитнеса.</p>
											<button class="cart__button button">Записаться на
												консультацию</button>
										</div>
						
									</div>
								</div>
							</div>
							<div class="advantage__body">
								<div class="advantage__navigation-tabs">
									<button class="advantage__button-tabs button-prev">
										<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.9705 21.0001C23.9705 21.7528 23.6831 22.5055 23.1095 23.0794L5.05023 41.1384C3.90144 42.2872 2.03887 42.2872 0.890542 41.1384C-0.257785 39.9901 -0.257785 38.1279 0.890542 36.979L16.8704 21.0001L0.8911 5.02114C-0.257227 3.87234 -0.257227 2.01034 0.8911 0.862103C2.03943 -0.287247 3.90199 -0.287247 5.05079 0.862103L23.11 18.9209C23.6837 19.495 23.9705 20.2477 23.9705 21.0001Z"
												fill="#94C31F" />
										</svg>
									</button>
									<button class="advantage__button-tabs button-next">
										<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.9705 21.0001C23.9705 21.7528 23.6831 22.5055 23.1095 23.0794L5.05023 41.1384C3.90144 42.2872 2.03887 42.2872 0.890542 41.1384C-0.257785 39.9901 -0.257785 38.1279 0.890542 36.979L16.8704 21.0001L0.8911 5.02114C-0.257227 3.87234 -0.257227 2.01034 0.8911 0.862103C2.03943 -0.287247 3.90199 -0.287247 5.05079 0.862103L23.11 18.9209C23.6837 19.495 23.9705 20.2477 23.9705 21.0001Z"
												fill="#94C31F" />
										</svg>
									</button>
								</div>
								<div class="advantage__cart cart">
									<div class="cart__body">
										<div class="cart__img -ibg_contain">
											<img src="@img/advantage/slide.png" alt="slide">
										</div>
										<div class="cart__content">
											<h3 class="cart__title">2222Революционный подход в фитнес
												индустрии
											</h3>
											<p class="cart__text">Мы представляем первый в Казахстане
												медицинский центр,
												объединивший новейшие технологии в области спортивной
												медицины, реабилитации и оздоровительного фитнеса.
												медицинский центр,
												объединивший новейшие технологии в области спортивной
												медицины, реабилитации и оздоровительного фитнеса.</p>
											<button class="cart__button button">Записаться на
												консультацию</button>
										</div>
						
									</div>
								</div>
							</div>
							<div class="advantage__body">
								<div class="advantage__navigation-tabs">
									<button class="advantage__button-tabs button-prev">
										<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.9705 21.0001C23.9705 21.7528 23.6831 22.5055 23.1095 23.0794L5.05023 41.1384C3.90144 42.2872 2.03887 42.2872 0.890542 41.1384C-0.257785 39.9901 -0.257785 38.1279 0.890542 36.979L16.8704 21.0001L0.8911 5.02114C-0.257227 3.87234 -0.257227 2.01034 0.8911 0.862103C2.03943 -0.287247 3.90199 -0.287247 5.05079 0.862103L23.11 18.9209C23.6837 19.495 23.9705 20.2477 23.9705 21.0001Z"
												fill="#94C31F" />
										</svg>
									</button>
									<button class="advantage__button-tabs button-next">
										<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.9705 21.0001C23.9705 21.7528 23.6831 22.5055 23.1095 23.0794L5.05023 41.1384C3.90144 42.2872 2.03887 42.2872 0.890542 41.1384C-0.257785 39.9901 -0.257785 38.1279 0.890542 36.979L16.8704 21.0001L0.8911 5.02114C-0.257227 3.87234 -0.257227 2.01034 0.8911 0.862103C2.03943 -0.287247 3.90199 -0.287247 5.05079 0.862103L23.11 18.9209C23.6837 19.495 23.9705 20.2477 23.9705 21.0001Z"
												fill="#94C31F" />
										</svg>
									</button>
								</div>
								<div class="advantage__cart cart">
									<div class="cart__body">
										<div class="cart__img -ibg_contain">
											<img src="@img/advantage/slide.png" alt="slide">
										</div>
										<div class="cart__content">
											<h3 class="cart__title">2222Революционный подход в фитнес
												индустрии
											</h3>
											<p class="cart__text">Мы представляем первый в Казахстане
												медицинский центр,
												объединивший новейшие технологии в области спортивной
												медицины, реабилитации и оздоровительного фитнеса.
												медицинский центр,
												объединивший новейшие технологии в области спортивной
												медицины, реабилитации и оздоровительного фитнеса.</p>
											<button class="cart__button button">Записаться на
												консультацию</button>
										</div>
						
									</div>
								</div>
							</div>
						
						
						</div>
					</div>


				</div>
			</section>
			<section class="problem">
				<div class="problem__container">
					<h3 class="problem__title title">ПРОБЛЕМЫ С КОТОРЫМИ УСПЕШНО БОРЮТСЯ В НАШЕМ ЦЕНТРЕ</h3>
					<div data-tabs="992" class="problem">
						<nav data-tabs-titles class="problem__navigation">
							<button type="button" class="problem__button _tab-active">ЛЕЧЕБНЫЕ ПРОГРАММЫ</button>
							<button type="button" class="problem__button">РЕАБИЛИТАЦИОННЫЕ ПРОГРАММЫ</button>
							<button type="button" class="problem__button">КОРРЕКЦИОННЫЕ ПРОГРАММЫ</button>
						</nav>
						<div data-tabs-body class="problem__content">
							<div class="problem__body">
								<div class="program">
									<ul class="program__list">
										<li class="program__item">1111Боли в поясничном и грудном отделе позвоночника
											при остеохондрозе
											с грыжами и протрузиями межпозвонковых дисков(любмбалгии, ишиас)</li>
										<li class="program__item">Плечелопаточный периартрит, острые и хронические боли
											в плечевых, коленных
											и тазобедренных суставах
										</li>
										<li class="program__item">Боли в шейном отделе позвоночника. Головные боли и
											головокружения(ВБН)
										</li>
										<li class="program__item">Профилактика, а так же улучшение течения системных и
											хронических заболеваний:
											ревматоидный артрит, болезнь Бехтерева, Артериальная гипертензия,
											Ишемическая
											болезнь сердца, Сахарный диабет второго типа, ожирение</li>
										<li class="program__item">Профилактика, а так же улучшение течения системных и
											хронических заболеваний:
											ревматоидный артрит, болезнь Бехтерева, Артериальная гипертензия,
											Ишемическая
											болезнь сердца, Сахарный диабет второго типа, ожирение</li>
										<li class="program__item">Профилактика, а так же улучшение течения системных и
											хронических заболеваний:
											ревматоидный артрит, болезнь Бехтерева, Артериальная гипертензия,
											Ишемическая
											болезнь сердца, Сахарный диабет второго типа, ожирение</li>
									</ul>
									<a href="#" class="program__image-ibg"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/problem/foto.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/problem/foto.png" alt="foto"></picture></a>
								</div>
							</div>
							<div class="problem__body">
								<div class="program">
									<ul class="program__list">
										<li class="program__item">2222Боли в поясничном и грудном отделе позвоночника
											при остеохондрозе
											с грыжами и протрузиями межпозвонковых дисков(любмбалгии, ишиас)</li>
										<li class="program__item">Плечелопаточный периартрит, острые и хронические боли
											в плечевых, коленных
											и тазобедренных суставах
										</li>
										<li class="program__item">Боли в шейном отделе позвоночника. Головные боли и
											головокружения(ВБН)
										</li>
										<li class="program__item">Профилактика, а так же улучшение течения системных и
											хронических заболеваний:
											ревматоидный артрит, болезнь Бехтерева, Артериальная гипертензия,
											Ишемическая
											болезнь сердца, Сахарный диабет второго типа, ожирение</li>
									</ul>
									<a href="#" class="program__image-ibg"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/problem/foto.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/problem/foto.png" alt="foto"></picture></a>
								</div>
							</div>
							<div class="problem__body">
								<div class="program">
									<ul class="program__list">
										<li class="program__item">3333Боли в поясничном и грудном отделе позвоночника
											при остеохондрозе
											с грыжами и протрузиями межпозвонковых дисков(любмбалгии, ишиас)</li>
										<li class="program__item">Плечелопаточный периартрит, острые и хронические боли
											в плечевых, коленных
											и тазобедренных суставах
										</li>
										<li class="program__item">Боли в шейном отделе позвоночника. Головные боли и
											головокружения(ВБН)
										</li>
										<li class="program__item">Профилактика, а так же улучшение течения системных и
											хронических заболеваний:
											ревматоидный артрит, болезнь Бехтерева, Артериальная гипертензия,
											Ишемическая
											болезнь сердца, Сахарный диабет второго типа, ожирение</li>
									</ul>
									<a href="https://www.youtube.com/watch?v=DfG0s3e40FA" class="program__image-ibg"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/problem/foto.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/problem/foto.png" alt="foto"></picture></a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>

		</main>
<?php get_footer(); ?>