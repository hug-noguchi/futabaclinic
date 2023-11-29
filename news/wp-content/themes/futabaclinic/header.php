<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta content="width=375,user-scalable=no" name="viewport">
<?php if(is_home()): ?>
<title>お知らせ一覧 | ふたば在宅クリニック - 久喜市、加須市、幸手市の訪問診療</title>
<?php endif; ?>
<?php if(is_single()): ?>
<title><?php the_title_attribute(); ?> | お知らせ一覧 | ふたば在宅クリニック - 久喜市、加須市、幸手市の訪問診療</title>
<?php endif; ?>
<meta name="description" content="ふたば在宅クリニック 埼玉院（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、伊奈町、五霞町）埼玉県・利根地域の訪問診療・往診・在宅医療">
<meta name="keywords" content="ふたば在宅クリニック,お知らせ一覧,在宅療養支援診療所,埼玉県,利根地域">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
<link rel="stylesheet" type="text/css" href="/common/styles/base.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/style.css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php if ( is_single() ): ?>
	<style type="text/css">
		@media only screen and ( max-width: 480px ) {
			section h3,
			section p{
				margin: 0 auto;
				width: 93%;
			}
		}
	</style>
<?php endif; ?>
<link rel="SHORTCUT ICON" href="/icon.ico">
<link rel="apple-touch-icon-precomposed" href="https://www.futabaclinic.jp/webclip.png" />
<?php wp_head(); ?>
<style>
	@media (max-width: 376px) {
		header h1 .txt_00 span {
			font-size: 10px!important;
		}
	}
</style>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header_tag.php'); ?>
</head>

<?php if ( is_single('53') ) : ?>
    <style>
		#main ul{
			margin-top: 5px;
		}
		#main li{
			margin-bottom: 10px;
			padding-left: 1.5em;
			text-indent: -1.5em;
		}
		</style>
<?php endif; ?>
<?php if ( is_single('36')||is_single('42')||is_single('53') ) : ?>
    <style>
		@media all and (max-width: 480px) {
		#main section h2{
		font-size: 14px;
		}
	}
	</style>
<?php endif; ?>



<body  class=" drawer drawer--top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>
		<article id="wrap">
		<ul id="breadcrumb">
			<li><a href="/kuki/">ホーム</a>&nbsp;&gt;&nbsp;</li>
			<?php if(is_home()): ?>
			<li>お知らせ一覧</li>
			<?php endif; ?>
			<?php if(!is_home() && is_single()): ?>
			<li><a href="/news/">お知らせ一覧</a>&nbsp;&gt;&nbsp;</li>
			<li><?php the_title_attribute(); ?></li>
			<?php endif; ?>
		</ul>
