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
							$args = array(
								'post_type' => array('kitasenju', 'all'),
								'posts_per_page' => 10,
								'orderby' => 'date',
								'order' => 'DESC',
								'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
							);

							$custom_query = new WP_Query($args);

							if ($custom_query->have_posts()) :
								while ($custom_query->have_posts()) :
									$custom_query->the_post();
									get_template_part('content-archive');
								endwhile;
							endif;
							wp_reset_postdata();
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
							$args = array(
								'post_type' => array('shinkoiwa', 'all'),
								'posts_per_page' => 10,
								'orderby' => 'date',
								'order' => 'DESC',
								'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
							);

							$custom_query = new WP_Query($args);

							if ($custom_query->have_posts()) :
								while ($custom_query->have_posts()) :
									$custom_query->the_post();
									get_template_part('content-archive');
								endwhile;
							endif;
							wp_reset_postdata();
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
								$args = array(
									'post_type' => array('sakura', 'all'),
									'posts_per_page' => 10,
									'orderby' => 'date',
									'order' => 'DESC',
									'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
								);

								$custom_query = new WP_Query($args);

								if ($custom_query->have_posts()) :
									while ($custom_query->have_posts()) :
										$custom_query->the_post();
										get_template_part('content-archive');
									endwhile;
								endif;
								wp_reset_postdata();
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
								$args = array(
									'post_type' => array('yachiyo', 'all'),
									'posts_per_page' => 10,
									'orderby' => 'date',
									'order' => 'DESC',
									'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
								);

								$custom_query = new WP_Query($args);

								if ($custom_query->have_posts()) :
									while ($custom_query->have_posts()) :
										$custom_query->the_post();
										get_template_part('content-archive');
									endwhile;
								endif;
								wp_reset_postdata();
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

		<?php elseif (strstr($url,'kinshichou') == true) : ?>

		<?php get_header(6); ?>
			<div id="contents">
				<div id="main">
					<section>
						<h2>お知らせ</h2>
						<table>
							<?php
								$args = array(
									'post_type' => array('kinshichou', 'all'),
									'posts_per_page' => 10,
									'orderby' => 'date',
									'order' => 'DESC',
									'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
								);

								$custom_query = new WP_Query($args);

								if ($custom_query->have_posts()) :
									while ($custom_query->have_posts()) :
										$custom_query->the_post();
										get_template_part('content-archive');
									endwhile;
								endif;
								wp_reset_postdata();
							?>
						</table>
					</section>
					<!--ページネーション-->
					<?php if (function_exists('responsive_pagination')) {
						responsive_pagination($additional_loop->max_num_pages);
					} ?>
				</div>
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side_kinshichou.php'); ?>
				</div>
			</article>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/footer_kinshichou.php'); ?>
			<?php wp_footer(); ?>
		</body>
		</html>

		<!-- Start トップお知らせ -->
		<?php elseif (strstr($url,'all') == true) : ?>

		<style>
			@media only screen and (max-width: 480px) {
				#main .top table th {
					padding-left: 0 !important;
					padding-bottom: 0 !important;
					border-bottom: none !important;
					display: block;
					width: 100% !important;
				}
				#main .top table .title {
					background-color: #f48a9d;
					color: #fff;
					margin-bottom: 5px;
					text-align: center;
					position: unset !important;
					padding: 3px 8px !important;
					display: inline-block;
					width: 82px !important;
					font-weight: normal;
					line-height: 1;
				}
			}
		</style>

		<?php get_header(5); ?>
		<div id="contents">
		<div id="main">
		<section class="top">
			<h2>お知らせ</h2>
			<table class="news-table">
        <?php
        $args = array(
					'posts_per_page' => 10, // 表示件数
					'orderby' => 'post_date',
					'post_type' => 'all', // カスタム投稿タイプ 'all'
					'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1 // ページ番号
        );

        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) :
					while ($news_query->have_posts()) : $news_query->the_post();
        ?>
				<tr class="pc news_box">
					<th><?php the_time('Y/m/d'); ?></th>
					<td class="title tag_title">
						<?php
						$tag_list = get_the_tag_list('', ', ');
						$tags = explode(', ', $tag_list);

						foreach ($tags as $tag) {
							$pattern = '/<a .*?>(.*?)<\/a>/';
							if (preg_match($pattern, $tag, $matches)) {
								$tag_text = $matches[1];
								$formatted_tag = "<p><span>$tag_text</span></p>";
								echo $formatted_tag . ' ';
							}
						}
						?>
					</td>
					<td id="post-<?php the_ID(); ?>" class="post_title">
						<a href="<?php the_permalink(); ?>">
							<?php
							$days = 7;
							$today = date('U');
							$entry = get_the_time('U');
							$diff1 = date('U', ($today - $entry)) / 86400;
							if ($days > $diff1) {
									echo '<span class="new">NEW</span><br class="sp">';
							}
							?>
							<?php the_title(); ?>
						</a>
					</td>
				</tr>
				<tr class="sp">
						<th>
							<?php the_time('Y/m/d'); ?>
							<?php
								$tag_list = get_the_tag_list('', ', ');
								$tags = explode(', ', $tag_list);

								foreach ($tags as $tag) {
								$pattern = '/<a .*?>(.*?)<\/a>/';
									if (preg_match($pattern, $tag, $matches)) {
									$tag_text = $matches[1];
									$formatted_tag = "<p class='title tag_title'><span>$tag_text</span></p>";
									echo $formatted_tag . ' ';
									}
								}
							?>
							<?php
								$days=7;
								$today=date('U'); $entry=get_the_time('U');
								$diff1=date('U',($today - $entry))/86400;
								if ($days > $diff1) {
								echo '<span class="new">NEW</span><br class="sp">';
								}
							?>
						</th>
					</tr>
					<tr class="sp">
						<td id="post-<?php the_ID(); ?>" class="post_title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</td>
					</tr>
        <?php
					endwhile;
        else :
        ?>
				<tr>
					<td style="padding-left: 20px;">現在準備中です</td>
				</tr>
        <?php
        endif;
        wp_reset_postdata();
        ?>
			</table>
			<!--ページネーション-->
			<?php if (function_exists('responsive_pagination')) {
				responsive_pagination($additional_loop->max_num_pages);
			} ?>
		</section>

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
