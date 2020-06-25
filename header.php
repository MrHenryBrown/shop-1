<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, maximum-scale = 1.0, inital-scale = 1.0" >
	<!-- начальная область просмотра = ширине экрана -->
	<?php wp_head()?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open ();?>
<header>
	<div class="logo">
		<a href="<?php echo get_home_url(); ?>" style="display:block">
			<img <?php echo ("src= ".get_template_directory_uri()."/assets/img/LOGO.png")?> height="15%" width="74%" alt="logo">
		</a>
	</div>
	<div class="header_text">
		<div class="nav_menu">
			<?php wp_nav_menu([
				'theme_location' => 'top',
				'container' => null,
				'items_wrap'  => '<ul class="list">%3$s</ul>'
			]); ?>
			<div id="b1" class="nav_menu_box_ou">
				<a class="nav_menu_box">
					<img <?php echo ("src= ".get_template_directory_uri()."/assets/img/unnamed.png")?> alt="burgerbar" width="33px" height="33px">

				</a>
				<a class="cataloge" id = 'burger_title' >Каталог</a>
			</div>
		</div>


		<div class="right_menu">
			<div class="like">
				<a href="#">
					<img src="https://assets3.insales.ru/assets/1/3684/1412708/1588927207/wirl_fav.svg" alt="img" width="20px" height="20px">
				</a>
			</div>
			<div class="search" >
				<a href="#">
					<img src="https://assets3.insales.ru/assets/1/3684/1412708/1588927207/search_icon.svg" alt="img" width="20px" height="20px">
				</a>
			</div>
			<div class="basket" >
				<a href="#">
					<img <?php echo ("src= ".get_template_directory_uri()."/assets/img/basket.png")?> alt="img" width="20px" height="20px">
				</a>
			</div>
		</div>
	</div>
</header>
<div id="open_menu" >
	<div class="posts">
		<?php
		$posts = get_posts( array(
			'numberposts' => -1,
			'category_name' => 'product_category',
			'orderby'     => 'date',
			'order'       => 'DESC',
			'include'     => array(),
			'exclude'     => array(),
			'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
		) );
		foreach( $posts as $post ){
			setup_postdata($post);?>


			<div class="nav_link">
				<a href="<?php the_permalink(); ?>">
					<span><?php the_title(); ?></span>
				</a>
			</div>
			<?php
		}
		wp_reset_postdata(); ?>
	</div>
	<div class="pages nav_link">
		<?php
		wp_nav_menu([
			'theme_location' => 'top',
			'container' => null,
			'items_wrap'  => '<ul>%3$s</ul>'
		]); ?>
	</div>

</div>