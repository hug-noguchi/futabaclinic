		<tr>
			<th>
				<?php if($mtime = get_mtime('Y.m.d')) { ?>
					<span itemprop="datePublished" content="<?php echo get_post_time('Y-m-d') ?>" class="published"><?php echo get_post_time('Y.m.d') ?></span>
				<?php } else { ?>
					<time itemprop="datePublished" datetime="<?php echo get_post_time('Y-m-d') ?>" pubdate="pubdate" class="published updated"><?php echo get_post_time('Y.m.d') ?></time>
				<?php } ?>
			</th>
			<td>
				<?php
					$days = 7; //Newを表示させたい期間の日数
					$today = date_i18n('U');
					$entry = get_the_time('U');
					$kiji = date('U',($today - $entry)) / 86400 ;
					if( $days > $kiji ){
					echo '<span>NEW</span>';
					}
				?>
				<a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a>
			</td>
		</tr>
