<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=375,user-scalable=no" name="viewport">
  <meta name="format-detection" content="telephone=no">
  <?php if ( is_home() || is_front_page() ) : ?>
    <title>お問い合わせ | 医療法人社団 爽緑会 ふたば在宅クリニック | 東京・城東エリアの在宅療養支援診療所</title>
  <?php endif; ?>
  <?php $url = $_SERVER['REQUEST_URI']; ?>
  <?php if(strstr($url,'input')==true): ?>
    <title>お問い合わせ 入力 | 医療法人社団 爽緑会 ふたば在宅クリニック | 東京・城東エリアの在宅療養支援診療所</title>
  <?php endif; ?>

  <?php if(strstr($url,'confirm')==true): ?>
    <title>お問い合わせ 確認 | 医療法人社団 爽緑会 ふたば在宅クリニック | 東京・城東エリアの在宅療養支援診療所</title>
  <?php endif; ?>

  <?php if(strstr($url,'thanks')==true): ?>
    <title>お問い合わせ 完了 | 医療法人社団 爽緑会 ふたば在宅クリニック | 東京・城東エリアの在宅療養支援診療所<</title>
  <?php endif; ?>

  <meta name="description" content="医療法人社団 爽緑会 ふたば在宅クリニック（葛飾区、江戸化区、墨田区、江東区、足立区、市川市、浦安市など）">
  <meta name="keywords" content="ふたば在宅クリニック,在宅療養支援診療所,東京都,北千住">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
  <link rel="stylesheet" type="text/css" href="/common/styles/base.css" media="all">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/style.css" media="all">
  <?php if ( is_home() || is_front_page() ) : ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/top.css" media="all">
  <?php endif; ?>

  <link rel="SHORTCUT ICON" href="/icon.ico">
  <link rel="apple-touch-icon-precomposed" href="https://www.futabaclinic.jp/webclip.png" />
  <style>
    #wrap {
      margin: 0 auto;
    }
    #contents {
      margin-top: 0;
    }
    #main {
      margin-left: 0;
      width: 100%;
    }
    #main form {
      margin-top: 40px;
    }
    #main form table {
      margin: 0 auto 20px;
    }
    footer {
      background-color: #e7ffc5;
      border-top: none;
      text-align: center;
      width: 100%;
    }
    footer img {
      display: inline-block;
      margin-top: 50px;
      max-width: 500px;
      width: 38%;
    }
    @media (min-width: 601px) {
      footer img {
        width: 30%;
      }
    }
    footer p {
      margin-top: 50px;
    }
    <?php
      $url = $_SERVER['REQUEST_URI'];
      if(strstr($url,'thanks') == true):
    ?>
      footer {
        position: fixed;
        bottom: 0;
      }
    <?php endif; ?>
  </style>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header_tag.php'); ?>
  <?php wp_head(); ?>
</head>

<body id="contact" class="preload drawer drawer--top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/analyticstracking.php'); ?>
	<article id="wrap">
