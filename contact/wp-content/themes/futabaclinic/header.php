<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta content="width=375,user-scalable=no" name="viewport">

<?php if ( is_home() || is_front_page() ) : ?>
<title>お問い合わせ | ふたば在宅クリニック - 久喜市、加須市、幸手市の訪問診療</title>
<?php endif; ?>

<?php
    $url = $_SERVER['REQUEST_URI'];
  if(strstr($url,'input')==true):
?>
<title>お問い合わせ 入力 | ふたば在宅クリニック - 久喜市、加須市、幸手市の訪問診療</title>
<?php endif; ?>

<?php
    $url = $_SERVER['REQUEST_URI'];
  if(strstr($url,'confirm')==true):
?>
<title>お問い合わせ 確認 | ふたば在宅クリニック - 久喜市、加須市、幸手市の訪問診療</title>
<?php endif; ?>

<?php
    $url = $_SERVER['REQUEST_URI'];
  if(strstr($url,'thanks')==true):
?>
<title>お問い合わせ 完了 | ふたば在宅クリニック - 久喜市、加須市、幸手市の訪問診療</title>
<?php endif; ?>

<meta name="description" content="ふたば在宅クリニック 埼玉院（久喜市、伊奈町、幸手市、加須市、白岡市、蓮田市、春日部市、宮代町、杉戸町、五霞町)埼玉県・利根地域の訪問診療・往診・在宅医療">
<meta name="keywords" content="ふたば在宅クリニック,お問い合わせ,在宅療養支援診療所,埼玉県,利根地域">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
<link rel="stylesheet" type="text/css" href="/common/styles/base.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/style.css" media="all">
<?php if ( is_home() || is_front_page() ) : ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/top.css" media="all">
<?php endif; ?>

<link rel="SHORTCUT ICON" href="/icon.ico">
<link rel="apple-touch-icon-precomposed" href="https://www.futabaclinic.jp/webclip.png" />

<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header_tag.php'); ?>
<?php wp_head(); ?>
</head>

<body id="contact" class="preload drawer drawer--top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/analyticstracking.php'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>
	<article id="wrap">
