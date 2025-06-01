<meta name="format-detection" content="telephone=no">
<div class="header_wrap">
	<header>
		<div>
			<h1>
      <?php
        $url = $_SERVER['REQUEST_URI'];
        if (strpos($url, 'kinshichou') !== false) :
      ?>
				<span class="txt_00">東京都・城東エリアの  <span>訪問診療・往診・在宅医療</span></span><br>
        <span class="txt_01">（墨田区、江東区、台東区、葛飾区、江戸川区、足立区、荒川区など）</span>
      <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
				<span class="txt_00">東京都・城東エリアの  <span>訪問診療・往診・在宅医療</span></span><br>
				<span class="txt_01">（葛飾区、江戸川区、墨田区、江東区、足立区、荒川区、台東区）</span>
      <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
				<span class="txt_00">東京都・城東エリアの  <span>訪問診療・往診・在宅医療</span></span><br>
				<span class="txt_01">（足立区、荒川区、墨田区、葛飾区、江戸川区、台東区、江東区）</span>
      <?php elseif (strpos($url, 'sakura') !== false) : ?>
				<span class="txt_00">千葉県・北西部・印旛地域の  <span>訪問診療・往診・在宅医療</span></span><br>
				<span class="txt_01">（佐倉市、印西市、四街道市、八千代市、千葉市、酒々井町、習志野市、船橋市）</span>
      <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
				<span class="txt_00">千葉県・北西部・印旛地域の  <span>訪問診療・往診・在宅医療</span></span><br>
				<span class="txt_01">（八千代市、千葉市、習志野市、船橋市、印西市、佐倉市、四街道市、酒々井町）</span>
      <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
				<span class="txt_00">千葉県・北西部・印旛地域の  <span>訪問診療・往診・在宅医療</span></span><br>
				<span class="txt_01">（船橋市、習志野市、八千代市、千葉市、印西市、佐倉市、四街道市、酒々井町）</span>
      <?php elseif (strpos($url, 'motoyawata') !== false) : ?>
				<span class="txt_00">千葉県・北西部・印旛地域の  <span>訪問診療・往診・在宅医療</span></span><br>
				<span class="txt_01">（市川市、浦安市、船橋市、習志野市、八千代市、千葉市、印西市、佐倉市、四街道市、酒々井町）</span>
      <?php else : ?>
				<span class="txt_00">埼玉県・北東部の <span>訪問診療・往診・在宅医療</span></span><br>
				<span class="txt_01">（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、五霞町など）</span>
      <?php endif; ?>
			</h1>
			<div class="logo_box">
        <?php
          $url = $_SERVER['REQUEST_URI'];
          if (strpos($url, 'kinshichou') !== false) :
        ?>
          <p id="header_logo">
            <a href="/kinshichou/">
              <img src="/common/images/logo_tokyo_kin.svg" alt="医療法人社団 爽緑会 ふたば在宅クリニック 錦糸町院（墨田区、江東区、台東区、葛飾区、江戸川区、足立区、荒川区など）東京都・城東エリアの在宅医療 訪問診療 往診">
            </a>
          </p>
          <ul class="icon_box pc">
            <li><img src="/common/images/header_icon_03.svg" alt="在宅医療(24時間365日),医療法人社団 爽緑会 ふたば在宅クリニック 錦糸町院 墨田区 江東区 台東区 葛飾区 江戸川区 足立区 荒川区 在宅医療・訪問診療・訪問看護・往診"></li>
            <li><img src="/common/images/header_icon_02.svg" alt="内科 心・肺・脳,医療法人社団 爽緑会 ふたば在宅クリニック 錦糸町院 墨田区 江東区 台東区 葛飾区 江戸川区 足立区 荒川区 在宅医療・訪問診療・訪問看護・往診"></li>
            <li><img src="/common/images/header_icon_01.svg" alt="がん・緩和ケア,医療法人社団 爽緑会 ふたば在宅クリニック 錦糸町院 墨田区 江東区 台東区 葛飾区 江戸川区 足立区 荒川区 在宅医療・訪問診療・訪問看護・往診"></li>
          </ul>
        <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
          <div class="logo_box">
          <p id="header_logo">
            <a href="/shinkoiwa/">
              <img src="/common/images/logo_tokyo_s.svg" alt="医療法人社団 爽緑会 ふたば在宅クリニック 新小岩院（葛飾区、江戸川区、墨田区、江東区、足立区、荒川区、台東区）東京都・城東エリアの在宅医療 訪問診療 往診">
            </a>
          </p>
          <ul class="icon_box pc">
            <li><img src="/common/images/header_icon_03.svg" alt="在宅医療(24時間365日),医療法人社団 爽緑会 ふたば在宅クリニック 新小岩院 墨田区 江東区 台東区 葛飾区 江戸川区 足立区 荒川区 在宅医療・訪問診療・訪問看護・往診"></li>
            <li><img src="/common/images/header_icon_02.svg" alt="内科 心・肺・脳,医療法人社団 爽緑会 ふたば在宅クリニック 新小岩院 墨田区 江東区 台東区 葛飾区 江戸川区 足立区 荒川区 在宅医療・訪問診療・訪問看護・往診"></li>
            <li><img src="/common/images/header_icon_01.svg" alt="がん・緩和ケア,医療法人社団 爽緑会 ふたば在宅クリニック 新小岩院 墨田区 江東区 台東区 葛飾区 江戸川区 足立区 荒川区 在宅医療・訪問診療・訪問看護・往診"></li>
          </ul>
        <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
          <p id="header_logo">
            <a href="/kitasenju/">
              <img src="/common/images/logo_tokyo_kita.svg" alt="医療法人社団 爽緑会 ふたば在宅クリニック 北千住院,墨田区 江東区 台東区 葛飾区 江戸川区 足立区 荒川区 在宅医療 訪問診療 訪問看護 往診">
            </a>
          </p>
          <ul class="pc icon_box">
            <li><img src="/common/images/header_icon_03.svg" alt="在宅医療(24時間365日),医療法人社団 爽緑会 ふたば在宅クリニック 北千住院,墨田区 江東区 台東区 葛飾区 江戸川区 足立区 荒川区 在宅医療 訪問診療 訪問看護 往診"></li>
            <li><img src="/common/images/header_icon_02.svg" alt="内科 心・肺・脳,医療法人社団 爽緑会 ふたば在宅クリニック 北千住院,墨田区 江東区 台東区 葛飾区 江戸川区 足立区 荒川区 在宅医療 訪問診療 訪問看護 往診"></li>
            <li><img src="/common/images/header_icon_01.svg" alt="がん・緩和ケア,医療法人社団 爽緑会 ふたば在宅クリニック 北千住院,墨田区 江東区 台東区 葛飾区 江戸川区 足立区 荒川区 在宅医療 訪問診療 訪問看護 往診"></li>
          </ul>
        <?php elseif (strpos($url, 'sakura') !== false) : ?>
          <p id="header_logo">
            <a href="/sakura/">
              <img src="/common/images/logo_sakura.svg" alt="医療法人社団 千葉爽緑会 ふたば在宅クリニック 佐倉院,千葉県・印旛地域（佐倉市、印西市、四街道市、八千代市、千葉市、酒々井町、習志野市、船橋市）の在宅医療 訪問診療 訪問看護 往診">
            </a>
          </p>
          <ul class="icon_box pc">
            <li><img src="/common/images/header_icon_03.svg" alt="在宅医療(24時間365日),ふたば在宅クリニック 佐倉院,千葉県・印旛地域（佐倉市、印西市、四街道市、八千代市、千葉市、酒々井町、習志野市、船橋市）の訪問診療・往診・在宅医療"></li>
            <li><img src="/common/images/header_icon_02.svg" alt="内科 心・肺・脳,ふたば在宅クリニック 佐倉院,千葉県・印旛地域（佐倉市、印西市、四街道市、八千代市、千葉市、酒々井町、習志野市、船橋市）の訪問診療・往診・在宅医療"></li>
            <li><img src="/common/images/header_icon_01.svg" alt="がん・緩和ケア,ふたば在宅クリニック 佐倉院,千葉県・印旛地域（佐倉市、印西市、四街道市、八千代市、千葉市、酒々井町、習志野市、船橋市）の訪問診療・往診・在宅医療"></li>
          </ul>
        <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
          <p id="header_logo">
            <a href="/yachiyo/">
              <img src="/common/images/logo_yachiyo.svg" alt="医療法人社団 千葉爽緑会 ふたば在宅クリニック 八千代院,千葉県・北西部・印旛地域（八千代市、千葉市、習志野市、船橋市、印西市、佐倉市、四街道市、酒々井町）の在宅医療 訪問診療 訪問看護 往診">
            </a>
          </p>
          <ul class="icon_box pc">
            <li><img src="/common/images/header_icon_03.svg" alt="在宅医療(24時間365日),ふたば在宅クリニック 八千代院,千葉県・北西部・印旛地域（八千代市、千葉市、習志野市、船橋市、印西市、佐倉市、四街道市、酒々井町）の訪問診療・往診・在宅医療"></li>
            <li><img src="/common/images/header_icon_02.svg" alt="内科 心・肺・脳,ふたば在宅クリニック 八千代院,千葉県・北西部・印旛地域（八千代市、千葉市、習志野市、船橋市、印西市、佐倉市、四街道市、酒々井町）の訪問診療・往診・在宅医療"></li>
            <li><img src="/common/images/header_icon_01.svg" alt="がん・緩和ケア,ふたば在宅クリニック 八千代院,千葉県・北西部・印旛地域（八千代市、千葉市、習志野市、船橋市、印西市、佐倉市、四街道市、酒々井町）の訪問診療・往診・在宅医療"></li>
          </ul>
        <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
          <p id="header_logo">
            <a href="/kitanarashino/">
              <img src="/common/images/logo_kitanarashino.svg" alt="医療法人社団 千葉爽緑会 ふたば在宅クリニック 北習志野院,千葉県・北西部・印旛地域（船橋市、習志野市、八千代市、千葉市、印西市、佐倉市、四街道市、酒々井町）の在宅医療 訪問診療 訪問看護 往診">
            </a>
          </p>
          <ul class="icon_box pc">
            <li><img src="/common/images/header_icon_03.svg" alt="在宅医療(24時間365日),ふたば在宅クリニック 北習志野院,千葉県・北西部・印旛地域（船橋市、習志野市、八千代市、千葉市、印西市、佐倉市、四街道市、酒々井町）の訪問診療・往診・在宅医療"></li>
            <li><img src="/common/images/header_icon_02.svg" alt="内科 心・肺・脳,ふたば在宅クリニック 北習志野院,千葉県・北西部・印旛地域（船橋市、習志野市、八千代市、千葉市、印西市、佐倉市、四街道市、酒々井町）の訪問診療・往診・在宅医療"></li>
            <li><img src="/common/images/header_icon_01.svg" alt="がん・緩和ケア,ふたば在宅クリニック 北習志野院,千葉県・北西部・印旛地域（船橋市、習志野市、八千代市、千葉市、印西市、佐倉市、四街道市、酒々井町）の訪問診療・往診・在宅医療"></li>
          </ul>
        <?php elseif (strpos($url, 'motoyawata') !== false) : ?>
          <p id="header_logo">
            <a href="/motoyawata/">
              <img src="/common/images/logo_motoyawata.svg" alt="医療法人社団 千葉爽緑会 ふたば在宅クリニック 北習志野院,千葉県・北西部・印旛地域（市川市、浦安市、船橋市、習志野市、八千代市、千葉市、印西市、佐倉市、四街道市、酒々井町）の在宅医療 訪問診療 訪問看護 往診">
            </a>
          </p>
          <ul class="icon_box pc">
            <li><img src="/common/images/header_icon_03.svg" alt="在宅医療(24時間365日),ふたば在宅クリニック 北習志野院,千葉県・北西部・印旛地域（市川市、浦安市、船橋市、習志野市、八千代市、千葉市、印西市、佐倉市、四街道市、酒々井町）の訪問診療・往診・在宅医療"></li>
            <li><img src="/common/images/header_icon_02.svg" alt="内科 心・肺・脳,ふたば在宅クリニック 北習志野院,千葉県・北西部・印旛地域（市川市、浦安市、船橋市、習志野市、八千代市、千葉市、印西市、佐倉市、四街道市、酒々井町）の訪問診療・往診・在宅医療"></li>
            <li><img src="/common/images/header_icon_01.svg" alt="がん・緩和ケア,ふたば在宅クリニック 北習志野院,千葉県・北西部・印旛地域（市川市、浦安市、船橋市、習志野市、八千代市、千葉市、印西市、佐倉市、四街道市、酒々井町）の訪問診療・往診・在宅医療"></li>
          </ul>
        <?php else : ?>
        <p id="header_logo">
          <a href="/kuki/"><img src="/common/images/logo_s_v2.svg" alt="医療法人社団 爽緑会 ふたば在宅クリニック 埼玉院,埼玉県、利根地域（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、五霞町など）の在宅医療 訪問診療 訪問看護 往診"></a>
        </p>
        <ul class="pc icon_box">
          <li><img src="/common/images/header_icon_03.svg" alt="在宅医療(24時間365日),ふたば在宅クリニック 埼玉院,埼玉県、利根地域（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、五霞町など）の訪問診療・往診・在宅医療"></li>
          <li><img src="/common/images/header_icon_02.svg" alt="内科 心・肺・脳,ふたば在宅クリニック 埼玉院,埼玉県、利根地域（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、五霞町など）の訪問診療・往診・在宅医療"></li>
          <li><img src="/common/images/header_icon_01.svg" alt="がん・緩和ケア,ふたば在宅クリニック 埼玉院,埼玉県、利根地域（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、五霞町など）の訪問診療・往診・在宅医療"></li>
        </ul>
        <?php endif; ?>
			</div>

			<style>
				.drawer-hamburger-icon {
					margin-top: 14px;
				}
				.tel_txt{
					margin-top:0px;
				}
				.drawer--top.drawer-open .drawer-nav {
					top: 0;
				}
				@media (max-width: 480px) {
					#header_logo {
						width: 64%;
						text-align: center;
					}
					#header_logo img {
						width: 100%;
					}
				}
			</style>

			<div class="sp sp_nav" role="banner">
				<button type="button" class="drawer-toggle drawer-hamburger">
					<span class="sr-only">toggle navigation</span>
					<span class="drawer-hamburger-icon"></span>
				</button>
				<nav class="drawer-nav" role="navigation">
					<ul class="drawer-menu">
          <?php
            $url = $_SERVER['REQUEST_URI'];
            if (strpos($url, 'kinshichou') !== false) :
          ?>
						<li><a href="/kinshichou/">ホーム</a></li>
						<li><a href="/kinshichou/message/">理事長挨拶・スタッフ紹介</a></li>
						<li><a href="/kinshichou/guide/">当院について</a></li>
						<li><a href="/kinshichou/about/">在宅診療とは</a></li>
						<li class="faq"><a href="/kinshichou/faq/"><span class="txt">よくあるご質問</span></a></li>
						<li><a href="/kinshichou/area/">訪問地域</a></li>
						<li><a href="/">法人トップ・分院案内</a></li>
						<li><a href="/kinshichou/recruit/">採用・求人</a></li>
						<li><a href="/contact/input_kinshichou/">お問い合わせ・お申し込み</a></li>
						<li><a href="/news/kinshichou/">お知らせ</a></li>
						<li><a href="/kinshichou/privacy/">プライバシーポリシー</a></li>
            <li class="fax"><span class="fax_txt">03-6658-8176</span></li>
          <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
						<li><a href="/shinkoiwa/">ホーム</a></li>
						<li><a href="/shinkoiwa/message/">理事長挨拶・スタッフ紹介</a></li>
						<li><a href="/shinkoiwa/guide/">当院について</a></li>
						<li><a href="/shinkoiwa/about/">在宅診療とは</a></li>
						<li class="faq"><a href="/shinkoiwa/faq/"><span class="txt">よくあるご質問</span></a></li>
						<li><a href="/shinkoiwa/area/">訪問地域</a></li>
						<li><a href="/">法人トップ・分院案内</a></li>
						<li><a href="/shinkoiwa/recruit/">採用・求人</a></li>
						<li><a href="/contact/input_shinkoiwa/">お問い合わせ・お申し込み</a></li>
						<li><a href="/news/shinkoiwa/">お知らせ</a></li>
						<li><a href="/shinkoiwa/privacy/">プライバシーポリシー</a></li>
						<li class="fax"><span class="fax_txt">03-5879-3531</span></li>
          <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
						<li><a href="/kitasenju/">ホーム</a></li>
						<li><a href="/kitasenju/message/">理事長挨拶・スタッフ紹介</a></li>
						<li><a href="/kitasenju/guide/">当院について</a></li>
						<li><a href="/kitasenju/about/">在宅診療とは</a></li>
						<li><a href="/kitasenju/faq/">よくあるご質問</a></li>
						<li><a href="/kitasenju/area/">訪問地域</a></li>
						<li><a href="/">法人トップ・分院案内</a></li>
						<li><a href="/kitasenju/recruit/">採用・求人</a></li>
						<li><a href="/contact/input_kitasenju/">お問い合わせ・お申し込み</a></li>
						<li><a href="/news/kitasenju/">お知らせ</a></li>
						<li><a href="/kitasenju/privacy/">プライバシーポリシー</a></li>
            <li class="fax"><span class="fax_txt">03-6806-2591</span></li>
          <?php elseif (strpos($url, 'sakura') !== false) : ?>
						<li><a href="/sakura/">ホーム</a></li>
						<li><a href="/sakura/message/">代表挨拶・スタッフ紹介</a></li>
						<li><a href="/sakura/guide/">当院について</a></li>
						<li><a href="/sakura/about/">在宅診療とは</a></li>
						<li><a href="/sakura/faq/">よくあるご質問</a></li>
						<li><a href="/sakura/area/">訪問地域</a></li>
						<li><a href="/">法人トップ・分院案内</a></li>
						<li><a href="/sakura/recruit/">採用・求人</a></li>
						<li><a href="/contact/input_sakura/">お問い合わせ・お申し込み</a></li>
						<li><a href="/news/sakura/">お知らせ</a></li>
						<li><a href="/sakura/privacy/">プライバシーポリシー</a></li>
            <li class="fax"><span class="fax_txt">043-290-9708</span></li>
          <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
						<li><a href="/yachiyo/">ホーム</a></li>
						<li><a href="/yachiyo/message/">代表挨拶・スタッフ紹介</a></li>
						<li><a href="/yachiyo/guide/">当院について</a></li>
						<li><a href="/yachiyo/about/">在宅診療とは</a></li>
						<li><a href="/yachiyo/faq/">よくあるご質問</a></li>
						<li><a href="/yachiyo/area/">訪問地域</a></li>
						<li><a href="/">法人トップ・分院案内</a></li>
						<li><a href="/yachiyo/recruit/">採用・求人</a></li>
						<li><a href="/contact/input_yachiyo/">お問い合わせ・お申し込み</a></li>
						<li><a href="/news/yachiyo/">お知らせ</a></li>
						<li><a href="/yachiyo/privacy/">プライバシーポリシー</a></li>
            <li class="fax"><span class="fax_txt">047-409-3788</span></li>
          <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
						<li><a href="/kitanarashino/">ホーム</a></li>
						<li><a href="/kitanarashino/message/">代表挨拶・スタッフ紹介</a></li>
						<li><a href="/kitanarashino/guide/">当院について</a></li>
						<li><a href="/kitanarashino/about/">在宅診療とは</a></li>
						<li><a href="/kitanarashino/faq/">よくあるご質問</a></li>
						<li><a href="/kitanarashino/area/">訪問地域</a></li>
						<li><a href="/">法人トップ・分院案内</a></li>
						<li><a href="/kitanarashino/recruit/">採用・求人</a></li>
						<li><a href="/contact/input_kitanarashino/">お問い合わせ・お申し込み</a></li>
						<li><a href="/news/kitanarashino/">お知らせ</a></li>
						<li><a href="/kitanarashino/privacy/">プライバシーポリシー</a></li>
            <li class="fax"><span class="fax_txt">047-402-6537</span></li>
          <?php elseif (strpos($url, 'motoyawata') !== false) : ?>
						<li><a href="/motoyawata/">ホーム</a></li>
						<li><a href="/motoyawata/message/">理事長挨拶・スタッフ紹介</a></li>
						<li><a href="/motoyawata/guide/">当院について</a></li>
						<li><a href="/motoyawata/about/">在宅診療とは</a></li>
						<li><a href="/motoyawata/faq/">よくあるご質問</a></li>
						<li><a href="/motoyawata/area/">訪問地域</a></li>
						<li><a href="/">法人トップ・分院案内</a></li>
						<li><a href="/motoyawata/recruit/">採用・求人</a></li>
						<li><a href="/contact/input_motoyawata/">お問い合わせ・お申し込み</a></li>
						<li><a href="/news/motoyawata/">お知らせ</a></li>
						<li><a href="/motoyawata/privacy/">プライバシーポリシー</a></li>
            <li class="fax"><span class="fax_txt">047-316-2481</span></li>
          <?php else : ?>
						<li><a href="/kuki/">ホーム</a></li>
						<li><a href="/kuki/message/">理事長挨拶・スタッフ紹介</a></li>
						<li><a href="/kuki/guide/">当院について</a></li>
						<li><a href="/kuki/about/">在宅診療とは</a></li>
						<li><a href="/kuki/faq/">よくあるご質問</a></li>
						<li><a href="/kuki/area/">訪問地域</a></li>
						<li><a href="/">法人トップ・分院案内</a></li>
						<li><a href="/kuki/recruit/">採用・求人</a></li>
						<li><a href="/contact/input/">お問い合わせ・お申し込み</a></li>
						<li><a href="/news/">お知らせ</a></li>
						<li><a href="/kuki/privacy/">プライバシーポリシー</a></li>
						<li class="fax"><span class="fax_txt">0480-44-9179</span></li>
          <?php endif; ?>
					</ul>
				</nav>
			</div>
		</div>

		<div class="right">
			<div id="right_box">
				<p class="adress">お問い合わせ・お申込みは</p>
				<ul id="fontSize">
					<li class="changeBtn">小</li>
					<li class="changeBtn">中</li>
					<li class="changeBtn">大</li>
				</ul>
			</div>
			<div class="contact_box">
				<div class="contact_box_in">
          <?php
            $url = $_SERVER['REQUEST_URI'];
            if (strpos($url, 'kinshichou') !== false) :
          ?>
            <p class="tel"><a href="tel:0366588175" class="abled">03-6658-8175</a></p>
            <p class="mail"><a href="/contact/input_kinshichou/#form"></a></p>
          <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
            <p class="tel"><a href="tel:0358793530" class="abled">03-5879-3530</a></p>
            <p class="mail"><a href="/contact/input_shinkoiwa/#form"></a></p>
          <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
            <p class="tel"><a href="tel:0368062590" class="abled">03-6806-2590</a></p>
            <p class="mail"><a href="/contact/input_kitasenju/#form"></a></p>
          <?php elseif (strpos($url, 'sakura') !== false) : ?>
            <p class="tel"><a href="tel:0432909700">043-290-9700</a></p>
            <p class="mail"><a href="/contact/input_sakura/#form"></a></p>
          <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
            <p class="tel"><a href="tel:0474093677">047-409-3677</a></p>
            <p class="mail"><a href="/contact/input_yachiyo/#form"></a></p>
          <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
            <p class="tel"><a href="tel:0474026536">047-402-6536</a></p>
            <p class="mail"><a href="/contact/input_kitanarashino/#form"></a></p>
          <?php elseif (strpos($url, 'motoyawata') !== false) : ?>
            <p class="tel"><a href="tel:0473162480">047-316-2480</a></p>
            <p class="mail"><a href="/contact/input_motoyawata/#form"></a></p>
          <?php else : ?>
            <p class="tel"><a href="tel:0480-44-9178">0480-44-9178</a></p>
            <p class="mail"><a href="/contact/input/#form"></a></p>
          <?php endif; ?>
				</div>
			</div>
		</div>
	</header>
</div>

<div class="nav pc">
	<nav>
		<ul>
      <?php
        $url = $_SERVER['REQUEST_URI'];
        if (strpos($url, 'kinshichou') !== false) :
      ?>
        <li><a href="/kinshichou/">ホーム</a></li>
        <li><a href="/kinshichou/message/">理事長挨拶<br>・<br>スタッフ紹介</a></li>
        <li><a href="/kinshichou/guide/">当院について</a></li>
        <li><a href="/kinshichou/about/">在宅診療とは</a></li>
        <li><a href="/kinshichou/faq/">よくあるご質問</a></li>
        <li><a href="/kinshichou/area/">訪問地域</a></li>
        <li><a href="/">法人トップ<br>・<br>分院案内</a></li>
        <li><a href="/kinshichou/recruit/">採用・求人</a></li>
        <li><a href="/contact/input_kinshichou/">お問い合わせ<br>・<br>お申し込み</a></li>
      <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
        <li><a href="/shinkoiwa/">ホーム</a></li>
        <li><a href="/shinkoiwa/message/">理事長挨拶<br>・<br>スタッフ紹介</a></li>
        <li><a href="/shinkoiwa/guide/">当院について</a></li>
        <li><a href="/shinkoiwa/about/">在宅診療とは</a></li>
        <li><a href="/shinkoiwa/faq/">よくあるご質問</a></li>
        <li><a href="/shinkoiwa/area/">訪問地域</a></li>
        <li><a href="/">法人トップ<br>・<br>分院案内</a></li>
        <li><a href="/shinkoiwa/recruit/">採用・求人</a></li>
        <li><a href="/contact/input_shinkoiwa/">お問い合わせ<br>・<br>お申し込み</a></li>
      <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
        <li><a href="/kitasenju/">ホーム</a></li>
        <li><a href="/kitasenju/message/">理事長挨拶<br>・<br>スタッフ紹介</a></li>
        <li><a href="/kitasenju/guide/">当院について</a></li>
        <li><a href="/kitasenju/about/">在宅診療とは</a></li>
        <li><a href="/kitasenju/faq/">よくあるご質問</a></li>
        <li><a href="/kitasenju/area/">訪問地域</a></li>
        <li><a href="/">法人トップ<br>・<br>分院案内</a></li>
        <li><a href="/kitasenju/recruit/">採用・求人</a></li>
        <li><a href="/contact/input_kitasenju/">お問い合わせ<br>・<br>お申し込み</a></li>
      <?php elseif (strpos($url, 'sakura') !== false) : ?>
        <li><a href="/sakura/">ホーム</a></li>
        <li><a href="/sakura/message/">代表挨拶<br>・<br>スタッフ紹介</a></li>
        <li><a href="/sakura/guide/">当院について</a></li>
        <li><a href="/sakura/about/">在宅診療とは</a></li>
        <li><a href="/sakura/faq/">よくあるご質問</a></li>
        <li><a href="/sakura/area/">訪問地域</a></li>
        <li><a href="/">法人トップ<br>・<br>分院案内</a></li>
        <li><a href="/sakura/recruit/">採用・求人</a></li>
        <li><a href="/contact/input_sakura/">お問い合わせ<br>・<br>お申し込み</a></li>
      <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
        <li><a href="/yachiyo/">ホーム</a></li>
        <li><a href="/yachiyo/message/">代表挨拶<br>・<br>スタッフ紹介</a></li>
        <li><a href="/yachiyo/guide/">当院について</a></li>
        <li><a href="/yachiyo/about/">在宅診療とは</a></li>
        <li><a href="/yachiyo/faq/">よくあるご質問</a></li>
        <li><a href="/yachiyo/area/">訪問地域</a></li>
        <li><a href="/">法人トップ<br>・<br>分院案内</a></li>
        <li><a href="/yachiyo/recruit/">採用・求人</a></li>
        <li><a href="/contact/input_yachiyo/">お問い合わせ<br>・<br>お申し込み</a></li>
      <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
        <li><a href="/kitanarashino/">ホーム</a></li>
        <li><a href="/kitanarashino/message/">代表挨拶<br>・<br>スタッフ紹介</a></li>
        <li><a href="/kitanarashino/guide/">当院について</a></li>
        <li><a href="/kitanarashino/about/">在宅診療とは</a></li>
        <li><a href="/kitanarashino/faq/">よくあるご質問</a></li>
        <li><a href="/kitanarashino/area/">訪問地域</a></li>
        <li><a href="/">法人トップ<br>・<br>分院案内</a></li>
        <li><a href="/kitanarashino/recruit/">採用・求人</a></li>
        <li><a href="/contact/input_kitanarashino/">お問い合わせ<br>・<br>お申し込み</a></li>
      <?php elseif (strpos($url, 'motoyawata') !== false) : ?>
        <li><a href="/motoyawata/">ホーム</a></li>
        <li><a href="/motoyawata/message/">理事長挨拶<br>・<br>スタッフ紹介</a></li>
        <li><a href="/motoyawata/guide/">当院について</a></li>
        <li><a href="/motoyawata/about/">在宅診療とは</a></li>
        <li><a href="/motoyawata/faq/">よくあるご質問</a></li>
        <li><a href="/motoyawata/area/">訪問地域</a></li>
        <li><a href="/">法人トップ<br>・<br>分院案内</a></li>
        <li><a href="/motoyawata/recruit/">採用・求人</a></li>
        <li><a href="/contact/input_motoyawata/">お問い合わせ<br>・<br>お申し込み</a></li>
      <?php else : ?>
        <li><a href="/kuki/">ホーム</a></li>
        <li><a href="/kuki/message/">理事長挨拶<br>・<br>スタッフ紹介</a></li>
        <li><a href="/kuki/guide/">当院について</a></li>
        <li><a href="/kuki/about/">在宅診療とは</a></li>
        <li><a href="/kuki/faq/">よくあるご質問</a></li>
        <li><a href="/kuki/area/">訪問地域</a></li>
        <li><a href="/">法人トップ<br>・<br>分院案内</a></li>
        <li><a href="/kuki/recruit/">採用・求人</a></li>
        <li><a href="/contact/input/">お問い合わせ<br>・<br>お申し込み</a></li>
      <?php endif; ?>
		</ul>
	</nav>
</div>
