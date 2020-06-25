<footer>
	<div class="footer_container">
		<div class="footer_nav">
			<div class="footer_text_only">
				<div class="for_byers">
					<span>Покупателям</span>
					<?php wp_nav_menu([
						'theme_location' => 'bottom1',
						'container' => null,
						'items_wrap'  => '<ul>%3$s</ul>'
					]); ?>
				</div>
				<div class="footer_info">
					<span>Информация</span>
					<?php wp_nav_menu([
						'theme_location' => 'bottom2',
						'container' => null,
						'items_wrap'  => '<ul>%3$s</ul>'
					]); ?>
				</div>
			</div>
			<div class="social">
				<div class="soc_buttons">
					<a href="#">
						<img src="https://assets3.insales.ru/assets/1/3684/1412708/1588927207/instagram_icon.svg" alt="instagramm" >
					</a>
					<a href="#">
						<img src="https://assets3.insales.ru/assets/1/3684/1412708/1588927207/vk_icon.svg" alt="vk" >
					</a>
					<a href="#">
						<img src="https://assets3.insales.ru/assets/1/3684/1412708/1588927207/fb_icon.svg" alt="fb" >
					</a>
					<a href="#">
						<img src="https://assets3.insales.ru/assets/1/3684/1412708/1588927207/youtube_icon1.svg" alt="youtube" >
					</a>
				</div>
				<div class="soc_tittle">
					<span>Больше интересной информации<br>в наших социальных сетях.</span>
				</div>
			</div>
		</div>
		<div class="confidentiality">
			<span>VEWA X – мультибрендовый магазин © 2020</span>
		</div>
	</div>
</footer>


<!-------- нижняя панель для корзины и кнопки вверх--------->
<div class="footer_panel">
	<div class="right_part">
		<a href="#" class="bottom_basket">
			<img <?php echo ("src= ".get_template_directory_uri()."/assets/img/basket_white.png")?> alt="img" width="22px" height="22px">
			<span class="cost">0.00 руб</span>
		</a>
	</div>
	<div class="left_part">
		<a href="#" class="up">
			<img <?php echo ("src= ".get_template_directory_uri()."/assets/img/arrow_white.png")?> alt="img" width="20px" height="20px">
			<span class="up_text">Наверх</span>
		</a>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>