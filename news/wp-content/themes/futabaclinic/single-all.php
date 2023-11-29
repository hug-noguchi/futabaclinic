<?php
/**
 * Template Name: single-all
 * Template Post Type: post, page, news
 */
?>
	<?php get_header(5); ?>
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
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side_top.php'); ?>
			</div>
  </article>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/footer_all.php'); ?>
	<?php wp_footer(); ?>
</body>
</html>
