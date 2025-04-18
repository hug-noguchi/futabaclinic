<div id="visual">
	<p>
		<img class="pc" src="/common/images/guide_key.jpg" srcset="/common/images/guide_key_2x.jpg 2x" alt="当院について">
		<img class="sp" src="/common/images/guide_sp_key_2x.jpg" alt="当院について">
	</p>
</div>
<div id="contents">
	<div id="main">
		<section>
			<p class="txt_01">
				当院は通院が困難な患者さんに対して、医師がご自宅を定期的に訪問して診療を行う、
				「
					<a
						<?php
							$url = $_SERVER['REQUEST_URI'];
							if (strpos($url, 'kinshichou') !== false) :
						?>
							href="/kinshichou/about/"
						<?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
							href="/shinkoiwa/about/"
						<?php elseif (strpos($url, 'kitasenju') !== false) : ?>
							href="/kitasenju/about/"
						<?php elseif (strpos($url, 'sakura') !== false) : ?>
							href="/sakura/about/"
						<?php elseif (strpos($url, 'yachiyo') !== false) : ?>
							href="/yachiyo/about/"
						<?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
							href="/kitanarashino/about/"
						<?php elseif (strpos($url, 'motoyawata') !== false) : ?>
							href="/motoyawata/about/"
						<?php else : ?>
							href="/kuki/about/"
						<?php endif; ?>
						>在宅医療
					</a>
				」
				を専門とするクリニックです。</p>
			<p class="txt_02">
			住み慣れた我が家でのんびり療養したいという患者さんをチームでサポートいたします。
			</p>
			</p>
			<table>
				<tr>
					<th>医院名</th>
					<?php $url = $_SERVER['REQUEST_URI'];
						if (strpos($url, 'kitanarashino') !== false || strpos($url, 'sakura') !== false || strpos($url, 'yachiyo') !== false || strpos($url, 'motoyawata') !== false) :
					?>
						<td>医療法人社団 千葉爽緑会<br>ふたば在宅クリニック</td>
					<?php else : ?>
						<td>医療法人社団爽緑会<br>ふたば在宅クリニック</td>
					<?php endif; ?>
				</tr>
				<?php
					$url = $_SERVER['REQUEST_URI'];
					if (strpos($url, 'kinshichou') !== false) :
				?>
					<tr>
						<th>施設名</th>
						<td class="address add_tokyo">
							<div>
								<p>錦糸町</p>
								<span>〒130-0013<br>東京都墨田区錦糸1-4-14 長嶋ビル 4階</span>
							</div>
							<div>
								<p>新小岩</p>
								<span>〒124-0024<br>東京都葛飾区新小岩1-49-10 第5デリカビル（メディカルタウン新小岩） 2階</span>
							</div>
							<div>
								<p>北千住</p>
								<span>〒120-0034<br>東京都足立区千住2-4オカバツインタワービル イースト 8階</span>
							</div>
						</td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td><a href="tel:0366588175">03-6658-8175</a></td>
					</tr>
					<tr>
						<th>FAX</th>
						<td>03-6658-8176</td>
					</tr>
				<?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
					<tr>
						<th>施設名</th>
						<td class="address add_tokyo">
							<div>
								<p>新小岩</p>
								<span>〒124-0024<br>東京都葛飾区新小岩1-49-10 第5デリカビル（メディカルタウン新小岩） 2階</span>
							</div>
							<div>
								<p>北千住</p>
								<span>〒120-0034<br>東京都足立区千住2-4オカバツインタワービル イースト 8階</span>
							</div>
							<div>
								<p>錦糸町</p>
								<span>〒130-0013<br>東京都墨田区錦糸1-4-14 長嶋ビル 4階</span>
							</div>
						</td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td><a href="tel:0358793530">03-5879-3530</a></td>
					</tr>
					<tr>
						<th>FAX</th>
						<td>03-5879-3531</td>
					</tr>
				<?php elseif (strpos($url, 'kitasenju') !== false) : ?>
					<tr>
						<th>施設名</th>
						<td class="address add_tokyo">
							<div>
								<p>北千住</p>
								<span>〒120-0034<br>東京都足立区千住2-4オカバツインタワービル イースト 8階</span>
							</div>
							<div>
								<p>新小岩</p>
								<span>〒124-0024<br>東京都葛飾区新小岩1-49-10 第5デリカビル（メディカルタウン新小岩） 2階</span>
							</div>
							<div>
								<p>錦糸町</p>
								<span>〒130-0013<br>東京都墨田区錦糸1-4-14 長嶋ビル 4階</span>
							</div>
						</td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td><a href="tel:0368062590">03-6806-2590</a></td>
					</tr>
					<tr>
						<th>FAX</th>
						<td>03-6806-2591</td>
					</tr>
				<?php elseif (strpos($url, 'sakura') !== false) : ?>
					<tr>
						<th>施設名</th>
						<td class="address">
							<div>
								<p>佐倉</p>
								<span>〒285-0837<br>千葉県佐倉市王子台1丁目22-13 海佑ビル 1階</span>
							</div>
							<div>
								<p>本八幡</p>
								<span>〒272-0021<br>千葉県市川市八幡3-3-2 グランドターミナルタワー1階 J107、J108号</span>
							</div>
							<div>
								<p>北習志野</p>
								<span>〒274-0063<br>千葉県船橋市習志野台2-6-1 小林ビル 3階-C</span>
							</div>
							<div>
								<p>八千代</p>
								<span>〒276-0020<br>千葉県八千代市勝田台北1-9-1 みかど第2ビル 104</span>
							</div>
						</td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td><a href="tel:0432909700">043-290-9700</a></td>
					</tr>
					<tr>
						<th>FAX</th>
						<td>043-290-9708</td>
					</tr>
				<?php elseif (strpos($url, 'yachiyo') !== false) : ?>
					<tr>
						<th>施設名</th>
						<td class="address">
							<div>
								<p>八千代</p>
								<span>〒276-0020<br>千葉県八千代市勝田台北1-9-1 みかど第2ビル 104</span>
							</div>
							<div>
								<p>本八幡</p>
								<span>〒272-0021<br>千葉県市川市八幡3-3-2 グランドターミナルタワー1階 J107、J108号</span>
							</div>
							<div>
								<p>北習志野</p>
								<span>〒274-0063<br>千葉県船橋市習志野台2-6-1 小林ビル 3階-C</span>
							</div>
							<div>
								<p>佐倉</p>
								<span>〒285-0837<br>千葉県佐倉市王子台1丁目22-13 海佑ビル 1階</span>
							</div>
						</td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td><a href="tel:0474093677">047-409-3677</a></td>
					</tr>
					<tr>
						<th>FAX</th>
						<td>047-409-3788</td>
					</tr>
				<?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
					<tr>
						<th>施設名</th>
						<td class="address">
							<div>
								<p>北習志野</p>
								<span>〒274-0063<br>千葉県船橋市習志野台2-6-1 小林ビル 3階-C</span>
							</div>
							<div>
								<p>本八幡</p>
								<span>〒272-0021<br>千葉県市川市八幡3-3-2 グランドターミナルタワー1階 J107、J108号</span>
							</div>
							<div>
								<p>佐倉</p>
								<span>〒285-0837<br>千葉県佐倉市王子台1丁目22-13 海佑ビル 1階</span>
							</div>
							<div>
								<p>八千代</p>
								<span>〒276-0020<br>千葉県八千代市勝田台北1-9-1 みかど第2ビル 104</span>
							</div>
						</td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td><a href="tel:0474026536">047-402-6536</a></td>
					</tr>
					<tr>
						<th>FAX</th>
						<td>047-402-6537</td>
					</tr>
				<?php elseif (strpos($url, 'motoyawata') !== false) : ?>
					<tr>
						<th>施設名</th>
						<td class="address">
							<div>
								<p>本八幡</p>
								<span>〒272-0021<br>千葉県市川市八幡3-3-2グランドターミナルタワー1階 J107、J108号</span>
							</div>
							<div>
								<p>北習志野</p>
								<span>〒274-0063<br>千葉県船橋市習志野台2-6-1 小林ビル 3階-C</span>
							</div>
							<div>
								<p>佐倉</p>
								<span>〒285-0837<br>千葉県佐倉市王子台1丁目22-13 海佑ビル 1階</span>
							</div>
							<div>
								<p>八千代</p>
								<span>〒276-0020<br>千葉県八千代市勝田台北1-9-1 みかど第2ビル 104</span>
							</div>
						</td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td><a href="tel:">×××-×××-××××</a></td>
					</tr>
					<tr>
						<th>FAX</th>
						<td>×××-×××-××××</td>
					</tr>
				<?php else : ?>
					<tr>
						<th>施設名</th>
						<td>〒346-0016<br>埼玉県久喜市久喜東1-2-5 東山ビル 3階-A</td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td><a href="tel:0480449178">0480-44-9178</a></td>
					</tr>
					<tr>
						<th>FAX</th>
						<td>0480-44-9179</td>
					</tr>
				<?php endif; ?>
				<tr>
					<th>受付時間</th>
					<td>
						9:00〜18:00
					</td>
				</tr>
				<tr>
					<th>休診日</th>
					<td>日曜・祝日・年末年始・夏季</td>
				</tr>
				<tr>
					<th>許認可</th>
					<td class="kyoninka">
						<p>
						機能強化型在宅療養支援診療所<br>
						在宅緩和ケア充実診療所
						</p>
						<p>
						指定自立支援医療機関<br>
						生活保護法指定医療機関<br>
						労災保険指定医療機関
						</p>
					</td>
				</tr>
				<tr>
					<th>事業内容</th>
					<td>医療サービス（訪問診療）</td>
				</tr>
				<tr>
					<th>グループ沿革</th>
					<td><a href="/history.php" class="history_link" target="_blank">医療法人社団 爽緑会・千葉爽緑会　グループ沿革はこちら >></a></td>
				</tr>
				<tr>
					<th>従業員数</th>
					<td>
						140名<br>
						※グループ合計<br>
						※2025年2月現在
					</td>
				</tr>
				<tr>
					<th>提携機関</th>
					<td >
						<p>TMI総合法律事務所</p>
					</td>
				</tr>
			</table>
		</section>
		<section>
			<h2>当院の特色</h2>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/futaba_style.php'); ?>
		</section>
		<section>
			<h2>診療科目</h2>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/shinryou_subject.php'); ?>
		</section>
		<section>
			<h2>診療日</h2>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/shinryou_day.php'); ?>
		</section>
		<section id="shinryou_box">
			<h2>診療内容</h2>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/shinryou_box.php'); ?>
		</section>
		<?php
			$url = $_SERVER['REQUEST_URI'];
			if (strpos($url, 'kinshichou') !== false || strpos($url, 'shinkoiwa') !== false) :
		?>
			<section id="sec_06">
				<h2>連携医療機関</h2>
				<p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
				<ul>
					<li class="sec_06_list">・東京医科大学病院</li>
					<li class="sec_06_list">・東京慈恵会医科大学付属病院葛飾医療センター</li>
					<li class="sec_06_list">・がん研有明病院</li>
					<li class="sec_06_list">・日本赤十字社医療センター</li>
					<li class="sec_06_list">・NTT東日本関東病院</li>
					<li class="sec_06_list">・東京都済生会向島病院</li>
					<li class="sec_06_list">・国立国際医療研究センター国府台病院</li>
					<li class="sec_06_list">・東京臨海病院</li>
					<li class="sec_06_list">・森山記念病院</li>
					<li class="sec_06_list">・順天堂大学医学部付属東京江東高齢者医療センター</li>
					<li class="sec_06_list">・千葉西総合病院</li>
					<li class="sec_06_list">・東京女子医科大学付属足立医療センター</li>
					<li class="sec_06_list">・東和病院</li>
					<li class="sec_06_list">・東京北部病院</li>
					<li class="sec_06_list">・帝京大学医学部付属病院</li>
					<li class="sec_06_list">・虎の門病院</li>
					<li class="sec_06_list">・三井記念病院</li>
					<li class="sec_06_list">・永寿総合病院</li>
					<li class="sec_06_list">・聖路加国際病院</li>
					<li class="sec_06_list">・東京大学医学部付属病院</li>
					<li class="sec_06_list">・国立がん研究センター中央病院</li>
					<li class="sec_06_list">・日本大学病院</li>
					<li class="sec_06_list">・順天堂大学医学部付属順天堂医院</li>
					<li class="sec_06_list">・順天堂大学医学部付属浦安病院</li>
					<li class="sec_06_list">・かつしか江戸川病院</li>
					<li class="sec_06_list">・京葉病院</li>
					<li class="sec_06_list">・江戸川メディケア病院</li>
					<li class="sec_06_list">・黒木整形外科内科クリニック</li>
					<li class="sec_06_list">・社会福祉法人 仁生社 江戸川病院</li>
					<li class="sec_06_list">・訪問診療わっしょいクリニック</li>
				</ul>
			</section>
		<?php elseif (strpos($url, 'kitasenju') !== false) : ?>
			<section id="sec_06">
				<h2>連携医療機関</h2>
				<p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
				<ul>
					<li class="sec_06_list">・東京医科大学病院</li>
					<li class="sec_06_list">・東京慈恵会医科大学付属病院葛飾医療センター</li>
					<li class="sec_06_list">・がん研有明病院</li>
					<li class="sec_06_list">・日本赤十字社医療センター</li>
					<li class="sec_06_list">・NTT東日本関東病院</li>
					<li class="sec_06_list">・東京都済生会向島病院</li>
					<li class="sec_06_list">・国立国際医療研究センター国府台病院</li>
					<li class="sec_06_list">・東京臨海病院</li>
					<li class="sec_06_list">・森山記念病院</li>
					<li class="sec_06_list">・順天堂大学医学部付属東京江東高齢者医療センター</li>
					<li class="sec_06_list">・千葉西総合病院</li>
					<li class="sec_06_list">・東京女子医科大学付属足立医療センター</li>
					<li class="sec_06_list">・東和病院</li>
					<li class="sec_06_list">・東京北部病院</li>
					<li class="sec_06_list">・帝京大学医学部付属病院</li>
					<li class="sec_06_list">・虎の門病院</li>
					<li class="sec_06_list">・三井記念病院</li>
					<li class="sec_06_list">・永寿総合病院</li>
					<li class="sec_06_list">・聖路加国際病院</li>
					<li class="sec_06_list">・東京大学医学部付属病院</li>
					<li class="sec_06_list">・国立がん研究センター中央病院</li>
					<li class="sec_06_list">・日本大学病院</li>
					<li class="sec_06_list">・順天堂大学医学部付属順天堂医院</li>
					<li class="sec_06_list">・順天堂大学医学部付属浦安病院</li>
				</ul>
			</section>
		<?php elseif (strpos($url, 'sakura') !== false) : ?>
			<section id="renkei">
				<h2>連携医療機関</h2>
				<p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
				<ul>
					<li>・東邦大学医療センター佐倉病院</li>
					<li>・聖隷佐倉市民病院</li>
					<li>・日本医科大学千葉北総病院病院</li>
					<li>・東京女子医科大学八千代医療センター</li>
					<li>・千葉大学医学部付属病院</li>
					<li>・成田富里徳州会病院</li>
					<li>・成田赤十字病院</li>
					<li>・下志津病院</li>
					<li>・国際医療福祉大学成田病院</li>
				</ul>
			</section>
		<?php elseif (strpos($url, 'yachiyo') !== false) : ?>
			<section id="renkei">
				<h2>連携医療機関</h2>
				<p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
				<ul>
					<li>・千葉大学医学部付属病院</li>
					<li>・東京女子医科大学八千代医療センター</li>
					<li>・日本医科大学千葉北総病院病院</li>
					<li>・東邦大学医療センター佐倉病院</li>
					<li>・聖隷佐倉市民病院</li>
					<li>・成田富里徳州会病院</li>
					<li>・勝田台病院</li>
					<li>・セントマーガレット病院</li>
					<li>・山王病院</li>
				</ul>
			</section>
		<?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
			<section id="renkei">
				<h2>連携医療機関</h2>
				<p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
				<ul>
					<li>・千葉大学医学部付属病院</li>
					<li>・東京女子医科大学八千代医療センター</li>
					<li>・日本医科大学千葉北総病院病院</li>
					<li>・東邦大学医療センター佐倉病院</li>
				</ul>
			</section>
		<?php elseif (strpos($url, 'motoyawata') !== false) : ?>
			<section id="renkei">
				<h2>連携医療機関</h2>
				<p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
				<ul>
					<li>・千葉大学医学部付属病院</li>
					<li>・東京女子医科大学八千代医療センター</li>
					<li>・日本医科大学千葉北総病院病院</li>
					<li>・東邦大学医療センター佐倉病院</li>
				</ul>
			</section>
		<?php else : ?>
			<section id="renkei">
					<h2>連携医療機関</h2>
					<p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
					<ul>
						<li>・済生会加須病院</li>
						<li>・新久喜総合病院</li>
						<li>・東埼玉総合病院</li>
						<li>・新井病院</li>
						<li>・東鷲宮病院</li>
						<li>・白岡中央総合病院</li>
						<li>・久喜すずのき病院</li>
						<li>・埼玉県立がんセンター</li>
						<li>・東京女子医科大学病院</li>
						<li>・上尾中央総合病院</li>
						<li>・羽生総合病院</li>
						<li>・古河総合病院</li>
					</ul>
			</section>
		<?php endif; ?>
		<section class="graf">
			<h2>グループ診療実績</h2>
			<h3 class="wow scale" data-wow-duration="2s">「しっかりした医療」<br>を<br>「しっかりとした医師で」</h3>
			<p class="txt">地域の医療をリードする存在として、丁寧かつ適切な在宅医療を提供しています。<br>一人ひとりの患者様と向き合えるような診療スケジュールを組んでいます。</p>
			<ul>
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/graf.php'); ?>
			</ul>
		</section>
		<section id="gallery" aa>
			<h2>施設ギャラリー</h2>
			<?php
				$url = $_SERVER['REQUEST_URI'];
				if (strpos($url, 'kinshichou') !== false) :
			?>
				<div class="gallery_kinshichou">
					<p>錦糸町</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/common/images/gallery_kinshichou_1.jpg" alt="外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/common/images/gallery_kinshichou_5.jpg" alt="待合室" loading="lazy">
								<figcaption class="tal">待合室</figcaption>
							</figure>
							<figure class="ml">
								<img src="/common/images/gallery_kinshichou_3.jpg" alt="事務室" loading="lazy">
								<figcaption class="tal">事務室</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_shinkoiwa">
					<p>新小岩</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/shinkoiwa/guide/images/gallery_shinkoiwa_v2.jpg" alt="外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/shinkoiwa/guide/images/gallery_shinkoiwa_2.jpg" alt="受付" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/shinkoiwa/guide/images/gallery_shinkoiwa_3.jpg" alt="医局" loading="lazy">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_kitasenju">
					<p>北千住</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/kinshichou/guide/images/gallery_kitasenju_1.jpg" alt="外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/kinshichou/guide/images/gallery_kitasenju_2.jpg" alt="受付" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/kinshichou/guide/images/gallery_kitasenju_3.jpg" alt="医局" loading="lazy">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			<?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
				<div class="gallery_shinkoiwa">
					<p>新小岩</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/shinkoiwa/guide/images/gallery_shinkoiwa_v2.jpg" alt="外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/shinkoiwa/guide/images/gallery_shinkoiwa_2.jpg" alt="受付" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/shinkoiwa/guide/images/gallery_shinkoiwa_3.jpg" alt="医局" loading="lazy">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_kitasenju">
					<p>北千住</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/shinkoiwa/guide/images/gallery_kitasenju_1.jpg" alt="外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/shinkoiwa/guide/images/gallery_kitasenju_2.jpg" alt="受付" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/shinkoiwa/guide/images/gallery_kitasenju_3.jpg" alt="医局" loading="lazy">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_kinshichou">
					<p>錦糸町</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/common/images/gallery_kinshichou_1.jpg" alt="外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/common/images/gallery_kinshichou_5.jpg" alt="待合室" loading="lazy">
								<figcaption class="tal">待合室</figcaption>
							</figure>
							<figure class="ml">
								<img src="/common/images/gallery_kinshichou_3.jpg" alt="事務室" loading="lazy">
								<figcaption class="tal">事務室</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			<?php elseif (strpos($url, 'kitasenju') !== false) : ?>
				<div class="gallery_kitasenju">
					<p>北千住</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/kitasenju/guide/images/gallery_kitasenju_1.jpg" loading=”lazy” alt="外観">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/kitasenju/guide/images/gallery_kitasenju_2.jpg" loading=”lazy” alt="受付">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/kitasenju/guide/images/gallery_kitasenju_3.jpg" loading=”lazy” alt="医局">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div>
					<p>新小岩</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/kitasenju/guide/images/gallery_shinkoiwa_v2.jpg" loading=”lazy” alt="外観">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/kitasenju/guide/images/gallery_shinkoiwa_2.jpg" loading=”lazy” alt="受付">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/kitasenju/guide/images/gallery_shinkoiwa_3.jpg" loading=”lazy” alt="医局">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_kinshichou">
					<p>錦糸町</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/common/images/gallery_kinshichou_1.jpg" alt="外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/common/images/gallery_kinshichou_5.jpg" alt="待合室" loading="lazy">
								<figcaption class="tal">待合室</figcaption>
							</figure>
							<figure class="ml">
								<img src="/common/images/gallery_kinshichou_3.jpg" alt="事務室" loading="lazy">
								<figcaption class="tal">事務室</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			<?php elseif (strpos($url, 'sakura') !== false) : ?>
				<div class="gallery_kitasenju">
					<p>佐倉</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/sakura/guide/images/sakura_gallery_01.jpg" alt="ふたば在宅クリニック 佐倉院 外観" loading=”lazy”>
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/sakura/guide/images/sakura_gallery_02.jpg" alt="ふたば在宅クリニック 佐倉院 受付" loading=”lazy”>
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/sakura/guide/images/sakura_gallery_03.jpg" alt="ふたば在宅クリニック 佐倉院 待合室" loading=”lazy”>
								<figcaption class="tal">待合室</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_box">
					<p>本八幡</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/common/images/motoyawata_gallery_01.jpg" alt="ふたば在宅クリニック 本八幡院 外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_kitanarashino">
					<p>北習志野</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/common/images/kitanarashino_gallery_01.jpg" alt="ふたば在宅クリニック 北習志野院 外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div>
					<p>八千代</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/sakura/guide/images/yachiyo_gallery_01.jpg" loading=”lazy” alt="ふたば在宅クリニック 八千代院 外観">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/sakura/guide/images/yachiyo_gallery_02.jpg" loading="”lazy”" alt="ふたば在宅クリニック 八千代院 受付">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/sakura/guide/images/yachiyo_gallery_03.jpg" loading="”lazy”" alt="ふたば在宅クリニック 八千代院 エントランス">
								<figcaption class="tal">エントランス</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			<?php elseif (strpos($url, 'yachiyo') !== false) : ?>
				<div class="gallery_box">
					<p>八千代</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/sakura/guide/images/yachiyo_gallery_01.jpg" loading=”lazy” alt="ふたば在宅クリニック 八千代院 外観">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/sakura/guide/images/yachiyo_gallery_02.jpg" loading="”lazy”" alt="ふたば在宅クリニック 八千代院 受付">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/sakura/guide/images/yachiyo_gallery_03.jpg" loading="”lazy”" alt="ふたば在宅クリニック 八千代院 エントランス">
								<figcaption class="tal">エントランス</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_box">
					<p>本八幡</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/common/images/motoyawata_gallery_01.jpg" alt="ふたば在宅クリニック 本八幡院 外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_kitanarashino">
					<p>北習志野</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/common/images/kitanarashino_gallery_01.jpg" alt="ふたば在宅クリニック 北習志野院 外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div>
					<p>佐倉</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/yachiyo/guide/images/sakura_gallery_01.jpg" loading="”lazy”" alt="ふたば在宅クリニック 佐倉院 外観">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/yachiyo/guide/images/sakura_gallery_02.jpg" loading="”lazy”" alt="ふたば在宅クリニック 佐倉院 受付">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/yachiyo/guide/images/sakura_gallery_03.jpg" loading="”lazy”" alt="ふたば在宅クリニック 佐倉院 待合室">
								<figcaption class="tal">待合室</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			<?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
				<div class="gallery_kitanarashino">
					<p>北習志野</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/common/images/kitanarashino_gallery_01.jpg" alt="ふたば在宅クリニック 北習志野院 外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_box">
					<p>本八幡</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/common/images/motoyawata_gallery_01.jpg" alt="ふたば在宅クリニック 本八幡院 外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div>
					<p>佐倉</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/yachiyo/guide/images/sakura_gallery_01.jpg" loading="”lazy”" alt="ふたば在宅クリニック 佐倉院 外観">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/yachiyo/guide/images/sakura_gallery_02.jpg" loading="”lazy”" alt="ふたば在宅クリニック 佐倉院 受付">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/yachiyo/guide/images/sakura_gallery_03.jpg" loading="”lazy”" alt="ふたば在宅クリニック 佐倉院 待合室">
								<figcaption class="tal">待合室</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_box">
					<p>八千代</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/sakura/guide/images/yachiyo_gallery_01.jpg" loading=”lazy” alt="ふたば在宅クリニック 八千代院 外観">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/sakura/guide/images/yachiyo_gallery_02.jpg" loading="”lazy”" alt="ふたば在宅クリニック 八千代院 受付">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/sakura/guide/images/yachiyo_gallery_03.jpg" loading="”lazy”" alt="ふたば在宅クリニック 八千代院 エントランス">
								<figcaption class="tal">エントランス</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			<?php elseif (strpos($url, 'motoyawata') !== false) : ?>
				<div class="gallery_box">
					<p>本八幡</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/common/images/motoyawata_gallery_01.jpg" alt="ふたば在宅クリニック 本八幡院 外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_kitanarashino">
					<p>北習志野</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/common/images/kitanarashino_gallery_01.jpg" alt="ふたば在宅クリニック 北習志野院 外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml pc">
								<img src="/common/images/noimage.jpg" alt="noimage" loading="lazy">
								<figcaption class="tal">医局</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div>
					<p>佐倉</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/yachiyo/guide/images/sakura_gallery_01.jpg" loading="”lazy”" alt="ふたば在宅クリニック 佐倉院 外観">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/yachiyo/guide/images/sakura_gallery_02.jpg" loading="”lazy”" alt="ふたば在宅クリニック 佐倉院 受付">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/yachiyo/guide/images/sakura_gallery_03.jpg" loading="”lazy”" alt="ふたば在宅クリニック 佐倉院 待合室">
								<figcaption class="tal">待合室</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="gallery_box">
					<p>八千代</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/sakura/guide/images/yachiyo_gallery_01.jpg" loading=”lazy” alt="ふたば在宅クリニック 八千代院 外観">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/sakura/guide/images/yachiyo_gallery_02.jpg" loading="”lazy”" alt="ふたば在宅クリニック 八千代院 受付">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/sakura/guide/images/yachiyo_gallery_03.jpg" loading="”lazy”" alt="ふたば在宅クリニック 八千代院 エントランス">
								<figcaption class="tal">エントランス</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			<?php else : ?>
				<div>
					<p>埼玉</p>
					<ul>
						<li>
							<figure class="mr">
								<img src="/kuki/guide/images/gallery_5.jpg" alt="外観" loading="lazy">
								<figcaption class="tal">外観</figcaption>
							</figure>
							<figure class="ml">
								<img src="/kuki/guide/images/gallery_kuki_3.jpg" alt="受付" loading="lazy">
								<figcaption class="tal">受付</figcaption>
							</figure>
							<figure class="ml">
								<img src="/kuki/guide/images/gallery_kuki.jpg" alt="診察室" loading="lazy">
								<figcaption class="tal">診察室</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			<?php endif; ?>
			<div class="gallery_roppongi">
				<p>六本木本部</p>
				<ul>
					<li>
						<figure class="mr">
							<img src="/common/images/gallery_roppongi_1.jpg" loading="”lazy”" alt="外観">
							<figcaption class="tal">外観</figcaption>
						</figure>
						<figure class="ml">
							<img src="/common/images/gallery_roppongi_3.jpg" loading="”lazy”" alt="外観（六本木ヒルズ）">
							<figcaption class="tal">外観（六本木ヒルズ）</figcaption>
						</figure>
						<figure class="ml">
							<img src="/common/images/gallery_roppongi_4.jpg" loading="”lazy”" alt="外観（東京ミッドタウン）">
							<figcaption class="tal">外観（東京ミッドタウン）</figcaption>
						</figure>
					</li>
				</ul>
			</div>
		</section>
		<section id="access">
			<h2>アクセス</h2>
			<?php
				$url = $_SERVER['REQUEST_URI'];
				if (strpos($url, 'kinshichou') !== false) :
			?>
				<p class="txt_01">錦糸町院：錦糸町駅北口徒歩2分です。</p>
				<p class="txt_01">新小岩院：新小岩駅徒歩1分です。</p>
				<p class="txt_01">北千住院：北千住駅徒歩3分です。</p>
				<div class="map_box">
					<p class="map_ttl">錦糸町</p>
					<p class="txt_02">〒130-0013 東京都墨田区錦糸1-4-14 長嶋ビル 4階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.1530599941916!2d139.8110714!3d35.6978509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018894eeb333ba5%3A0x5fd436eb763f93c0!2z44G144Gf44Gw5Zyo5a6F44Kv44Oq44OL44OD44KvIOmMpuezuOeUuiDoqKrllY_oqLrnmYI!5e0!3m2!1sja!2sjp!4v1733887016034!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">新小岩</p>
					<p class="txt_02">〒124-0024 東京都葛飾区新小岩1-49-10 第5デリカビル（メディカルタウン新小岩） 2階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.4192174973014!2d139.85786331618803!3d35.71590718018618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601886049957419b%3A0xdfa3448ad7913fe8!2z44CSMTI0LTAwMjQg5p2x5Lqs6YO96JGb6aO-5Yy65paw5bCP5bKp77yR5LiB55uu77yU77yZ4oiS77yR77yQ!5e0!3m2!1sja!2sjp!4v1614218202939!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">北千住</p>
					<p class="txt_02">〒120-0034 東京都足立区千住2-4オカバツインタワービル イースト 8階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6476.175124360989!2d139.79886927986607!3d35.74865252071452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188e469a7c0001%3A0xbc00b3b3b1377eb7!2z44Kq44Kr44OQ44OE44Kk44Oz44K_44Ov44O844OT44OrIOOCpOODvOOCueODiA!5e0!3m2!1sja!2sjp!4v1614218097434!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			<?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
				<p class="txt_01">新小岩院：新小岩駅徒歩1分です。</p>
				<p class="txt_01">北千住院：北千住駅徒歩3分です。</p>
				<p class="txt_01">錦糸町院：錦糸町駅北口徒歩2分です。</p>
				<div class="map_box">
					<p class="map_ttl">新小岩</p>
					<p class="txt_02">〒124-0024 東京都葛飾区新小岩1-49-10 第5デリカビル（メディカルタウン新小岩） 2階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.4192174973014!2d139.85786331618803!3d35.71590718018618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601886049957419b%3A0xdfa3448ad7913fe8!2z44CSMTI0LTAwMjQg5p2x5Lqs6YO96JGb6aO-5Yy65paw5bCP5bKp77yR5LiB55uu77yU77yZ4oiS77yR77yQ!5e0!3m2!1sja!2sjp!4v1614218202939!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">北千住</p>
					<p class="txt_02">〒120-0034 東京都足立区千住2-4オカバツインタワービル イースト 8階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6476.175124360989!2d139.79886927986607!3d35.74865252071452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188e469a7c0001%3A0xbc00b3b3b1377eb7!2z44Kq44Kr44OQ44OE44Kk44Oz44K_44Ov44O844OT44OrIOOCpOODvOOCueODiA!5e0!3m2!1sja!2sjp!4v1614218097434!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">錦糸町</p>
					<p class="txt_02">〒130-0013 東京都墨田区錦糸1-4-14 長嶋ビル 4階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.1530599941916!2d139.8110714!3d35.6978509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018894eeb333ba5%3A0x5fd436eb763f93c0!2z44G144Gf44Gw5Zyo5a6F44Kv44Oq44OL44OD44KvIOmMpuezuOeUuiDoqKrllY_oqLrnmYI!5e0!3m2!1sja!2sjp!4v1733887016034!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			<?php elseif (strpos($url, 'kitasenju') !== false) : ?>
				<p class="txt_01">北千住：北千住駅徒歩3分です。</p>
				<p class="txt_01">新小岩：新小岩駅徒歩1分です。</p>
				<p class="txt_01">錦糸町院：錦糸町駅北口徒歩2分です。</p>
				<div class="map_box">
					<p class="map_ttl">北千住</p>
					<p class="txt_02">〒120-0034 東京都足立区千住2-4オカバツインタワービル イースト 8階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6476.175124360989!2d139.79886927986607!3d35.74865252071452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188e469a7c0001%3A0xbc00b3b3b1377eb7!2z44Kq44Kr44OQ44OE44Kk44Oz44K_44Ov44O844OT44OrIOOCpOODvOOCueODiA!5e0!3m2!1sja!2sjp!4v1614218097434!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">新小岩</p>
					<p class="txt_02">〒124-0024 東京都葛飾区新小岩1-49-10 第5デリカビル（メディカルタウン新小岩） 2階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.4192174973014!2d139.85786331618803!3d35.71590718018618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601886049957419b%3A0xdfa3448ad7913fe8!2z44CSMTI0LTAwMjQg5p2x5Lqs6YO96JGb6aO-5Yy65paw5bCP5bKp77yR5LiB55uu77yU77yZ4oiS77yR77yQ!5e0!3m2!1sja!2sjp!4v1614218202939!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">錦糸町</p>
					<p class="txt_02">〒130-0013 東京都墨田区錦糸1-4-14 長嶋ビル 4階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.1530599941916!2d139.8110714!3d35.6978509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018894eeb333ba5%3A0x5fd436eb763f93c0!2z44G144Gf44Gw5Zyo5a6F44Kv44Oq44OL44OD44KvIOmMpuezuOeUuiDoqKrllY_oqLrnmYI!5e0!3m2!1sja!2sjp!4v1733887016034!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			<?php elseif (strpos($url, 'sakura') !== false) : ?>
				<p class="txt_01">佐倉院：京成臼井駅前 南口徒歩30秒です。</p>
				<p class="txt_01">本八幡院：本八幡駅前 徒歩3分です。</p>
				<p class="txt_01">北習志野院：北習志野駅前 徒歩1分です。</p>
				<p class="txt_01">八千代院：勝田台駅前 北口徒歩30秒です。</p>
				<div class="map_box">
					<p class="map_ttl">佐倉</p>
					<p class="txt_02">〒285-0837 千葉県佐倉市王子台1丁目22-13 海佑ビル 1階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.8502708135566!2d140.17943431505626!3d35.729900734909066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228627a47257af%3A0x676b752f3a1e3332!2z44CSMjg1LTA4Mzcg5Y2D6JGJ55yM5L2Q5YCJ5biC546L5a2Q5Y-w77yR5LiB55uu77yS77yS4oiS77yR77yTIOa1t-S9keODk-ODqyAx6ZqO!5e0!3m2!1sja!2sjp!4v1654851738574!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">本八幡</p>
					<p class="txt_02">〒272-0021 千葉県市川市八幡3-3-2グランドターミナルタワー1階 J107、J108号</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.135558286528!2d139.92489921101662!3d35.722884527570855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601886d01e498d73%3A0xf32b9d10da3eb4d5!2z44CSMjcyLTAwMjEg5Y2D6JGJ55yM5biC5bed5biC5YWr5bmh77yT5LiB55uu77yTIOOCsOODqeODs-ODieOCv-ODvOODn-ODiuODq-OCv-ODr-ODvOacrOWFq-W5oQ!5e0!3m2!1sja!2sjp!4v1741606192044!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">北習志野</p>
					<p class="txt_02">〒274-0063 千葉県船橋市習志野台2-6-1 小林ビル 3階-C</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.1557865148407!2d140.0432634!3d35.722387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022816f58721529%3A0x1904f08181bcdb5!2z44G144Gf44Gw5Zyo5a6F44Kv44Oq44OL44OD44KvIOWMl-e_kuW_l-mHjiDoqKrllY_oqLrnmYI!5e0!3m2!1sja!2sjp!4v1740631826662!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">八千代</p>
					<p class="txt_02">〒276-0020 千葉県八千代市勝田台北1-9-1 みかど第2ビル 104</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.367715906896!2d140.122466065354!3d35.71717408560706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228744e4b77bbb%3A0x4f357d567a1e83b4!2z44G_44GL44Gp56ysMuODk-ODqw!5e0!3m2!1sja!2sjp!4v1676940195400!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			<?php elseif (strpos($url, 'yachiyo') !== false) : ?>
				<p class="txt_01">八千代院：勝田台駅前 北口徒歩30秒です。</p>
				<p class="txt_01">本八幡院：本八幡駅前 徒歩3分です。</p>
				<p class="txt_01">北習志野院：北習志野駅前 徒歩1分です。</p>
				<p class="txt_01">佐倉院：京成臼井駅前 南口徒歩30秒です。</p>
				<div class="map_box">
					<p class="map_ttl">八千代</p>
					<p class="txt_02">〒276-0020 千葉県八千代市勝田台北1-9-1 みかど第2ビル 104</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.367715906896!2d140.122466065354!3d35.71717408560706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228744e4b77bbb%3A0x4f357d567a1e83b4!2z44G_44GL44Gp56ysMuODk-ODqw!5e0!3m2!1sja!2sjp!4v1676940195400!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">本八幡</p>
					<p class="txt_02">〒272-0021 千葉県市川市八幡3-3-2グランドターミナルタワー1階 J107、J108号</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.135558286528!2d139.92489921101662!3d35.722884527570855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601886d01e498d73%3A0xf32b9d10da3eb4d5!2z44CSMjcyLTAwMjEg5Y2D6JGJ55yM5biC5bed5biC5YWr5bmh77yT5LiB55uu77yTIOOCsOODqeODs-ODieOCv-ODvOODn-ODiuODq-OCv-ODr-ODvOacrOWFq-W5oQ!5e0!3m2!1sja!2sjp!4v1741606192044!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">北習志野</p>
					<p class="txt_02">〒274-0063 千葉県船橋市習志野台2-6-1 小林ビル 3階-C</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.1557865148407!2d140.0432634!3d35.722387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022816f58721529%3A0x1904f08181bcdb5!2z44G144Gf44Gw5Zyo5a6F44Kv44Oq44OL44OD44KvIOWMl-e_kuW_l-mHjiDoqKrllY_oqLrnmYI!5e0!3m2!1sja!2sjp!4v1740631826662!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">佐倉</p>
					<p class="txt_02">〒285-0837 千葉県佐倉市王子台1丁目22-13 海佑ビル 1階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.8502708135566!2d140.17943431505626!3d35.729900734909066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228627a47257af%3A0x676b752f3a1e3332!2z44CSMjg1LTA4Mzcg5Y2D6JGJ55yM5L2Q5YCJ5biC546L5a2Q5Y-w77yR5LiB55uu77yS77yS4oiS77yR77yTIOa1t-S9keODk-ODqyAx6ZqO!5e0!3m2!1sja!2sjp!4v1654851738574!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			<?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
				<p class="txt_01">北習志野院：北習志野駅前 徒歩1分です。</p>
				<p class="txt_01">本八幡院：本八幡駅前 徒歩3分です。</p>
				<p class="txt_01">佐倉院：京成臼井駅前 南口徒歩30秒です。</p>
				<p class="txt_01">八千代院：勝田台駅前 北口徒歩30秒です。</p>
				<div class="map_box">
					<p class="map_ttl">北習志野</p>
					<p class="txt_02">〒274-0063 千葉県船橋市習志野台2-6-1 小林ビル 3階-C</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.1557865148407!2d140.0432634!3d35.722387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022816f58721529%3A0x1904f08181bcdb5!2z44G144Gf44Gw5Zyo5a6F44Kv44Oq44OL44OD44KvIOWMl-e_kuW_l-mHjiDoqKrllY_oqLrnmYI!5e0!3m2!1sja!2sjp!4v1740631826662!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">本八幡</p>
					<p class="txt_02">〒272-0021 千葉県市川市八幡3-3-2グランドターミナルタワー1階 J107、J108号</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.135558286528!2d139.92489921101662!3d35.722884527570855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601886d01e498d73%3A0xf32b9d10da3eb4d5!2z44CSMjcyLTAwMjEg5Y2D6JGJ55yM5biC5bed5biC5YWr5bmh77yT5LiB55uu77yTIOOCsOODqeODs-ODieOCv-ODvOODn-ODiuODq-OCv-ODr-ODvOacrOWFq-W5oQ!5e0!3m2!1sja!2sjp!4v1741606192044!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">佐倉</p>
					<p class="txt_02">〒285-0837 千葉県佐倉市王子台1丁目22-13 海佑ビル 1階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.8502708135566!2d140.17943431505626!3d35.729900734909066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228627a47257af%3A0x676b752f3a1e3332!2z44CSMjg1LTA4Mzcg5Y2D6JGJ55yM5L2Q5YCJ5biC546L5a2Q5Y-w77yR5LiB55uu77yS77yS4oiS77yR77yTIOa1t-S9keODk-ODqyAx6ZqO!5e0!3m2!1sja!2sjp!4v1654851738574!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">八千代</p>
					<p class="txt_02">〒276-0020 千葉県八千代市勝田台北1-9-1 みかど第2ビル 104</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.367715906896!2d140.122466065354!3d35.71717408560706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228744e4b77bbb%3A0x4f357d567a1e83b4!2z44G_44GL44Gp56ysMuODk-ODqw!5e0!3m2!1sja!2sjp!4v1676940195400!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			<?php elseif (strpos($url, 'motoyawata') !== false) : ?>
				<p class="txt_01">本八幡院：本八幡駅前 徒歩3分です。</p>
				<p class="txt_01">北習志野院：北習志野駅前 徒歩1分です。</p>
				<p class="txt_01">佐倉院：京成臼井駅前 南口徒歩30秒です。</p>
				<p class="txt_01">八千代院：勝田台駅前 北口徒歩30秒です。</p>
				<div class="map_box">
					<p class="map_ttl">本八幡</p>
					<p class="txt_02">〒272-0021 千葉県市川市八幡3-3-2グランドターミナルタワー1階 J107、J108号</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.135558286528!2d139.92489921101662!3d35.722884527570855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601886d01e498d73%3A0xf32b9d10da3eb4d5!2z44CSMjcyLTAwMjEg5Y2D6JGJ55yM5biC5bed5biC5YWr5bmh77yT5LiB55uu77yTIOOCsOODqeODs-ODieOCv-ODvOODn-ODiuODq-OCv-ODr-ODvOacrOWFq-W5oQ!5e0!3m2!1sja!2sjp!4v1741606192044!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">北習志野</p>
					<p class="txt_02">〒274-0063 千葉県船橋市習志野台2-6-1 小林ビル 3階-C</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.1557865148407!2d140.0432634!3d35.722387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022816f58721529%3A0x1904f08181bcdb5!2z44G144Gf44Gw5Zyo5a6F44Kv44Oq44OL44OD44KvIOWMl-e_kuW_l-mHjiDoqKrllY_oqLrnmYI!5e0!3m2!1sja!2sjp!4v1740631826662!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">佐倉</p>
					<p class="txt_02">〒285-0837 千葉県佐倉市王子台1丁目22-13 海佑ビル 1階</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.8502708135566!2d140.17943431505626!3d35.729900734909066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228627a47257af%3A0x676b752f3a1e3332!2z44CSMjg1LTA4Mzcg5Y2D6JGJ55yM5L2Q5YCJ5biC546L5a2Q5Y-w77yR5LiB55uu77yS77yS4oiS77yR77yTIOa1t-S9keODk-ODqyAx6ZqO!5e0!3m2!1sja!2sjp!4v1654851738574!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="map_box">
					<p class="map_ttl">八千代</p>
					<p class="txt_02">〒276-0020 千葉県八千代市勝田台北1-9-1 みかど第2ビル 104</p>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.367715906896!2d140.122466065354!3d35.71717408560706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228744e4b77bbb%3A0x4f357d567a1e83b4!2z44G_44GL44Gp56ysMuODk-ODqw!5e0!3m2!1sja!2sjp!4v1676940195400!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			<?php else : ?>
				<p class="txt_01">久喜駅前 東口徒歩30秒です。</p>
				<p class="txt_02">〒346-0016 埼玉県久喜市久喜東1-2-5 東山ビル 3階-A</p>
				<div id="gmap">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3225.1418808794137!2d139.67648695039355!3d36.065643316304005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018c9c4f97c2373%3A0xc2db675b6ac139a6!2z44G144Gf44Gw5Zyo5a6F44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1603605129939!5m2!1sja!2sjp" width="710" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			<?php endif; ?>
		</section>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/sidebar.php'); ?>
</div>
