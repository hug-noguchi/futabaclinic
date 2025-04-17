		<tr>
			<th class="sp_thead">
				<?php if($mtime = get_mtime('Y.m.d')) { ?>
					<span itemprop="datePublished" content="<?php echo get_post_time('Y-m-d') ?>" class="published"><?php echo get_post_time('Y.m.d') ?></span>
				<?php } else { ?>
					<time itemprop="datePublished" datetime="<?php echo get_post_time('Y-m-d') ?>" pubdate="pubdate" class="published updated"><?php echo get_post_time('Y.m.d') ?></time>
				<?php } ?>
			</th>

			<?php
				$url = $_SERVER['REQUEST_URI'];
				if (strstr($url,'all') == true) :
			?>

			<td class="title tag_title sp_tag_title sp">
				<p><?php echo $content = preg_replace('/<a .*?>(.*?)<\/a>/', "<span>$1</span>", get_the_tag_list()); ?></p>
			</td>

			<td class="sp_new_box sp">
				<?php
					$days = 7; //Newを表示させたい期間の日数
					$today = date_i18n('U');
					$entry = get_the_time('U');
					$kiji = date('U',($today - $entry)) / 86400 ;
					if( $days > $kiji ){
					echo '<span class="sp_new">NEW</span>';
					}
				?>
			</td>

			<?php endif; ?>

			<?php
				$url = $_SERVER['REQUEST_URI'];
				if (strstr($url,'all') == true) :
			?>

			<td class="title tag_title pc_tag_title pc">
				<p><?php echo $content = preg_replace('/<a .*?>(.*?)<\/a>/', "<span>$1</span>", get_the_tag_list()); ?></p>
			</td>

			<?php endif; ?>

			<td class="pc_new_box">
				<?php
					$days = 7; //Newを表示させたい期間の日数
					$today = date_i18n('U');
					$entry = get_the_time('U');
					$kiji = date('U',($today - $entry)) / 86400 ;
					if( $days > $kiji ){
					echo '<span class="new">NEW</span><br class="sp">';
					}
				?>
				<a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a>
			</td>
		</tr>
