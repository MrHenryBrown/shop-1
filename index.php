<?php get_header();?>


	<section>
		<div class="background_header">
			<img <?php echo ("src= ".get_template_directory_uri()."/assets/img/header_img.jpg")?> width="100%" height="100%" alt="back">
		</div>
	</section>

	<main>
		<div class="goods">
			<div class="goods_container">

				<?php
					if(have_posts() && is_front_page() ):
							while(have_posts()) : the_post();
								if( in_category('product_category') ) :?>
								<div class="good">
									<a href="<?php the_permalink(); ?>" class="good_in">
										<span><?php the_title(); ?></span>
										<div class="img_container">
											<?php the_post_thumbnail(); ?>
										</div>
									</a>
								</div>
								<?php endif; ?>
							<?php endwhile; ?>
					<?php else: ?>
					Записей нет!
					<?php endif; ?>
			</div>

		</div>
		<div class="descr">
			<div class="descr_container">
				<span>БОЛЬШОЙ ВЫБОР ТОВАРОВ</span>
				<p>VEWA — это магаз, в котором собрано очень дохуя новомодных товаров: хуй и мужская пизда, белье и трусы. Вы можете заглянуть в него в любое время и заказать с бесплатной доставкой всё, что надо и не нужно. Это безумно просто!</p>

				<p>VEWA предлагает бесплатную доставку по всей территории мира и белоруссии Выбирайте любые понравившиеся товары, оформляйте заказы, и мы доставим его в ближайшее время.</p>

				<p>Делать покупки в VEWA просто, удобно и безопасно, весело. Заказы не нужно оплачивать заранее, но можно и хорошо — оплата производится наличными в момент доставки или картой в момент доставки . </p>
			</div>
		</div>
		<div class="subs_menu">
			<div class="subs_menu_container">
				<span>ПОЛУЧАЙТЕ НОВОСТИ ПЕРВЫМИ</span>
				<p>Узнавайте первыми о новых коллекциях, будьте в курсе всех распродаж, получите доступ к эксклюзивным предложениям в 1 клик</p>
				<div class="subs_field">
					<div class="edittext">
						<input type="email" name="email" id="email" placeholder="E-mail" >
					</div>
					<input class="btn_sub" type="submit" name="send" id="send" value="Подписаться">
				</div>
			</div>
		</div>
	</main>


<?php get_footer(); ?>