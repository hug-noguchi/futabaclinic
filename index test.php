<?php require('news/wp-load.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<meta content="width=375,user-scalable=no" name="viewport">
<meta property="og:url" content="https://www.futabaclinic.jp/">
<meta property="og:type" content="website" />
<meta property="og:title" content="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 東京 埼玉 千葉">
<meta property="og:description" content="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック東京都 北千住院 城東エリア（足立区、荒川区）、新小岩院（葛飾区、江戸川区）、埼玉県 埼玉院 佐倉院（佐倉市、印西市、四街道市、八千代市、千葉市、酒々井町、習志野市、船橋市）">

<meta property="og:site_name" content="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック">
<meta property="og:image" content="https://www.futabaclinic.jp/top/images/teacher_01.jpg">
<title>爽緑会グループ ふたば在宅クリニック | 東京都・埼玉県・千葉県の在宅訪問診療所</title>
<meta name="description" content="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック東京都 北千住院 城東エリア（足立区、荒川区、台東区）、新小岩院（葛飾区、江戸川区、墨田区、江東区）、埼玉県 埼玉院 佐倉院（佐倉市、印西市、四街道市、八千代市、千葉市、酒々井町、習志野市、船橋市）在宅医療 訪問診療 訪問看護 往診">

<meta name="keywords" content="ふたば在宅クリニック,在宅療養支援診療所,在宅医療,訪問診療,訪問看護,往診">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
<link rel="stylesheet" type="text/css" href="/common/styles/base.css" media="all">
<link rel="stylesheet" type="text/css" href="/top/styles/style.css" media="all">
<link rel="stylesheet" type="text/css" href="/top/styles/style_02.css" media="all">
<link rel="SHORTCUT ICON" href="/icon.ico">
<link rel="apple-touch-icon-precomposed" href="https://www.futabaclinic.jp/webclip.png">
<!--
<PageMap>
    <DataObject type="thumbnail">
        <Attribute name="src" value="https://www.futabaclinic.jp/common/images/point_2_1_100.jpg">
        <Attribute name="width" value="100">
        <Attribute name="height" value=“100”>
    </DataObject>
</PageMap>
-->
<meta name="thumbnail" content="https://www.futabaclinic.jp/common/images/point_2_1_100.jpg">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header_tag.php'); ?>
</head>

<body id="top" class="preload drawer drawer--top" style="display:block;">
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/analyticstracking.php'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header02.php'); ?>

	<style>
		.news_list .tab li:hover {
			cursor: pointer;
			opacity: .8;
		}
		.news_list .tab .active {
			border-bottom: 1px solid #f48a9d;
			background-color: #f48a9d;
			color: #ffff;
			cursor: unset;
		}
		.tab {
			display: flex;
			justify-content: center;
			margin: auto;
			border-bottom: 3px solid #f48a9d;
		}

		.tab li {
			font-size: 18px;
			cursor: pointer;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 8px 0;
			text-align: center;
			width: calc(100% / 3);
			background-color: #fff0f3;
		}
		.tab li:hover {
				cursor: pointer;
				opacity: .8;
		}
		.news_show .show {
				display: none;
		}
		.news_show .show.active {
				display: block;
		}
		.tab_area {
			display: flex;
			justify-content: center;
			margin: auto;
			border-bottom: 3px solid #f48a9d;
		}
		.tab_area .tab {
			font-size: 18px;
			cursor: pointer;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 8px 0;
			text-align: center;
			width: calc(100% / 3);
			background-color: #fff0f3;
		}
		.panel_area {
			padding: 60px 0;
			border-left: 1px solid #fff0f3;
			border-right: 1px solid #fff0f3;
			border-bottom: 1px solid #fff0f3;
		}
		.panel_inner {
			overflow: hidden;
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}
		#main section#bunin_box .txt_box_04 {
			width: 100% !important;
			padding-top: 0 !important;
		}
		@media (min-width: 961px) {
			#main section#bunin_box .txt_box_yachiyo {
				float: unset!important;
				margin-right: unset!important;
			}
		}
		@media (min-width: 813px) {
			#main section#bunin_box .txt_box_05,
			#main section#bunin_box .txt_box_03,
			#main section#bunin_box .txt_box_02,
			#main section#bunin_box .txt_box_sakura,
			#main section#bunin_box .txt_box_yachiyo {
				width: 40%!important;
			}
			#main section#bunin_box .txt_box_sakura {
					margin-right: unset!important;
			}
		}
		@media screen and (max-width: 767px) {
			.panel_area {
				padding: 50px 0;
			}
		}
		@media (max-width: 480px) {
			.panel_inner {
				display: block;
			}
			.tab_area .tab {
				font-size: 16px;
			}
			#main section#bunin_box .txt_box_05,
			#main section#bunin_box .txt_box_03,
			#main section#bunin_box .txt_box_02 {
				width: 100%;
			}
			#main section#bunin_box .txt_box_03 {
				padding-top: 63px;
			}
		}
		#main section#sec_07 table .icon {
			width: 13%;
		}
		#main section#sec_07 table .icon span {
			background-color: #f48a9d;
			color: #fff;
			margin-bottom: 5px;
			text-align: center;
			padding: 3px 10px;
		}
		#main section#sec_07 table .title {
			width: 60%;
		}
		#main section#sec_07 table td a {
			text-decoration: underline;
		}
		#main section#sec_07 table td a:hover {
			text-decoration: none;
		}
		@media screen and (min-width: 813px) {
			#main #news section:last-child {
				margin: -100px 0 80px !important;
			}
		}
		@media all and (min-width: 481px) {
			section#sec_07 p {
				margin-top: 3px !important;
			}
		}
		@media all and (max-width: 480px) {
			#main section#sec_07 table td a {
				line-height: 1.4;
			}
			#main section#sec_07 p a {
				padding: 3px 17px 2px 9px;
			}
			#main span.new {
				margin-bottom: 5px;
			}
			#main section#sec_07 li {
				padding-right: 16px;
			}
			#main .top table .tag_title a {
				text-align: center;
				color: #fff;
				padding: 8px;
				border: none!important;
				padding: 2px 0 2px 9px!important;
				background: none;
			}
			#main .top table td.post_title {
				width: 100% !important;
			}
		}
		@media all and (max-width: 375px) {
			#main section#sec_07 p a {
				padding: 4px 17px 2px 9px;
			}
		}
		@media all and (max-width: 360px) {
			#main section#sec_07 table th {
				padding-left: 6px;
				width: 158px;
			}
			#main section#sec_07 table span.new {
				padding: 3px 8px 1px;
			}
		}
		@media all and (max-width: 320px) {
			#main section#sec_07 table th {
				padding-left: 0;
				width: 153px;
			}
		}
		.graf_list li:nth-child(1) img,
		.graf_list li:nth-child(2) img {
			width: 450px;
			height: 254px;
		}
		/* バナー */
		.banner_article_new {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}
		.banner_article_new a {
			width: 49%;
		}
		@media all and (max-width: 480px) {
			.banner_article_new {
				display: block;
			}
		}
	</style>

	<article id="wrap">
		<div id="contents_wrap">
			<section>
				<div id="pic_box">
					<img class="mv" src="/top/images/point_2_1.jpg" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 在宅医療・訪問診療・往診 新小岩院建物">
					<div class="item is-1"><img src="/top/images/text1.png" alt="患者様を家族と思い"></div>
					<div class="item is-2"><img src="/top/images/text2.png" alt="地域と共に成長し、"></div>
					<div class="item is-3"><img src="/top/images/text3.png" alt="真の社会貢献を目指す。"></div>
					<div class="item is-4"><img src="/top/images/text4.png" alt="訪問診療に特化したクリニックです。"></div>
				</div>
			</section>

			<!-- <video controls poster="/common/images/video_thum.jpg">
				<source src="/common/media/movie_shuukan.mp4" type="video/mp4">
				<a href="/common/media/movie_shuukan.mp4">MP4</a>
			</video> -->

			<section class="sec_01 maru fadeIn">
				<div class="txt_box_01">
					<div class="fukidashi">
						<p class="tit_01">「動く総合病院」<br class="sp">を目指しています！！</p>
					</div>
				</div>
			</section>

			<div id="contents">
				<div id="main">
					<div class="map_top maru fadeIn" style="visibility: visible; animation-name: fadeIn;">
						<img src="/common/images/recruit_map5.png" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 六本木本部 埼玉院 北千住院 新小岩院 錦糸町院 佐倉院 八千代院 本八幡院 北習志野院" class="pc">
						<img src="/common/images/recruit_map5_sp.png" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 六本木本部 埼玉院 北千住院 新小岩院 錦糸町院 佐倉院 八千代院 本八幡院 北習志野院" class="sp">
					</div>

					<section id="bunin_box">
						<div class="txt_box_01">
							<p class="tit_01">お問い合わせ・詳細は各院ホームページから</p>
						</div>
						<div class="news_list">
							<ul class="tab tab_area">
								<li class="active">東京</li>
								<li class="">千葉</li>
								<li class="">埼玉</li>
							</ul>
							<div class="news_show">
								<div class="txt_box_00 tab_tokyo show active">
									<div class="panel_area content_area">
										<div class="panel_inner">
											<div class="txt_box_05">
												<div class="roppongi_toho">
														<p class="txt_18">六本木本部｜<span>東京ミッドタウン前</span></p>
												</div>
												<div class="photo_roppongi">
													<img src="/top/images/roppongi_picture.jpg" srcset="/top/images/roppongi_picture_2x.jpg" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 六本木本部" />
												</div>
												<div class="roppongi_adress">
													<p class="txt_19">
														〒106-0032 東京都港区六本木7-8-7<br>
														ハイホーム六本木ビル3階
													</p>
												</div>
												<p class="txt_20">取材、営業、求人は本部へ</p>
												<p class="txt_21">
													<a class="shiny-btn-roppongi" href="tel:0358430151">
														<span>03-5843-0151</span>
													</a>
												</p>
												<p class="btn_roppongi_box">
													<a class="shiny-btn-roppongi" href="mailto:recruit@futabaclinic.jp">
														<span class="btn_roppongi_box_txt">お問い合わせ</span>
													</a>
												</p>
												<p class="txt_22">※患者様についてのお問い合わせは<br>各クリニックにご連絡ください</p>
											</div>
											<div class="txt_box_02 kinshichou_box">
												<a class="title" href="/kinshichou/">
													<div class="kinshichou_toho">
															<p class="txt_08 txt_kinshichou">錦糸町院｜<span>錦糸町駅 徒歩2分</span></p>
													</div>
													<div class="photo_kinshichou">
														<img src="/top/images/top_kinshichou_picture.jpg" srcset="/top/images/top_kinshichou_picture_2x.jpg" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 錦糸町院" />
													</div>
													<ul>
														<li>墨田区</li>
														<li>江東区</li>
														<li>台東区</li>
													</ul>
												</a>
												<p class="txt_09">の患者様はこちら</p>
												<p class="txt_10">
													<a class="shiny-btn-kinshichou" href="/kinshichou/">
														<span>錦糸町院 HP</span>
													</a>
												</p>
												<p class="clinic_contact"><a href="/contact/input_kinshichou/">錦糸町院お問い合わせはこちら</a></p>
											</div>
											<div class="txt_box_03">
												<a class="title" href="/shinkoiwa/">
													<div class="shinkoiwa_toho">
															<p class="txt_12">新小岩院｜<span>新小岩駅 徒歩1分</span></p>
													</div>
													<div class="photo_shinkoiwa">
														<img src="/top/images/shinkoiwa_picture_02_v2.jpg" srcset="/top/images/shinkoiwa_picture_02_v2_2x.jpg" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 新小岩院" />
													</div>
													<ul>
														<li>葛飾区</li>
														<li>江戸川区</li>
													</ul>
												</a>
												<p class="txt_13">の患者様はこちら</p>
												<p class="txt_14">
													<a class="shiny-btn-edogawa" href="/shinkoiwa/">
														<span>新小岩院 HP</span>
													</a>
												</p>
												<p class="clinic_contact"><a href="/contact/input_shinkoiwa/">新小岩院お問い合わせはこちら</a></p>
											</div>
											<div class="txt_box_02">
												<a  class="title" href="/kitasenju/">
													<div class="kitasenju_toho">
															<p class="txt_08">北千住院｜<span>北千住駅 徒歩3分</span></p>
													</div>
													<div class="photo_kitasenju">
														<img src="/top/images/kitasenju_picture.jpg" srcset="/top/images/kitasenju_picture_2x.jpg" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 北千住院" />
													</div>
													<ul>
														<li>足立区</li>
														<li>荒川区</li>
													</ul>
												</a>
												<p class="txt_09">の患者様はこちら</p>
												<p class="txt_10">
													<a class="shiny-btn-kitasenju" href="/kitasenju/">
														<span>北千住院 HP</span>
													</a>
												</p>
												<p class="clinic_contact"><a href="/contact/input_kitasenju/">北千住院お問い合わせはこちら</a></p>
											</div>
										</div>
									</div>
								</div>

								<div class="txt_box_00 chiba_box show">
									<div class="panel_area content_area">
										<div class="panel_inner">
											<div class="txt_box_sakura">
												<a class="title" href="/sakura/">
													<div class="sakura_toho">
															<p class="txt_08">佐倉院｜<span>京成臼井駅 徒歩30秒</span></p>
													</div>
													<div class="photo_sakura">
														<img src="/top/images/all_sakura_picture.jpg" srcset="/top/images/all_sakura_picture_2x.jpg" alt="医療法人社団 千葉爽緑会 ふたば在宅クリニック 佐倉院" />
													</div>
													<ul>
														<li>佐倉市</li>
														<li>印西市</li>
														<li>四街道市</li>
														<li>酒々井町</li>
													</ul>
												</a>
												<p class="txt_09">の患者様はこちら</p>
												<p class="txt_10">
													<a class="shiny-btn-sakura" href="/sakura/">
														<span>佐倉院 HP</span>
													</a>
												</p>
												<p class="clinic_contact"><a href="/contact/input_sakura/">佐倉院お問い合わせはこちら</a></p>
											</div>
											<div class="txt_box_yachiyo">
												<a class="title" href="/yachiyo/">
													<div class="yachiyo_toho">
															<p class="txt_08">八千代院｜<span>勝田台駅 徒歩30秒</span></p>
													</div>
													<div class="photo_yachiyo">
														<img src="/top/images/top_yachiyo_picture.jpg" srcset="/top/images/top_yachiyo_picture_2x.jpg" alt="医療法人社団 千葉爽緑会 ふたば在宅クリニック 八千代院" />
													</div>
													<ul>
														<li>八千代市</li>
														<li>千葉市</li>
													</ul>
												</a>
												<p class="txt_09">の患者様はこちら</p>
												<p class="txt_10">
													<a class="shiny-btn-yachiyo" href="/yachiyo/">
														<span>八千代院 HP</span>
													</a>
												</p>
												<p class="clinic_contact"><a href="/contact/input_yachiyo/">八千代院お問い合わせはこちら</a></p>
											</div>
											<div class="txt_box_kitanarashino">
												<a class="title" href="/kitanarashino/">
													<div class="kitanarashino_toho">
															<p class="txt_08">北習志野院｜<span>北習志野駅前 徒歩1分</span></p>
													</div>
													<div class="photo_bunin photo_kitanarashino">
														<img src="/top/images/top_kitanarashino_picture.jpg" srcset="/top/images/top_kitanarashino_picture_2x.jpg" alt="医療法人社団 千葉爽緑会 ふたば在宅クリニック 北習志野院" />
													</div>
													<ul>
														<li>船橋市</li>
														<li>習志野市</li>
													</ul>
												</a>
												<p class="txt_09">の患者様はこちら</p>
												<p class="txt_10">
													<a class="shiny-btn-kitanarashino" href="/kitanarashino/">
														<span>北習志野院 HP</span>
													</a>
												</p>
												<p class="clinic_contact"><a href="/contact/input_kitanarashino/">北習志野院お問い合わせはこちら</a></p>
											</div>
											<div class="txt_box_motoyawata">
												<a class="title" href="/motoyawata/">
													<div class="motoyawata_toho">
															<p class="txt_12">本八幡院｜<span>本八幡駅前 徒歩3分</span></p>
													</div>
													<div class="photo_bunin">
														<img src="/common/images/top_motoyawata_picture.jpg" srcset="/common/images/top_motoyawata_picture_2x.jpg" alt="医療法人社団 千葉爽緑会 ふたば在宅クリニック 本八幡院" />
													</div>
													<ul>
														<li>市川市</li>
														<li>浦安市</li>
													</ul>
												</a>
												<p class="txt_09">の患者様はこちら</p>
												<p class="txt_10">
													<a class="shiny-btn-motoyawata" href="/motoyawata/">
														<span>本八幡院 HP</span>
													</a>
												</p>
												<p class="clinic_contact"><a href="/contact/input_motoyawata/">本八幡院お問い合わせはこちら</a></p>
											</div>
										</div>
									</div>
								</div>

								<div class="txt_box_00 show">
									<div class="panel_area content_area">
										<div class="panel_inner">
											<div class="txt_box_04">
												<a  class="title" href="/kuki/">
													<div class="kukiin_toho">
															<p class="txt_15">埼玉院｜<span>久喜駅 徒歩30秒</span></p>
													</div>
													<div class="photo_kukiin">
														<img src="/top/images/kukiin_picture.jpg" srcset="/top/images/kukiin_picture_2x.jpg" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 埼玉院" />
													</div>
													<ul>
														<li>久喜市</li>
														<li>加須市</li>
														<li>幸手市</li>
														<li>杉戸町</li>
														<li>宮代町</li>
														<li>白岡市</li>
														<li>蓮田市</li>
														<li>春日部市</li>
													</ul>
												</a>
												<p class="txt_16">の患者様はこちら</p>
												<p class="txt_17">
													<a class="shiny-btn-kukiin" href="/kuki/">
														<span>埼玉院 HP</span>
													</a>
												</p>
												<p class="clinic_contact"><a href="/contact/input/">埼玉院お問い合わせはこちら</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="illust_3">
							<img src="/top/images/illust_3.png" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 医師">
						</div>
					</section>

					<div class="banner_article banner_article_new">
						<a href="/link.html" target="_blank">
							<img src="/recruit/images/banner_v3.gif" alt="統括院長がリクルートドクターズキャリアに特集されました！リクルートドクターズキャリア" class="bnr_riji">
						</a>
						<a href="https://dot.asahi.com/articles/-/206434?page=2" target="_blank">
							<img src="/common/images/banner_v5.gif" alt="AREA誌の「在宅見取り件数が多い診療所」に掲載されました！" class="bnr_riji">
						</a>
						<a href="https://zaita9iryou.com/22780/" target="_blank">
							<img src="/common/images/banner_v6.gif" alt="統括院長がおうちde医療に特集されました！">
						</a>
						<a href="https://clinic.mynavi.jp/article/edogawaku_house-call-medicine/" target="_blank">
							<img src="/common/images/banner_v7.gif" alt="マイナビの「訪問診療クリニックおすすめ5選」に掲載されました！">
						</a>
					</div>

			<section id="sec_07" class="top">
				<h2>お知らせ</h2>
				<p class="ichiran"><a href="/news/all/">一覧はこちら</a></p>
				<table>
					<?php
					$posts = get_posts("numberposts=5&orderby=post_date&offset=0&post_type=all");
					if( !empty( $posts ) ) :
					foreach ($posts as $post):
					setup_postdata($post);
					?>
					<tr class="pc">
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
								$days=7;
								$today=date('U'); $entry=get_the_time('U');
								$diff1=date('U',($today - $entry))/86400;
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
					<?php endforeach; ?>
					<?php elseif( empty( $posts ) ): ?>
						<tr>
							<td style="padding-left: 20px;">現在準備中です</td>
						</tr>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</table>
			</section>

			<section id="message">
				<h2>理事長・統括院長挨拶</h2>
				<div class="box_wrap">
					<div class="box">
						<img class="pc" src="/top/images/pc_photo_01.jpg" srcset="/top/images/pc_photo_01_2x.jpg 2x" alt="医療法人社団 爽緑会・千葉爽緑会 理事長 石井 成伸">
						<img class="sp" src="/top/images/sp_photo_01.jpg" srcset="/top/images/sp_photo_01_2x.jpg 2x" alt="医療法人社団 爽緑会・千葉爽緑会 理事長 石井 成伸">
						<div class="txt_box">
							<h3>
								<span class="border">
									<span class="txt_01">理事長・統括院長</span> <br class="sp">石井 成伸
									<span class="txt_02">（いしい まさのぶ）</span>
								</span>
							</h3>
							<dl>
								<dt>[資格]</dt>
								<dd>
									日本内科学会認定 内科認定医<br>
									日本呼吸器学会認定 呼吸器専門医<br>
									がん緩和ケア研修会修了医<br>
									認知症サポート医<br>
									難病指定医<br>
									臨床研修医指導医<br>
									日本医師会正会員
								</dd>
							</dl>
							<dl>
								<dt>[経歴]</dt>
								<dd>
									東京女子医科大学病院 第一内科<br>
									恩賜財団済生会支部埼玉県済生会病院 呼吸器内科
								</dd>
							</dl>
						</div>
					</div>
					<div class="txt_box_02 message_box">
						<p>
							皆様、ふたば在宅クリニックのホームページをご覧いただきありがとうございます。<br>
							理事長・統括院長の石井成伸と申します。
						</p>
						<p>
							私は、これまで東京女子医科大学病院、済生会病院などの急性期総合病院に勤務し、内科、呼吸器科、救急医療、がん治療・緩和ケアを中心に診療をしてまいりました。
						</p>
						<p>
							地域の総合病院に勤務していると、外来は車椅子や杖等でご家族と通院してくる患者様であふれ、病棟では入院が長引いたり、入退院をくりかえす方が多く、ご家族とともに、身体的、精神的に疲弊していく姿を度々見かけました。<br>
							医療従事者側も日々の外来診療、病棟業務に追われて疲弊している状況でした。<br>
							また、急性期総合病院は長期入院が困難になっており、行き場を失う患者様も残念ながら少なくありませんでした。
						</p>
						<p>
							このような現状を打破し、より良い地域医療を提供するためには、患者様、ご家族はもちろん、医療従事者側の負担も減らせるような、スムーズな医療連携の構築が必要と考え、病院、外来診療所とは役割の異なる「動く病院」として、「ご自宅での予防、治療」を行う必要があると考えました。
						</p>
						<p>
							そこで、2017年6月に、当時勤務していた済生会病院のあった埼玉県久喜市に、訪問診療に特化した、「ふたば在宅クリニック」を開院しました。
						</p>
						<p>
							皆様ご存知のように埼玉県は人口当たりの医師数が全国最低という過酷な医療過疎地であり、その中でも北東部の医療崩壊は目を見張るものがありました。<br>
							そのような環境の中で、診療はもとより、在宅医療の啓蒙、地域連携システムの構築、就労環境の整備等、がむしゃらに取り組み、厚生労働省より機能強化型在宅療養支援診療所・在宅緩和ケア充実診療所に指定されるまでになりました。
						</p>
						<p>
							また、当法人の理念は「真の社会貢献」であり、日本一過酷な医療過疎地、埼玉で養ったノウハウを他の地域でも活かして、より社会貢献をしていきたいと考えるようになりました。<br>
							そのため、2021年以降、東京六本木に本部を設置し、東京（北千住・新小岩・錦糸町）、千葉（佐倉・八千代・北習志野・本八幡）と、分院展開を進めております。
						</p>
						<p>
							当法人の特徴としましては、各科の学会認定専門医を中心に、皮膚科・精神科に至るまで、複数科の医師を配置し、X線レントゲン装置、エコー、輸血まで対応できるポータブル医療機器を取り揃え、総合病院のような質の高いチーム医療を提供していることです。<br>
							また、夜間休日オンコール体制の充実を目指し、常に当院の医師・看護部が待機し、2名体制での往診を徹底しています。<br>
							もちろん、在宅医療は看取りだけが全てではありませんが、グループ全体での年間看取り数も500人を超すようになり、全国有数の在宅診療所に成長できたと自負しております。<br>
							今後も地域の病院や訪問看護師さん・薬剤師さん・ケアマネージャーさんと連携を密に取り、一般内科疾患、心・肺・脳神経・整形疾患、がん終末期、認知症などの診療に力を入れてまいります。
						</p>
						<p>
							最後に、クリニック名の「ふたば」には、患者様、ご家族とわれわれ医療介護従事者の二つの葉を、少しずつ大きな樹になるように共に育んでいきたいという意味が込められています。<br>
							対話を重視し、より良い療養生活を送れるように、地域の中核病院とも連携を取りながらサポートさせていただきます。
						</p>
						<div class="name_sign"></div>
					</div>
				</div>
				<div class="clinic_lists">
					<ul>
						<li><a href="/kinshichou/">錦糸町院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/shinkoiwa/">新小岩院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/kitasenju/">北千住院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/motoyawata/">本八幡院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/kitanarashino/">北習志野院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/sakura/">佐倉院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/yachiyo/">八千代院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/kuki/">埼玉院 HPはこちら	&gt;	&gt;</a></li>
					</ul>
				</div>
			</section>

			<section id="about">
				<h2>訪問診療とは</h2>
				<p>
					在宅医療・診療（訪問診療）とは、通院が困難な患者さんに対して、医師がご自宅を定期的に（月2回〜）訪問して診療を行うことです。
				</p>
				<p>
					病気の治療・予防を中心に行い、緊急時には24時間365日対応いたします。
				</p>
				<p>
					病状に応じて、連携病院への入院やご自宅での治療など適切に対応いたします。
				</p>
				<p>
					病状が安定した方も治療が必要な方も気軽にご相談ください。
				</p>
				<div class="about_character">
					<ul>
						<li>外来に行かなくていい！</li>
						<li>家に医師がうかがいます！</li>
						<li>緊急時も24時間対応！</li>
					</ul>
				</div>
				<div class="about_image">
					<img src="/common/images/teacher_04.jpg" alt="訪問診療とは">
				</div>
				<p class="about_pink">
					ひとりで通院ができなくなった方であれば誰でも対象となります。
				</p>
				<p>
					ご自宅でのんびり静養したい方はもちろん、グループホームや高齢者施設に入院中の方もお気軽にお問い合わせください。
				</p>
				<ul>
					<li>
						<span class="check">
							<img src="/common/images/icon_check_02.svg">
						</span>
						<span class="border">
							通院が大変、外来の待ち時間が長くて大変な方
						</span>
					</li>
					<li>
						<span class="check">
							<img src="/common/images/icon_check_02.svg">
						</span>
						<span class="border">
							ご家族の通院付き添いが大変な方
						</span>
					</li>
					<li>
						<span class="check">
							<img src="/common/images/icon_check_02.svg">
						</span>
						<span class="border">
							入院せずに、ご自宅で治療を受けたい方
						</span>
					</li>
					<li>
						<span class="check">
							<img src="/common/images/icon_check_02.svg">
						</span>
						<span class="border">
							ご自宅での終末期医療、緩和ケアを望む方
						</span>
					</li>
					<li>
						<span class="check">
							<img src="/common/images/icon_check_02.svg">
						</span>
						<span class="border">
							退院後のご自宅での療養が不安な方
						</span>
					</li>
					<li>
						<span class="check">
							<img src="/common/images/icon_check_02.svg">
						</span>
						<span class="border">
							いつでも気軽に相談できるかかりつけ医をお探<span class="border_02">しの方</span>
						</span>
					</li>
					<li>
						<span class="check">
							<img src="/common/images/icon_check_02.svg">
						</span>
						<span class="border">
							独居高齢者の安否確認が必要な方
						</span>
					</li>
					<li>
						<span class="check">
							<img src="/common/images/icon_check_02.svg">
						</span>
						<span class="border">
							主治医意見書が必要な方
						</span>
					</li>
				</ul>
			</section>

			<section id="sec_02">
				<h2>ふたばの特色</h2>
				<div class="lead">
					<div class="futaba-style">
						<div class="label">FUTABA STYLE</div>
						<h3>「ふたば式」在宅医療</h3>
					</div>
					<p class="lead_txt">
						年間看取り500人を超える全国有数の在宅医療専門クリニックに成長させた、<br class="pc">
						独自のシステムを活かし、地域貢献を目指します。<br>
						医師＋看護師のダブルオンコール体制、複数科のチーム医療、地域連携室の設置など、<br class="pc">
						当院ならではのシステムがあります。
					</p>
				</div>
				<div>
					<h3><span>地域密着</span></h3>
					<div class="pink">
						<p>
							当法人は、在宅医療を通じて「真の社会貢献」を目指しています。
							<br><br>
							専属の看護師、ソーシャルワーカーによる地域連携室を設置し、地域の中核病院と密な連携を取り、<br class="pc">様々な医療介護従事者と協力し合い、地域の在宅医療の充実を目指します。
						</p>
					</div>
				</div>
				<div>
					<h3><span>動く病院<br>&nbsp;&nbsp;- 24時間365日医師が対応 -</span></h3>
					<div class="pink">
						<p>
							当院は、「動く病院」をモットーに、外来通院や入院をしないでも、<br class="pc">自宅にいながら病院と変わらない24時間365日対応の医療を提供できるよう努めます。
							<br><br>
							夜間・休日も医師＋看護部のダブルオンコール体制をしいており、<br>
							24時間365日、2名体制で訪問しています。
							<br><br>
							レントゲン、エコー、輸血も対応可能です。
						</p>
					</div>
				</div>
				<div>
					<h3><span>複数専門科のチーム医療</span></h3>
					<div class="pink">
						<p>
							急性期医療、がん治療・緩和ケアの経験豊富な医師がご自宅にうかがい診療します。<br>
							特に、がんや心臓、肺、脳神経、整形疾患はお任せください。
							<br><br>
							当院は各科の専門医が所属しており、複数科でチームを組んで診療します。<br>
							精神科、皮膚科の往診を行っているのも当法人の特徴です。
						</p>
					</div>
				</div>
				<div>
					<h3><span>フットワーク</span></h3>
					<div class="pink">
						<p>
							日中は複数の医師が巡回しています。
							<br><br>
							夜間、休日も医師＋看護部のダブルオンコール体制で、フットワーク軽く対応いたします。
						</p>
					</div>
				</div>
				<div class="clinic_lists">
					<ul>
						<li><a href="/kinshichou/">錦糸町院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/shinkoiwa/">新小岩院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/kitasenju/">北千住院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/motoyawata/">本八幡院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/kitanarashino/">北習志野院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/sakura/">佐倉院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/yachiyo/">八千代院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/kuki/">埼玉院 HPはこちら	&gt;	&gt;</a></li>
					</ul>
				</div>
			</section>

			<section id="sec_04">
				<h2>診療内容・日程</h2>
				<section id="shinryou">
					<h3><span>基本的には病院と変わらない診療を受けられます。</span></h3>
					<ul>
						<li>・各種検査<br class="sp">（レントゲン検査、 エコー 、血液検査、心電図 等)</li>
						<li>・糖尿病、高血圧などの生活習慣病の予防・治療</li>
						<li>・痛みのケア、治療（腰痛、関節痛、がんなど）</li>
						<li>・がんや老衰、慢性呼吸不全、心不全などの終末期医療（緩和ケア、お看取り）</li>
						<li>・脳神経疾患や脳卒中後の治療、リハビリ指導</li>
						<li>・薬局との連携による、薬の配達、服薬指導</li>
						<li>・連携病院への紹介、入院</li>
					</ul>
					<ul>
						<li>・褥瘡（じょくそう）の管理、皮膚科往診</li>
						<li>・認知症、精神疾患の精神科往診</li>
						<li>・糖尿病患者様の自己注射指導、管理</li>
						<li>・酸素吸入、人工呼吸器、在宅酸素療法の管理</li>
						<li>・経管栄養（胃ろう、経鼻、カテーテル）の管理</li>
						<li>・尿道カテーテル、バルーンの管理</li>
						<li>・点滴治療、中心静脈栄養</li>
						<li>・在宅輸血</li>
						<li>・腹水、胸水穿刺</li>
					</ul>
					<div class="roentgen">
						<img src="/common/images/roentgen.jpg" alt="レントゲン写真">
						<p>
							<span>【ポータブルレントゲン】</span>
							<br>
							<br class="pc">
							富士フィルムの最新型の携帯型X線撮影装置を使用<br class="pc">しています。<br>
							総重量約3.5Kgの軽量・小型モデルで、ご自宅で手<br class="pc">軽なX線検査が可能です。
						</p>
					</div>
				</section>

				<div class="kamoku">
					<h3><span>診療科目</span></h3>
					<ul>
						<li>内科</li>
						<li>呼吸器内科</li>
						<li>循環器内科</li>
						<li>消化器内科</li>
						<li>脳神経内科</li>
						<li>泌尿器科</li>
						<li>形成外科</li>
						<li>整形外科</li>
						<li>リハビリ科</li>
						<li>腫瘍内科</li>
						<li>緩和ケア科</li>
						<li>皮膚科</li>
						<li>精神科</li>
					</ul>
					<p>※ 皮膚科・精神科往診のみでも受けつけております</p>
				</div>

				<section id="sec_05">
					<h3><span>診療日</span></h3>
					<table class="cel_01">
						<tr>
							<th>&nbsp;</th>
							<th>月</th>
							<th>火</th>
							<th>水</th>
							<th>木</th>
							<th>金</th>
							<th>土</th>
							<th>日</th>
						</tr>
						<tr>
							<td>9:00-18:00</td>
							<td>〇</td>
							<td>〇</td>
							<td>〇</td>
							<td>〇</td>
							<td>〇</td>
							<td>〇</td>
							<td>＊</td>
						</tr>
					</table>
					<p>※ 電話によるご相談も上記時間に受け付けております。</p>
					<p>※ 日曜日、祝日は緊急往診のみとなります。</p>
				</section>
			</section>

			<section id="graf">
				<h2>診療実績</h2>
				<h3>「しっかりした医療」<br>を<br>「しっかりとした医師で」</h3>
				<p class="txt">地域の医療をリードする存在として、丁寧かつ適切な在宅医療を提供しています。<br>一人ひとりの患者様と向き合えるような診療スケジュールを組んでいます。</p>
				<ul class="graf_list">
					<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/graf.php'); ?>
				</ul>
				<div class="clinic_lists">
					<ul>
						<li><a href="/kinshichou/">錦糸町院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/shinkoiwa/">新小岩院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/kitasenju/">北千住院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/motoyawata/">本八幡院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/kitanarashino/">北習志野院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/sakura/">佐倉院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/yachiyo/">八千代院 HPはこちら	&gt;	&gt;</a></li>
						<li><a href="/kuki/">埼玉院 HPはこちら	&gt;	&gt;</a></li>
					</ul>
				</div>
			</section>

			<section id="ishi">
					<h2>医師の紹介</h2>
					<p class="department">常勤医</p>
					<ul class="docter-lists">
						<li>
							<dl>
								<dt>石井 成伸（統括）</dt>
								<dd>
									<img src="/top/images/person_01.jpg" alt="石井 成伸,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 埼玉院（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、伊奈町、五霞町）、東京 北千住院（足立区、荒川区、台東区）、東京 新小岩院（葛飾区、江戸川区、墨田区、江東区）、千葉 佐倉院（佐倉市、印西市、四街道市、八千代市、千葉市、酒々井町、習志野市、船橋市）在宅医療 訪問診療 訪問看護 往診" class="img">
									<ul class="txt">
										<li>日本内科学会認定 内科認定医</li>
										<li>日本呼吸器学会認定 呼吸器専門医</li>
										<li>がん緩和ケア研修会修了医</li>
									</ul>
								</dd>
							</dl>
						</li>
						<!-- <li>
							<dl>
								<dt>新井 庸倫（埼玉）</dt>
								<dd>
									<img src="/top/images/person_03.jpg" alt="新井 庸倫,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 埼玉院（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、伊奈町、五霞町）在宅医療 訪問診療 訪問看護 往診" class="img">
									<ul class="txt">
										<li>日本消化器外科学会 認定医</li>
										<li>日本外科学会 専門医</li>
										<li>日本医師会認定 産業医</li>
									</ul>
								</dd>
							</dl>
						</li> -->
						<li class="pink">
							<dl>
								<dt>上野 彰子（埼玉）</dt>
								<dd>
									<ul>
										<li>日本内科学会認定 総合内科専門医</li>
										<li>日本循環器学会認定 循環器専門医</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>土肥 光希（埼玉）</dt>
								<dd>
									<img src="/top/images/person_dohi.jpg" alt="土肥 光希,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 埼玉院（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、伊奈町、五霞町）在宅医療 訪問診療 訪問看護 往診" class="img">
									<ul class="txt">
										<li>泌尿器科専門医</li>
										<li>がん緩和ケア研修修了医</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>伊藤 真輝（埼玉）</dt>
								<dd>
									<img src="/top/images/person_itou.jpg" alt="伊藤 真輝,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 埼玉院（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、伊奈町、五霞町）在宅医療 訪問診療 訪問看護 往診" class="img">
									<ul class="txt">
										<li>日本循環器学会専門医</li>
										<li>日本内科学会認定総合内科専門医</li>
										<li>日本心血管インターベンション治療学会専門医</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>本橋 正隆（埼玉）</dt>
								<dd>
									<img src="/common/images/person_motohashi.jpg" alt="本橋 正隆,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック" class="img">
									<ul class="txt">
										<li>日本整形外科学会専門医</li>
										<li>がん緩和ケア研修会修了医</li>
										<li>東京医科歯科大学整形外科学大学院博士号</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>赤坂 佳彦（埼玉）</dt>
								<dd>
									<img src="/common/images/person_akasaka.jpg" alt="赤坂 佳彦,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック" class="img">
									<ul class="txt">
										<li>総合内科</li>
										<li>がん緩和ケア研修修了医</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>曽根 健太（埼玉）</dt>
								<dd>
									<img src="/common/images/person_sone.jpg" alt="曽根 健太,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック" class="img">
									<ul class="txt">
										<li>総合内科</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li class="sp_none" style="border: none;background-color: unset;"></li>
						<li>
							<dl>
								<dt>井之輪 俊彦（東京）</dt>
								<dd>
									<img src="/top/images/person_inowa.jpg" alt="井之輪 俊彦,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 東京 北千住院（足立区、荒川区、台東区）、東京 新小岩院（葛飾区、江戸川区、墨田区、江東区）在宅医療 訪問診療 訪問看護 往診" class="img">
									<ul class="txt">
										<li>日本泌尿器科学会認定 泌尿器科専門医・指導医</li>
										<li>がん緩和ケア研修会修了医</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>海野 陽介（東京）</dt>
								<dd>
									<img src="/common/images/person_umino.jpg" alt="海野 陽介,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック" class="img">
									<ul class="txt">
										<li>泌尿器科学会専門医</li>
										<li>がん緩和ケア研修修了医</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li class="pink">
							<dl>
								<dt>小林 晶子（東京）</dt>
								<dd>
									<ul>
										<li>日本内科学会認定 内科認定医</li>
										<li>日本神経学会認定 神経内科専門医</li>
										<li>日本医師会認定 産業医</li>
										<li>博士号（医学）</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>上田 雄大（東京）</dt>
								<dd>
									<img src="/common/images/person_ueda.jpg" alt="上田 雄大,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック" class="img">
									<ul class="txt">
										<li>総合内科</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>石井 英世（千葉）</dt>
								<dd>
									<img src="/common/images/person_hideyo.jpg" alt="石井 英世,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック" class="img">
									<ul class="txt">
										<li>内科</li>
										<li>消化器内科</li>
										<li>日本医師会正会員</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>柳 一夫（千葉）</dt>
								<dd>
									<img src="/top/images/message_person_yanagi.jpg" alt="柳 一夫,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック" class="img">
									<ul class="txt">
										<li>胸部外科学会認定医</li>
										<li>日本外科学会認定医</li>
										<li>がん緩和ケア研修会修了医</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>岩本 克宜（千葉）</dt>
								<dd>
									<img src="/common/images/person_iwamoto.jpg" alt="岩本 克宜,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック" class="img">
									<ul class="txt">
										<li>リハビリテーション医学会臨床認定医</li>
										<li>日本脳神経外科学会</li>
										<li>日本精神神経学会</li>
										<li>がん緩和ケア研修会修了医</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>佐藤 昭寿（千葉）</dt>
								<dd>
									<img src="/common/images/person_sato_a.jpg" alt="佐藤 昭寿,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック" class="img">
									<ul class="txt">
										<li>日本内科学会認定 総合内科専門医</li>
										<li>日本呼吸器学会認定 呼吸器専門医</li>
										<li>日本アレルギー学会認定 アレルギー専門医</li>
										<li>日本医師会認定 産業医</li>
										<li>博士号（医学）</li>
										<li>がん緩和ケア研修会修了医</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>鈴木 瞭介（千葉）</dt>
								<dd>
									<img src="/common/images/person_suzuki_r.jpg"  alt="鈴木 瞭介,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック" class="img">
									<ul class="txt">
										<li>総合内科</li>
									</ul>
								</dd>
							</dl>
						</li>
					</ul>

					<p class="department">非常勤医</p>
					<ul class="docter-lists hijoukin">
						<li>
							<dl>
								<dt>20〜30名</dt>
								<dd>
									消化器科、呼吸器内科、脳神経内科、外科、皮膚科、精神科など
								</dd>
							</dl>
							</p>
						</li>
					</ul>

					<span class="ishi_saiyou">
						<a href="/recruit/02/" rel="ishi_saiyou">採用情報はこちら	&gt;	&gt;</a>
					</span>

				</section>

				<section id="staff">
					<h2>スタッフの紹介</h2>
					<p class="department">事務部</p>
					<ul class="docter-lists">
						<li>
							<dl>
								<dt>統括部長 秋谷 智広</dt>
								<dd>
									<img src="/top/images/person_04.jpg" alt="統括部長 秋谷 智広,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 埼玉院（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、伊奈町、五霞町）、東京 北千住院（足立区、荒川区、台東区）、東京 新小岩院（葛飾区、江戸川区、墨田区、江東区）、千葉 佐倉院（佐倉市、印西市、四街道市、八千代市、千葉市、酒々井町、習志野市、船橋市）" class="img">
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>事務次長 片寄 貴友</dt>
								<dd>
									<img src="/top/images/person_katayose.jpg" alt="ふたば在宅クリニック 事務次長 片寄 貴友" class="img">
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>事務次長 牧野 祥介</dt>
								<dd>
									<img src="/top/images/person_makino.jpg" alt="ふたば在宅クリニック 事務次長 牧野 祥介" class="img">
								</dd>
							</dl>
						</li>
						<li class="none_image">
							<dl>
								<dt>事務次長 上村 秀一</dt>
								<dd>
									<img src="/common/images/person_uemura.jpg" alt="ふたば在宅クリニック 事務次長 上村 秀一" class="img">
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>事務次長 千葉 光</dt>
								<dd>
									<img src="/top/images/person_chiba.jpg" alt="ふたば在宅クリニック 事務次長 千葉 光" class="img">
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt>事務次長 大野 紘崇</dt>
								<dd>
									<img src="/top/images/message_person_oono.jpg" alt="ふたば在宅クリニック 事務次長 大野 紘崇" class="img">
								</dd>
							</dl>
						</li>
						<li class="none_image">
							<dl>
								<dt>事務次長 北見 竜也</dt>
								<dd>
									<img src="/common/images/person_kitami.jpg" alt="ふたば在宅クリニック 事務次長 北見 竜也" class="img">
								</dd>
							</dl>
						</li>
					</ul>

					<p class="department">地域連携室</p>
					<ul class="docter-lists">
						<li>
							<dl>
								<dt>室長 斉藤 恵介</dt>
								<dd>
									<img src="/top/images/person_saitou-k.jpg" alt="室長 斉藤 恵介,医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 埼玉院（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、伊奈町、五霞町）、東京 北千住院（足立区、荒川区、台東区）、東京 新小岩院（葛飾区、江戸川区、墨田区、江東区）、千葉 佐倉院（佐倉市、印西市、四街道市、八千代市、千葉市、酒々井町、習志野市、船橋市）" class="img">
								</dd>
							</dl>
						</li>
						<li class="none_image">
							<dl>
								<dt>地域連携室 社会福祉士 安藤 恵太</dt>
								<dd></dd>
							</dl>
						</li>
					</ul>

					<span class="ishi_saiyou">
						<a href="/recruit/03/" rel="ishi_saiyou">採用情報はこちら	&gt;	&gt;</a>
					</span>

				</section>

				<section id="kanren_sec" class="ishi_shoukai">
					<h3>各医院医師紹介</h3>
					<ul class="kanren">
						<li class="kanren_01">
							<a href="/kinshichou/message/">
								<span>錦糸町院<br>医師紹介ページ</span>
							</a>
						</li>
						<li class="kanren_01">
							<a href="/shinkoiwa/message/">
								<span>新小岩院<br>医師紹介ページ</span>
							</a>
						</li>
						<li class="kanren_01">
							<a href="/kitasenju/message/">
								<span>北千住院<br>医師紹介ページ</span>
							</a>
						</li>
						<li class="kanren_01">
							<a href="/motoyawata/message/">
								<span>本八幡院<br>医師紹介ページ</span>
							</a>
						</li>
						<li class="kanren_01">
							<a href="/kitanarashino/message/">
								<span>北習志野院<br>医師紹介ページ</span>
							</a>
						</li>
						<li class="kanren_01">
							<a href="/sakura/message/">
								<span>佐倉院<br>医師紹介ページ</span>
							</a>
						</li>
						<li class="kanren_01">
							<a href="/yachiyo/message/">
								<span>八千代院<br>医師紹介ページ</span>
							</a>
						</li>
						<li class="kanren_00">
							<a href="/kuki/message/">
								<span>埼玉院<br>医師紹介ページ</span>
							</a>
						</li>
					</ul>
				</section>

				<section id="kanren_sec02" class="kyuujin">
					<h2>求人情報</h2>
					<p>
						当院は、開院以来、心、肺、脳神経等の内科疾患、整形疾患、認知症などで通院困難な患者様を中心に在宅診療をしてまいりました。また、地域の中核病院とも医師同士が顔の見える連携を行い、 末期がん患者様等の在宅緩和ケアやご自宅でのお看取りに力を入れてきました。そのため、グループ全体の年間のお看取り患者数は500人を超える、<span>全国有数の在宅診療所</span>になったと自負しております。
					</p>
					<p>
						現在は、呼吸器内科、循環器内科、消化器科、整形外科、皮膚科、精神科、救命救急科、泌尿器科など、総合病院のような<span>チーム医療</span>を行っているのが当院の特徴です。
					</p>
					<p>
						情熱にあふれるスタッフ同士が意見を出し合いながら、毎日、受け持ちの患者様について、しっかりとカンファレンスを行っており、切磋琢磨し、日々成長出来る環境です。在宅診療に興味のある先生方、 看護師の皆様をはじめ、もちろん未経験でも熱意と愛に溢れるスタッフは大歓迎です！是非一緒に日本の在宅医療を変えていきましょう！！
					</p>
					<p class="name">
						統括部長　<span>秋谷　智広</span>
					</p>
					<ul class="kanren">
						<li class="kanren_02">
							<a href="/recruit/02/">
								<span>医師求人ページ</span>
							</a>
						</li>

						<li class="kanren_03">
							<a href="/recruit/03/">
								<span>スタッフ求人ページ</span>
							</a>
						</li>
					</ul>
					<p class="kyuujin_txt">紹介を介さず、直接採用に至った方には、<strong>お祝い金</strong>（基本給の1ヶ月分相当）を6カ月以上勤務後に賞与とあわせて贈呈致します。<br>
					※賞与支給時期にご退職の場合は無効となります。<br>
					※看護師、医師、経営企画室（管理職)、広報部に限る<br><br>
					「ふたばで働きたい！」とご自身で直接応募していただいた方が優先採用になります。<br>
					まずはお気軽にメール・お電話下さい。</p>

					<div id="shain">
						<div class="shain_mv_box mv_box">
							<h2 class="shain_title">先輩インタビュー</h2>
						</div>
						<div class="mv_interview pc wave-bg"></div>
						<div class="mv_interview sp wave-bg"></div>
						<div class="interview_box">
							<ul>
								<!-- <li class="interview_list green_line">
									<a href="/interview_ishiduka/">
										<div class="thum all img_ishiduka"></div>
									</a>
									<p class="department green">医師</p>
									<div class="interview_name green_name">
										<p>
											「患者様の暮らしに寄り添った医療を提供したい」
										</p>
										<a href="/interview_ishiduka/"></a>
									</div>
								</li> -->
								<li class="interview_list">
									<a href="/interview_nakayama/">
										<div class="thum all img_nakayama"></div>
									</a>
									<p class="department">総務課</p>
									<div class="interview_name">
										<p>
											「総務に挑戦したいという夢を叶えた、大好きな職場です」
										</p>
										<a href="/interview_nakayama/"></a>
									</div>
								</li>
								<!-- <li class="interview_list">
									<a href="/interview_enoki/">
										<div class="thum all img_enoki"></div>
									</a>
									<p class="department">看護部</p>
									<div class="interview_name">
										<p>
										「患者様や職場の仲間に、より良い環境を作っていきたい」
										</p>
										<a href="/interview_enoki/"></a>
									</div>
								</li>
								<li class="interview_list">
									<a href="/interview_nakano">
										<div class="thum all img_nakano"></div>
									</a>
									<p class="department">地域連携室</p>
									<div class="interview_name">
										<p>
											「在宅医療は患者様の人生に向き合える素晴らしい仕事」
										</p>
										<a href="/interview_nakano/"></a>
									</div>
								</li>
								<li class="interview_list">
									<a href="/interview_okutsu">
										<div class="thum all img_okutsu"></div>
									</a>
									<p class="department">医事課</p>
									<div class="interview_name">
										<p>
											「訪問診療を支える“縁の下の力持ち”になりたい」
										</p>
										<a href="/interview_okutsu/"></a>
									</div>
								</li> -->
								<li class="interview_list green_line">
									<a href="/interview_akiya/">
										<div class="thum all img_akiya"></div>
									</a>
									<p class="department green jimubu">事務部（経営企画室）</p>
									<div class="interview_name green_name">
										<p>
											「ふたば式の訪問診療で、医療の角度から患者様を支えたい」
										</p>
										<a href="/interview_akiya/"></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</section>

				<section id="houjin">
					<h2>法人概要</h2>
					<table>
						<tbody>
							<tr>
								<th>法人名</th>
								<td>医療法人社団 爽緑会<br>
								医療法人社団 千葉爽緑会</td>
							</tr>
							<tr>
								<th>本部<br class="sp">所在地</th>
								<td>〒106-0032<br>
								東京都港区六本木7-8-7 ハイホーム六本木ビル3階</td>
							</tr>
							<tr>
								<th>電話番号</th>
								<td><a href="tel:0358430151">03-5843-0151</a></td>
							</tr>
							<tr>
								<th>FAX</th>
								<td>03-5843-0152</td>
							</tr>
							<tr>
								<th>受付時間</th>
								<td>
									9:00〜18:00<br>
									※本部は10:00〜19:00
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
								<td>
									<p>TMI総合法律事務所</p>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="top_gallery">
						<p>【六本木本部】</p>
						<ul>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_roppongi_1.jpg" alt="六本木本部 外観">
									<figcaption class="tal">外観</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_roppongi_2.jpg" alt="六本木本部 会議室">
									<figcaption class="tar">会議室</figcaption class="tal">
								</figure>
							</li>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_roppongi_3.jpg" alt="六本木本部 外観（六本木ヒルズ）">
									<figcaption class="tal">外観（六本木ヒルズ）</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_roppongi_4.jpg" alt="六本木本部 外観（東京ミッドタウン）">
									<figcaption class="tar">外観（東京ミッドタウン）</figcaption class="tal">
								</figure>
							</li>
						</ul>
					</div>
					<div class="top_gallery">
						<p>【埼玉院】</p>
						<ul>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_5.jpg" alt="埼玉院 外観">
									<figcaption class="tal">外観</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_kuki_3.jpg" alt="埼玉院 受付">
									<figcaption class="tar">受付</figcaption class="tal">
								</figure>
						</li>
							<li>
									<figure class="mr">
										<img src="/common/images/gallery_kuki.jpg" alt="埼玉院 診療室">
										<figcaption class="tal">診療室</figcaption>
									</figure>
									<figure class="ml">
										<img src="/common/images/gallery_kuki_2.jpg" alt="埼玉院 医局">
										<figcaption class="tar">医局</figcaption class="tal">
									</figure>
							</li>
						</ul>
					</div>
					<div class="top_gallery">
						<p>【北千住院】</p>
						<ul>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_kitasenju_1.jpg" alt="北千住院 外観">
									<figcaption class="tal">外観</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_kitasenju_2.jpg" alt="北千住院 受付">
									<figcaption class="tar">受付</figcaption class="tal">
								</figure>
							</li>
							<li class="kitasenju_gallery_list">
								<figure class="mr">
									<img src="/common/images/gallery_kitasenju_3.jpg" alt="北千住院 医局">
									<figcaption class="tal">医局</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_kitasenju_4.jpg" alt="北千住院 面談室">
									<figcaption class="tar">面談室</figcaption>
								</figure>
							</li>
						</ul>
					</div>
					<div class="top_gallery">
						<p>【新小岩院】</p>
						<ul>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_shinkoiwa_v2.jpg" alt="新小岩院 外観">
									<figcaption class="tal">外観</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_shinkoiwa_2.jpg" alt="新小岩院 受付">
									<figcaption class="tar">受付</figcaption class="tal">
								</figure>
							</li>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_shinkoiwa_3.jpg" alt="新小岩院 医局">
									<figcaption class="tal">医局</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_shinkoiwa_4.jpg" alt="新小岩院 休憩室">
									<figcaption class="tar">休憩室</figcaption class="tal">
								</figure>
							</li>
						</ul>
					</div>
					<div class="top_gallery">
						<p>【錦糸町院】</p>
						<ul>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_kinshichou_1.jpg" alt="錦糸町院 外観">
									<figcaption class="tal">外観</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_kinshichou_2.jpg" alt="錦糸町院 受付">
									<figcaption class="tar">受付</figcaption class="tal">
								</figure>
							</li>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_kinshichou_3.jpg" alt="錦糸町院 事務室">
									<figcaption class="tal">事務室</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_kinshichou_4.jpg" alt="錦糸町院 待合室">
									<figcaption class="tar">待合室</figcaption class="tal">
								</figure>
							</li>
						</ul>
					</div>
					<div class="top_gallery">
						<p>【佐倉院】</p>
						<ul>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_sakura_1.jpg" alt="佐倉院 外観">
									<figcaption class="tal">外観</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_sakura_2.jpg" alt="佐倉院 受付">
									<figcaption class="tar">受付</figcaption class="tal">
								</figure>
							</li>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_sakura_3.jpg" alt="佐倉院 事務室">
									<figcaption class="tal">事務室</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_sakura_4_v2.jpg" alt="佐倉院 診察室">
									<figcaption class="tar">診察室</figcaption class="tal">
								</figure>
							</li>
						</ul>
					</div>
					<div class="top_gallery">
						<p>【八千代院】</p>
						<ul>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_yachiyo.jpg" alt="八千代院 外観">
									<figcaption class="tal">外観</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_yachiyo_2.jpg" alt="八千代院 受付">
									<figcaption class="tar">受付</figcaption>
								</figure>
							</li>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_yachiyo_3.jpg" alt="八千代院 医局">
									<figcaption class="tal">医局</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/gallery_yachiyo_4.jpg" alt="八千代院 事務室">
									<figcaption class="tar">事務室</figcaption>
								</figure>
							</li>
						</ul>
					</div>
					<div class="top_gallery">
						<p>【北習志野院】</p>
						<ul>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_kitanarashino.jpg" alt="北習志野院 外観">
									<figcaption class="tal">外観</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/noimage.jpg" alt="北習志野院 受付">
									<figcaption class="tar">受付</figcaption class="tal">
								</figure>
							</li>
						</ul>
					</div>
					<div class="top_gallery">
						<p>【本八幡院】</p>
						<ul>
							<li>
								<figure class="mr">
									<img src="/common/images/gallery_motoyawata.jpg" alt="本八幡院 外観">
									<figcaption class="tal">外観</figcaption>
								</figure>
								<figure class="ml">
									<img src="/common/images/noimage.jpg" alt="本八幡院 受付">
									<figcaption class="tar">受付</figcaption class="tal">
								</figure>
							</li>
						</ul>
					</div>
				</section>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side_top.php'); ?>
		</div>
	</article>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/footer02.php'); ?>
</body>
</html>
