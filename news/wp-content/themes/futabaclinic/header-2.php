<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=375,user-scalable=no" name="viewport">
  <meta name="format-detection" content="telephone=no">
  <?php if(is_single()): ?>
    <title><?php the_title_attribute(); ?> | お知らせ一覧 | ふたば在宅クリニック -  葛飾区、江戸川区の訪問診療</title>
    <meta name="description" content="ふたば在宅クリニック 新小岩院（葛飾区、江戸川区、墨田区、江東区、足立区、荒川区、台東区）東京都・城東エリアの訪問診療・往診・在宅医療のお知らせ「<?php the_title_attribute(); ?> 」になります。">
    <meta name="keywords" content="<?php the_title_attribute(); ?> ,ふたば在宅クリニック 新小岩院,東京都,葛飾区,江戸川区,在宅医療,訪問診療,往診">
  <?php else: ?>
    <title>お知らせ一覧 | ふたば在宅クリニック -  葛飾区、江戸川区の訪問診療</title>
    <meta name="description" content="ふたば在宅クリニック 新小岩院（葛飾区、江戸川区、墨田区、江東区、足立区、荒川区、台東区）東京都・城東エリアの訪問診療・往診・在宅医療のお知らせ一覧になります。">
    <meta name="keywords" content="ふたば在宅クリニック 新小岩院,東京都,葛飾区,江戸川区,在宅医療,訪問診療,往診">
  <?php endif; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
  <link rel="stylesheet" type="text/css" href="/common/styles/base.css" media="all">
  <link rel="stylesheet" type="text/css" href="/shinkoiwa/common/styles/base.css" media="all">
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
    @media (min-width: 481px) {
      header #header_logo {
        margin-right: 10px;
      }
      header .right #right_box {
        margin-bottom: 12px;
      }
      header .right .contact_box .contact_box_in .fax {
        background: url(/common/images/icon_fax.svg) no-repeat 0 0/27px 32px;
        font-size: 22px;
        margin-top: 2px;
        padding-left: 29px;
        font-weight: bold;
      }
      footer #footer_in_02 .left {
        margin-right: 15px;
      }
    }
    @media (max-width: 480px) {
      .sp_nav .mail span {
        color: #8bc33e;
        display: block;
        font-size: 13px;
        font-weight: bold;
        margin-top: 1px;
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
        <h1>
          <span class="txt_00">東京都・城東エリアの <span>訪問診療・往診・在宅医療</span></span><br>
          <span class="txt_01">（葛飾区、江戸川区、墨田区、江東区、足立区、荒川区、台東区）</span>
        </h1>
        <div class="logo_box">
          <p id="header_logo">
            <a href="/shinkoiwa/">
              <img src="/common/images/logo_tokyo_s.svg" alt="医療法人社団 爽緑会 ふたば在宅クリニック 新小岩院（葛飾区、江戸川区、墨田区、江東区、足立区、荒川区、台東区）東京都・城東エリアの在宅医療 訪問診療 往診">
            </a>
          </p>
          <ul class="icon_box pc">
            <li><img src="/common/images/header_icon_03.svg" alt="在宅医療(24時間365日),ふたば在宅クリニック 新小岩院,東京都・城東エリア（葛飾区、江戸川区、墨田区、江東区、足立区、荒川区、台東区）の訪問診療・往診・在宅医療"></li>
            <li><img src="/common/images/header_icon_02.svg" alt="内科 心・肺・脳,ふたば在宅クリニック 新小岩院,東京都・城東エリア（葛飾区、江戸川区、墨田区、江東区、足立区、荒川区、台東区）の訪問診療・往診・在宅医療"></li>
            <li><img src="/common/images/header_icon_01.svg" alt="がん・緩和ケア,ふたば在宅クリニック 新小岩院,東京都・城東エリア（葛飾区、江戸川区、墨田区、江東区、足立区、荒川区、台東区）の訪問診療・往診・在宅医療"></li>
          </ul>
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
              <li><a href="/shinkoiwa/">ホーム</a></li>
              <li><a href="/shinkoiwa/message/">理事長挨拶・スタッフ紹介</a></li>
              <li><a href="/shinkoiwa/guide/">当院について</a></li>
              <li><a href="/shinkoiwa/about/">在宅診療とは</a></li>
              <li><a href="/shinkoiwa/faq/">よくあるご質問</a></li>
              <li><a href="/shinkoiwa/area/">訪問地域</a></li>
              <li><a href="/">法人トップ・分院案内</a></li>
              <li><a href="/shinkoiwa/recruit/">採用・求人</a></li>
              <li><a href="/contact/input_shinkoiwa/">お問い合わせ・お申し込み</a></li>
              <li><a href="/news/shinkoiwa/">お知らせ</a></li>
              <li><a href="/shinkoiwa/privacy/">プライバシーポリシー</a></li>
              <li class="fax"><span class="fax_txt">03-5879-3531</span></li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="right">
        <div id="right_box">
          <p class="adress">
            お問い合わせ・お申込みは
          </p>
          <ul id="fontSize">
            <li class="changeBtn">小</li>
            <li class="changeBtn">中</li>
            <li class="changeBtn">大</li>
          </ul>
        </div>
        <div class="contact_box">
          <div class="contact_box_in">
            <p class="tel"><a href="tel:0358793530" class="abled">03-5879-3530</a></p>
            <p class="mail"><a href="/contact/input_shinkoiwa/#form"></a></p>
          </div>
        </div>
      </div>
    </header>
  </div>

  <div class="nav pc">
    <nav>
      <ul>
        <li><a href="/shinkoiwa/">ホーム</a></li>
        <li><a href="/shinkoiwa/message/">理事長挨拶<br>・<br>スタッフ紹介</a></li>
        <li><a href="/shinkoiwa/guide/">当院について</a></li>
        <li><a href="/shinkoiwa/about/">在宅診療とは</a></li>
        <li><a href="/shinkoiwa/faq/">よくあるご質問</a></li>
        <li><a href="/shinkoiwa/area/">訪問地域</a></li>
        <li><a href="/">法人トップ<br>・<br>分院案内</a></li>
        <li><a href="/shinkoiwa/recruit/">採用・求人</a></li>
        <li><a href="/contact/input_shinkoiwa/">お問い合わせ<br>・<br>お申し込み</a></li>
      </ul>
    </nav>
  </div>
	<article id="wrap">
    <ul id="breadcrumb">
			<li><a href="/shinkoiwa/">ホーム</a>&nbsp;&gt;&nbsp;</li>
			<?php if(!is_home() && is_single()): ?>
			  <li><a href="/news/shinkoiwa/">お知らせ一覧</a>&nbsp;&gt;&nbsp;</li>
			  <li><?php the_title_attribute(); ?></li>
      <?php else : ?>
			  <li>お知らせ一覧</li>
			<?php endif; ?>
		</ul>
