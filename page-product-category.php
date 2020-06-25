<?php
/*
Template Name: КаталОг
*/
?>



<?php
	get_header();
?>

<div class="catalog_container">
	<div class="filter">

		<div class="block">
			<label> Каталог </label>
			<ul>
				<li>
					<input type="checkbox"> <span>Одежда</span>
				</li>
				<li>
					<input type="checkbox"> <span>Украшения </span>
				</li>
				<li>
					<input type="checkbox"> <span>Часы</span>
				</li>
			</ul>
		</div>

		<div class="block">
			<label> Бренд </label>
			<ul>
				<li>
					<input type="checkbox"> <span>Adidas</span>
				</li>
				<li>
					<input type="checkbox"> <span>Nike</span>
				</li>
				<li>
					<input type="checkbox"> <span>Puma</span>
				</li>
				<li>
					<input type="checkbox"> <span>Твоё</span>
				</li>
			</ul>
		</div>
		<div class="block no_border">
			<label> Цена </label>
			<div>
				<div>
					<span style="display:block">От</span>
					<input type="text">
				</div>

				<div>
					<span style="display:block">До</span>
					<input type="text">
				</div>
			</div>
		</div>

		<div class="block">
				<label> Сезон </label>
				<ul>
					<li>
						<input type="checkbox"> <span>Лето</span>
					</li>
					<li>
						<input type="checkbox"> <span>Зима</span>
					</li>
					<li>
						<input type="checkbox"> <span>Демисезон</span>
					</li>
					<li>
						<input type="checkbox"> <span>Весна / Осень</span>
					</li>
				</ul>
		</div>

	</div>

	<div class="all_goods">

		<div class="header2">

			<div class="filter_min_box">
				<div class="box">
					<label id="filter">Фильтры</label>
					<div class="box_in">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-bottom.png' ?>" width="10px">
					</div>
				</div>
			</div>

			<div class="filter_min_box" >
				<div class="box">
					<label id="sort">Сортировать</label>
					<div class="box_in">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-bottom.png' ?>" width="10px">
					</div>
				</div>
			</div>
		</div>


		<!-- Фильтры (скрытые) -->
		<div class="filter_open_container">
			<div class="filter_min">

				<div class="block">
					<label> Каталог </label>
					<ul>
						<li>
							<input type="checkbox"> <span>Одежда</span>
						</li>
						<li>
							<input type="checkbox"> <span>Украшения </span>
						</li>
						<li>
							<input type="checkbox"> <span>Часы</span>
						</li>
					</ul>
				</div>

				<div class="block">
					<label> Бренд </label>
					<ul>
						<li>
							<input type="checkbox"> <span>Adidas</span>
						</li>
						<li>
							<input type="checkbox"> <span>Nike</span>
						</li>
						<li>
							<input type="checkbox"> <span>Puma</span>
						</li>
						<li>
							<input type="checkbox"> <span>Твоё</span>
						</li>
					</ul>
				</div>
				<div class="block no_border">
					<label> Цена </label>
					<div>
						<div>
							<span style="display:block">От</span>
							<input type="text">
						</div>

						<div>
							<span style="display:block">До</span>
							<input type="text">
						</div>
					</div>
				</div>

				<div class="block">
					<label> Сезон </label>
					<ul>
						<li>
							<input type="checkbox"> <span>Лето</span>
						</li>
						<li>
							<input type="checkbox"> <span>Зима</span>
						</li>
						<li>
							<input type="checkbox"> <span>Демисезон</span>
						</li>
						<li>
							<input type="checkbox"> <span>Весна / Осень</span>
						</li>
					</ul>
				</div>

			</div>
		</div>

		<!-- Cортировка (скрытые)  -->
		<div class="sort_open_container">
			<div class="sort_min">
				<div class="block">
					<label> Сортировать по: </label>
					<ul>
						<li>
							<input type="checkbox"> <span>По умолчанию</span>
						</li>
						<li>
							<input type="checkbox"> <span>По возростанию цены</span>
						</li>
						<li>
							<input type="checkbox"> <span>По убыванию цены</span>
						</li>
						<li>
							<input type="checkbox"> <span>По алфавиту</span>
						</li>
					</ul>
				</div>
			</div>
		</div>


		<div class="container_goods">




			<?php

			$catalog = new WP_Query(
					[
							'post-type' => array('product'),
							'orderby' => 'title',
							'order' => 'ASC',

					]
			);
			if($catalog -> have_posts()){
				while($catalog -> have_posts()){
					$catalog -> the_post();
					echo 'x';
				}
			}

			?>




			<div class="one_good">

				<a href="/" class="container_img">
					<div class="container_img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/clock/1.jpg' ?>" width="100%">
					</div>
					<div class="good_title">
						<span>Casio1488 </span>
					</div>
					<div class="good_cost">
						<span> 200$</span>
					</div>
				</a>

			</div>

			<div class="one_good">

				<a href="/" class="container_img">
					<div class="container_img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/clock/2.jpg' ?>" width="100%">
					</div>
					<div class="good_title">
						<span>Casio1488 </span>
					</div>
					<div class="good_cost">
						<span> 100$</span>
					</div>
				</a>

			</div>

			<div class="one_good">

				<a href="/" class="container_img">
					<div class="container_img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/clock/3.jpg' ?>" width="100%">
					</div>
					<div class="good_title">
						<span>Casio1488 </span>
					</div>
					<div class="good_cost">
						<span> 300$</span>
					</div>
				</a>

			</div>

			<div class="one_good">

				<a href="/" class="container_img">
					<div class="container_img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/clock/4.jpg' ?>" width="100%">
					</div>
					<div class="good_title">
						<span>Casio1488 </span>
					</div>
					<div class="good_cost">
						<span> 250$</span>
					</div>
				</a>

			</div>
		</div>
	</div>

</div>

<?php
get_footer();
?>
