<!doctype html>
<html>
<head>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/gtm_head.php'); ?>
  <meta charset="UTF-8">
  <meta content="width=375,user-scalable=no" name="viewport">
  <meta name="format-detection" content="telephone=no">

  <?php if ( is_home() || is_front_page() ) : ?>
    <title>お問い合わせ | ふたば在宅クリニック -  葛飾区、江戸川区の訪問診療</title>
  <?php endif; ?>

  <?php
    $url = $_SERVER['REQUEST_URI'];
    if(strstr($url,'input')==true):
  ?>
    <title>お問い合わせ 入力 | ふたば在宅クリニック -  葛飾区、江戸川区の訪問診療</title>
  <?php endif; ?>

  <?php
    $url = $_SERVER['REQUEST_URI'];
    if(strstr($url,'confirm')==true):
  ?>
    <title>お問い合わせ 確認 | ふたば在宅クリニック -  葛飾区、江戸川区の訪問診療</title>
  <?php endif; ?>

  <?php
    $url = $_SERVER['REQUEST_URI'];
    if(strstr($url,'thanks')==true):
  ?>
    <title>お問い合わせ 完了 | ふたば在宅クリニック -  葛飾区、江戸川区の訪問診療</title>
  <?php endif; ?>

  <meta name="description" content="ふたば在宅クリニック 新小岩院（葛飾区、江戸川区、墨田区、江東区、足立区、荒川区、台東区）東京都・城東エリアの訪問診療・往診・在宅医療">
  <meta name="keywords" content="ふたば在宅クリニック 新小岩院,東京都,墨田区,江東区,台東区,葛飾区,江戸川区,足立区,荒川区,在宅医療,訪問診療,往診">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
  <link rel="stylesheet" type="text/css" href="/common/styles/base.css" media="all">
  <link rel="stylesheet" type="text/css" href="/shinkoiwa/common/styles/base.css" media="all">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/style.css" media="all">
  <?php if ( is_home() || is_front_page() ) : ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/top.css" media="all">
  <?php endif; ?>

  <link rel="SHORTCUT ICON" href="/icon.ico">
  <link rel="apple-touch-icon-precomposed" href="https://www.futabaclinic.jp/webclip.png" />
  <style>
    @media (min-width: 481px) {
      header #header_logo {
        width: 357px;
        float: left;
        margin-right: 30px;
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
  </style>
  <?php wp_head(); ?>
</head>

<body id="contact" class="preload drawer drawer--top">
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
          <ul class="pc icon_box">
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
