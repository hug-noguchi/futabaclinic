<?php
/**
 * Template Name: single-edogawa
 * Template Post Type: post, page, news
 */
?>

<style>
@media (max-width: 480px) {
  .single img {
    height: auto;
    max-width: 100%;
    vertical-align: bottom;
  }
}
</style>

	<?php get_header(2); ?>
		<div id="contents">
			<div id="main" class="single">
				<section>
					<?php
					if (have_posts()) :
					  while (have_posts()) :
						the_post();
						get_template_part('content');
					  endwhile;
					endif;
					?>
				</section>
				<div class="navigation">
					<span class="previous"><?php previous_post_link(' %link', '&lt;&nbsp;前の記事へ'); ?></span>
					<span class="next"><?php next_post_link('%link ', '次の記事へ&nbsp;&gt;'); ?></span>
				</div>
			</div>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/sidebar.php'); ?>
		</div>
  </article>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
	<?php wp_footer(); ?>
</body>
</html>
