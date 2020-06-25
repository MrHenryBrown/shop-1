<?php
get_header();

?>
<div class="delivery_container">
	<p class="delivery"><?php the_title(); ?></p>
	<p class="links"><a href="<?php echo get_home_url(); ?>">Главная</a><span> / </span> <a class="current-menu-item" href="<?php echo get_page_link(); ?>"><?php the_title(); ?></a> </p>
	<div class="delivery_text"> <?php the_content(); ?> </div>
</div>


<?php
get_footer();
?>