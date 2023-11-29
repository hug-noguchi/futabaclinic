<?php
	$url = $_SERVER['REQUEST_URI'];
	if (strstr($url,'kitasenju') == true) :
?>

	<?php get_header(1); ?>
		<div id="contents">
			<div id="main">
				<section>
					<h2>お知らせ</h2>
					<table>
						<?php
						if (have_posts()) :
							while (have_posts()) :
							the_post();
							get_template_part('content-archive');
							endwhile;
						endif;
						?>
					</table>
				</section>
				<!--ページネーション-->
				<?php if (function_exists('responsive_pagination')) {
					responsive_pagination($additional_loop->max_num_pages);
				} ?>
			</div>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side_kitasenju.php'); ?>
			</div>
		</article>
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/footer_kitasenju.php'); ?>
		<?php wp_footer(); ?>
	</body>
	</html>

<?php elseif (strstr($url,'shinkoiwa') == true) : ?>

	<?php get_header(2); ?>
		<div id="contents">
			<div id="main">
				<section>
					<h2>お知らせ</h2>
					<table>
						<?php
							if (have_posts()) :
								while (have_posts()) :
								the_post();
								get_template_part('content-archive');
								endwhile;
							endif;
						?>
					</table>
				</section>
				<!--ページネーション-->
				<?php if (function_exists('responsive_pagination')) {
					responsive_pagination($additional_loop->max_num_pages);
				} ?>
			</div>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side_edogawa.php'); ?>
			</div>
		</article>
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/footer_edogawa.php'); ?>
		<?php wp_footer(); ?>
	</body>
	</html>

	<?php elseif (strstr($url,'sakura') == true) : ?>

		<?php get_header(3); ?>
			<div id="contents">
				<div id="main">
					<section>
						<h2>お知らせ</h2>
						<table>
							<?php
								if (have_posts()) :
									while (have_posts()) :
									the_post();
									get_template_part('content-archive');
									endwhile;
								endif;
							?>
						</table>
					</section>
					<!--ページネーション-->
					<?php if (function_exists('responsive_pagination')) {
						responsive_pagination($additional_loop->max_num_pages);
					} ?>
				</div>
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side_sakura.php'); ?>
				</div>
			</article>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/footer_sakura.php'); ?>
			<?php wp_footer(); ?>
		</body>
		</html>

		<?php elseif (strstr($url,'yachiyo') == true) : ?>

		<?php get_header(4); ?>
			<div id="contents">
				<div id="main">
					<section>
						<h2>お知らせ</h2>
						<table>
							<?php
								if (have_posts()) :
									while (have_posts()) :
									the_post();
									get_template_part('content-archive');
									endwhile;
								endif;
							?>
						</table>
					</section>
					<!--ページネーション-->
					<?php if (function_exists('responsive_pagination')) {
						responsive_pagination($additional_loop->max_num_pages);
					} ?>
				</div>
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side_yachiyo.php'); ?>
				</div>
			</article>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/footer_yachiyo.php'); ?>
			<?php wp_footer(); ?>
		</body>
		</html>

		<!-- Start トップお知らせ -->
		<?php elseif (strstr($url,'all') == true) : ?>

		<?php get_header(5); ?>
		<div id="contents">
		<div id="main">
		<section class="top">
			<h2>お知らせ</h2>
				<table>
					<?php
						if (have_posts()) :
							while (have_posts()) :
							the_post();
							get_template_part('content-archive');
							get_the_tags('');
							endwhile;
						endif;
					?>
			</table>
		</section>
		<!--ページネーション-->
		<?php if (function_exists('responsive_pagination')) {
			responsive_pagination($additional_loop->max_num_pages);
		} ?>
		</div>
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side_top.php'); ?>
		</div>
		</article>
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/footer_all.php'); ?>
		<?php wp_footer(); ?>
		</body>
		</html>
		<!--End トップお知らせ -->

	<?php else : ?>

	<?php get_header(); ?>
		<div id="contents">
			<div id="main">
				<section>
					<h2>お知らせ</h2>
					<table>
						<?php
						if (have_posts()) :
							while (have_posts()) :
							the_post();
							get_template_part('content-archive');
							endwhile;
						endif;
						?>
					</table>
				</section>
				<!--ページネーション-->
				<?php if (function_exists('responsive_pagination')) {
					responsive_pagination($additional_loop->max_num_pages);
				} ?>
			</div>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side.php'); ?>
		</div>
	<?php get_footer() ?>

<?php endif; ?>
