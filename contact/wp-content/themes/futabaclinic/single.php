<?php get_header(); ?>
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
					<span class="previous"><?php previous_post_link(' %link', '&lt;&nbsp;前の記事へ', TRUE, ''); ?></span>
					<span class="next"><?php next_post_link('%link ', '次の記事へ&nbsp;&gt;', TRUE, ''); ?></span>
				</div>
			</div>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side.php'); ?>

		</div>
<?php get_footer() ?>	