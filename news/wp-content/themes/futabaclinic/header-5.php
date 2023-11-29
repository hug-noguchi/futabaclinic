<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=375,user-scalable=no" name="viewport">
  <meta name="format-detection" content="telephone=no">
  <?php if(is_single()): ?>
    <title><?php the_title_attribute(); ?> | お知らせ一覧 | ふたば在宅クリニック - 東京都・埼玉県・千葉県の在宅療養支援診療所</title>
    <meta name="description" content="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック東京都 北千住院 城東エリア（足立区、荒川区、台東区）、新小岩院（葛飾区、江戸川区、墨田区、江東区）、埼玉県 久喜院（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、伊奈町、五霞町）・千葉県 佐倉院（佐倉市、四街道市、八千代市、印西市、千葉市、酒々井町）訪問診療・往診・在宅医療のお知らせ「<?php the_title_attribute(); ?> 」になります。">
    <meta name="keywords" content="<?php the_title_attribute(); ?> ,お知らせ一覧,医療法人社団 爽緑会 ふたば在宅クリニック,在宅療養支援診療所,在宅医療,訪問診療,訪問看護,往診">
  <?php else: ?>
    <title>お知らせ一覧 | ふたば在宅クリニック - 東京都・埼玉県・千葉県の在宅療養支援診療所</title>
    <meta name="description" content="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック東京都 北千住院 城東エリア（足立区、荒川区、台東区）、新小岩院（葛飾区、江戸川区、墨田区、江東区）、埼玉県 久喜院（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、伊奈町、五霞町）・千葉県 佐倉院（佐倉市、四街道市、八千代市、印西市、千葉市、酒々井町）在宅医療 訪問診療 訪問看護 往診">
    <meta name="keywords" content="お知らせ一覧,医療法人社団 爽緑会 ふたば在宅クリニック,在宅療養支援診療所,在宅医療,訪問診療,訪問看護,往診">
  <?php endif; ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
  <link rel="stylesheet" type="text/css" href="/common/styles/base.css" media="all">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/style.css" media="all">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <?php if ( is_home() || is_front_page() ) : ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/top.css" media="all">
  <?php endif; ?>

  <link rel="SHORTCUT ICON" href="/icon.ico">
  <link rel="apple-touch-icon-precomposed" href="https://www.futabaclinic.jp/webclip.png" />
  <?php wp_head(); ?>
  <style>
    html {
      margin-top: 0 !important;
    }
    #header_logo img {
        width: 100%;
      }
    @media (min-width: 481px) {
      header #header_logo {
        margin-right: 10px;
      }
      header .icon_box {
        margin-top: 22px;
      }
      header .right {
        right: -60px;
        top: 78px;
      }
      header .right .contact_box {
        margin-top: 10px !important;
      }
      header .right .contact_box .contact_box_in .fax {
        background: url(/common/images/icon_fax.svg) no-repeat 0 0/27px 32px;
        font-size: 22px;
        margin-top: 2px;
        padding-left: 29px;
        font-weight: bold;
      }
      nav {
        width: 1420px;
      }
      nav ul li:nth-child(2) a,
      nav ul li:nth-child(6) a,
      nav ul li:nth-child(8) a {
        line-height: normal;
        padding: 21px 0 6px;
      }
      nav ul li a {
        width: 107px;
        padding: 21px 0 6px!important;
        line-height: normal!important;
      }
      footer #footer_in_02 .left {
        margin-right: 15px;
      }
    }
    @media (max-width: 480px) {
      #header_logo {
        width: 64%;
        text-align: center;
      }
      .drawer-hamburger-icon {
        margin-top: 14px;
      }
      .tel_txt{
        margin-top:0px;
      }
      .drawer--top.drawer-open .drawer-nav {
        top: 0;
      }
      .sp_nav .mail span {
        color: #8bc33e;
        display: block;
        font-size: 13px;
        font-weight: bold;
        margin-top: 1px;
      }
      .top .pc_new_box {
        font-size: unset!important;
      }
      footer #footer_in #footer_in_02 img {
        width: 100%;
      }
      footer #footer_in #footer_in_02 .address_01 {
        white-space: nowrap;
      }
    }
    @media (max-width: 376px) {
      header h1 .txt_00 span {
        font-size: 10px!important;
      }
    }
  </style>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header_tag.php'); ?>
</head>

<body id="news" class="preload drawer drawer--top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/analyticstracking.php'); ?>
	<div class="header_wrap">
    <header>
      <div>
        <h1 class="pc">
          <span class="txt_00">東京都・埼玉県・千葉県の訪問診療専門クリニック <span>在宅医療・訪問診療・訪問看護・往診</span></span><br>
        </h1>
        <div class="logo_box">
				<p class="pc" id="header_logo">
					<a href="/"><img src="/common/images/logo_v2_02.svg" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック"></a>
				</p>
				<ul class="pc icon_box">
					<li><img src="/common/images/header_icon_03.svg" alt="在宅医療(24時間365日)"></li>
					<li><img src="/common/images/header_icon_02.svg" alt="内科 心・肺・脳"></li>
					<li><img src="/common/images/header_icon_01.svg" alt="がん・緩和ケア"></li>
				</ul>
			</div>
			<div class="sp" style="overflow: hidden;">
				<?php if (stristr($_SERVER['HTTP_USER_AGENT'], "android")) { ?>
				<h1 class="txt_h1">
					<span class="txt_00"
					>東京都・埼玉県・千葉県の訪問診療専門クリニック<br>
					<span>在宅医療・訪問診療・訪問看護・往診</span></span>
				</h1>
				<?php } else { ?>
				<h1 class="txt_h1">
					<span class="txt_00"
					>東京都・埼玉県・千葉県の訪問診療専門クリニック<br>
					<span>在宅医療・訪問診療・訪問看護・往診</span></span>
				</h1>
				<?php } ?>

				<?php if (stristr($_SERVER['HTTP_USER_AGENT'], "android")) { ?>
        <style>
          .android_logo_box{
            float: left;
            width: 64%;
            margin: 4px auto 0;
            text-align: center;
          }
          .android_logo_box p.logo a img{
            width: 100%;
          }
          .android_logo_box .txt_01{
            font-size: 10px;
            color: #f48a9d;
            font-weight: bold;
            margin-top: -6px;
            margin-left: 47px;
          }
          header h1 .txt_00 {
              font-size: 12px;
          }
          .drawer-hamburger-icon {
            margin-top: 14px;
          }
          .tel_txt{
            margin-top:0px;
          }
          .drawer--top.drawer-open .drawer-nav {
            top: 0;
          }
				</style>
				<div class="android_logo_box">
					<p class="logo">
						<a href="/"><img src="/common/images/logo_v2_02.svg" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック"></a>
					</p>
				</div>
				<?php } else { ?>
					<p class="logo">
						<a href="/"><img src="/common/images/logo_v2_02.svg" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック"></a>
					</p>
				<?php } ?>
        <div class="sp_nav sp" role="banner">
          <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
          </button>
          <nav class="drawer-nav" role="navigation">
            <ul class="drawer-menu">
              <li><a href="/#bunin_box" class="navi">各院案内</a></li>
              <li><a href="/#sec_07" class="navi">お知らせ</a></li>
							<li><a href="/#message" class="navi">理事長挨拶</a></li>
							<li><a href="/#about" class="navi">訪問診療とは</a></li>
							<li><a href="/#sec_02" class="navi">ふたばの特色</a></li>
							<li><a href="/#sec_04" class="navi">診療科目</a></li>
							<li><a href="/#sec_05" class="navi">診療日</a></li>
							<li><a href="/#shinryou" class="navi">診療内容</a></li>
							<li><a href="/#graf" class="navi">診療実績</a></li>
							<li><a href="/#ishi" class="navi">医師紹介</a></li>
							<li><a href="/#kanren_sec02" class="navi">採用・求人</a></li>
							<li><a href="/#houjin" class="navi">法人概要</a></li>
							<li class="fax"><span class="fax_txt">03-5843-0152</span></li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="right">
        <div class="contact_box">
          <p>
            ※詳細・お問い合わせは各院ホームページからお願いいたします
          </p>
        </div>
      </div>
    </header>
  </div>

  <div class="nav pc">
    <nav>
      <ul>
        <li><a href="/#bunin_box" class="navi">各院案内</a></li>
        <li><a href="/#sec_07" class="navi">お知らせ</a></li>
        <li><a href="/#message" class="navi">理事長挨拶</a></li>
        <li><a href="/#about" class="navi">訪問診療とは</a></li>
        <li><a href="/#sec_02" class="navi">ふたばの特色</a></li>
        <li><a href="/#sec_04" class="navi">診療科目</a></li>
        <li><a href="/#sec_05" class="navi">診療日</a></li>
        <li><a href="/#shinryou" class="navi">診療内容</a></li>
        <li><a href="/#graf" class="navi">診療実績</a></li>
        <li><a href="/#ishi" class="navi">医師紹介</a></li>
        <li><a href="/#kanren_sec02" class="navi">採用・求人</a></li>
        <li><a href="/#houjin" class="navi">法人概要</a></li>
      </ul>
    </nav>
  </div>
	<article id="wrap">
    <ul id="breadcrumb">
			<li><a href="/">ホーム</a>&nbsp;&gt;&nbsp;</li>
			<?php if(!is_home() && is_single()): ?>
			  <li><a href="/news/all/">お知らせ一覧</a>&nbsp;&gt;&nbsp;</li>
			  <li><?php the_title_attribute(); ?></li>
      <?php else : ?>
			  <li>お知らせ一覧</li>
			<?php endif; ?>
		</ul>
