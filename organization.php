<?php require('news/wp-load.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<meta content="width=375,user-scalable=no" name="viewport">
<meta property="og:url" content="https://www.futabaclinic.jp/">
<meta property="og:type" content="website">
<meta property="og:title" content="医療法人社団 爽緑会・千葉爽緑会　組織図">
<meta property="og:description" content="医療法人社団 爽緑会 千葉爽緑会 組織図">
<meta property="og:site_name" content="ふたば在宅クリニック 埼玉院">
<meta property="og:image" content="https://www.futabaclinic.jp/top/images/teacher_01.jpg">
<title>医療法人社団 爽緑会・千葉爽緑会　組織図</title>
<meta name="description" content="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック東京都 北千住院 城東エリア（足立区、荒川区、台東区）、新小岩院（葛飾区、江戸川区、墨田区、江東区）、埼玉県 埼玉院 佐倉院（佐倉市、印西市、四街道市、八千代市、千葉市、酒々井町、習志野市、船橋市）在宅医療 訪問診療 訪問看護 往診">
<meta name="keywords" content="ふたば在宅クリニック,在宅療養支援診療所,爽緑会,千葉爽緑会">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
<link rel="stylesheet" type="text/css" href="/common/styles/base.css" media="all">
<link rel="stylesheet" type="text/css" href="/top/styles/style.css" media="all">
<link rel="stylesheet" type="text/css" href="/top/styles/style_02.css" media="all">
<link rel="SHORTCUT ICON" href="/icon.ico">
<link rel="apple-touch-icon-precomposed" href="https://www.futabaclinic.jp/webclip.png">
<link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
<script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
<!--
<PageMap>
    <DataObject type="thumbnail">
        <Attribute name="src" value="https://www.futabaclinic.jp/common/images/point_2_1_100.jpg"/>
        <Attribute name="width" value="100">
        <Attribute name="height" value=“100”>
    </DataObject>
</PageMap>
-->
<meta name="thumbnail" content="https://www.futabaclinic.jp/common/images/point_2_1_100.jpg"/>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header_tag.php'); ?>
</head>

<style>
  #main .organization h2 {
    margin-top: 10px !important;
  }
  #main .organization_chart {
    max-width: 1000px;
    width: 100%;
    margin: 25px auto 0;
    padding-bottom: 10px;
  }
  #main .organization_chart img {
    max-width: 100%;
    height: auto;
    min-width: 600px;
    vertical-align: top;
  }
  @media (max-width: 480px) {
    #main .organization h2 {
      line-height: 1.2;
    }
    #main .organization_chart img {
      max-width: 1000px;
    }
  }
</style>

<body id="top" class="preload drawer drawer--top" style="display: block;">
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/analyticstracking.php'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header02.php'); ?>
	<article id="wrap">
    <ul id="breadcrumb">
			<li><a href="/">ホーム</a>&nbsp;&gt;&nbsp;</li>
			<li>医療法人社団 爽緑会・千葉爽緑会　組織図</li>
		</ul>
    <div id="main">
      <section class="organization">
        <h2>医療法人社団 爽緑会・千葉爽緑会　<br class="sp">組織図</h2>
        <div class="organization_box js-scrollable">
          <div class="organization_chart scroll-container">
            <img src="/common/images/chart.png" alt="組織図">
          </div>
        </div>
      </section>
    </div>
  </article>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/footer02.php'); ?>
  <script>
    new ScrollHint('.js-scrollable', {
      i18n: {
        scrollable: '横スクロール可能です'
      }
    });
  </script>
</body>
</html>
