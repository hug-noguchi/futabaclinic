<?php get_header(); ?>

<ul id="breadcrumb">
 	<li><a href="/kuki/">ホーム</a>&nbsp;&gt;</li>
 	<li>お問い合わせ・お申し込み 入力</li>
</ul>
<div id="visual">

<img class="pc" src="/common/images/contact_key.jpg" srcset="/common/images/contact_key_2x.jpg 2x" loading="”lazy”" alt="お問い合わせ・お申し込み 入力">
<img class="sp" src="/common/images/contact_sp_key.jpg" srcset="/common/images/contact_sp_key_2x.jpg 2x" loading="”lazy”" alt="お問い合わせ・お申し込み 入力">

</div>
<div id="contents">

					<?php
					if (have_posts()) :
						while (have_posts()):
							the_post();
						the_content();

						endwhile;
					endif;
					?>
					<!--</div>-->
				<!-- </section>
			</div> -->
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side.php'); ?>
		</div>
<?php get_footer() ?>
