<p id="page-top">
	<a href="#"><img src="/common/images/to_top.svg" alt="ページトップへ"></a>
</p>
<footer>
	<div id="footer_in">
		<div id="footer_in_02">
			<div class="left">
        <p class="logo">
          <a href="/">
            <img src="/common/images/logo_v2_02.svg" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック">
          </a>
        </p>
			</div>
			<div class="right">
        <?php
						$url = $_SERVER['REQUEST_URI'];
						if (strpos($url, 'history.php') !== false || strpos($url, 'organization.php') !== false) :
					?>
          <ul>
            <li><a href="/#bunin_box" class="navi">各院案内</a></li>
            <li><a href="/#sec_07" class="navi">お知らせ</a></li>
            <li><a href="/#message" class="navi">理事長挨拶</a></li>
            <li><a href="/#about" class="navi">訪問診療とは</a></li>
            <li><a href="/#sec_02" class="navi">ふたばの特色</a></li>
            <li><a href="/#sec_04" class="navi">診療内容・日程</a></li>
            <li><a href="/#graf" class="navi">診療実績</a></li>
            <li><a href="/#ishi" class="navi">医師紹介</a></li>
            <li><a href="/#kanren_sec02" class="navi">採用・求人</a></li>
            <li><a href="/#houjin" class="navi">法人概要</a></li>
            <li><a href="/history.php" class="navi" target="_blank">グループ沿革</a></li>
            <!-- <li><a href="/history.php" class="navi" target="_blank">組織図</a></li> -->
          </ul>
        <?php else : ?>
          <ul>
            <li><a href="#bunin_box" class="navi">各院案内</a></li>
            <li><a href="#sec_07" class="navi">お知らせ</a></li>
            <li><a href="#message" class="navi">理事長挨拶</a></li>
            <li><a href="#about" class="navi">訪問診療とは</a></li>
            <li><a href="#sec_02" class="navi">ふたばの特色</a></li>
            <li><a href="#sec_04" class="navi">診療内容・日程</a></li>
            <li><a href="#graf" class="navi">診療実績</a></li>
            <li><a href="#ishi" class="navi">医師紹介</a></li>
            <li><a href="#kanren_sec02" class="navi">採用・求人</a></li>
            <li><a href="#houjin" class="navi">法人概要</a></li>
            <li><a href="/history.php" class="navi" target="_blank">グループ沿革</a></li>
            <!-- <li><a href="/history.php" class="navi" target="_blank">組織図</a></li> -->
          </ul>
        <?php endif; ?>
			</div>
		</div>
		<p class="copy_txt"><small>Copyright © <?php echo date("Y"); ?> ふたば在宅クリニック All Rights Reserved.</small></p>
	</div>
</footer>
<div class="fixed__cv">
  <div class="fixed__cv__contact">
    <a href="mailto:recruit@futabaclinic.jp" class="mail"></a>
    <a href="tel:03-5843-0151" class="tel"></a>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/common/js/cookie.js" type="text/javascript"></script>
<script src="/common/js/styleswitcher.js" type="text/javascript"></script>
<script type="text/javascript">
  <?php
  $url = $_SERVER['REQUEST_URI'];

  // URLに 'contact' が含まれていない場合にのみスクリプトを実行
  if (strpos($url, 'contact') === false):
  ?>
  $(document).ready(function() {
    // ページ読み込み時にフェードイン
    $('body').hide().fadeIn(1500);

    // ページ離脱時にフェードアウト
    $(window).on("beforeunload", function(e) {
      const activeElement = document.activeElement;

      // メールリンクの場合はフェードアウトをスキップ
      if (activeElement.tagName === 'A' && activeElement.href.startsWith('mailto:')) {
        return;
      }

      // 通常のページ遷移時
      $('body').fadeOut(1500);
    });
  });

  $(window).on('load', function() {
    // ページロード後の処理
    $("body").removeClass("preload").css("display", "block").addClass("drawer-close");
  });

  // 戻る操作時のキャッシュ対応
  $(window).on('pageshow', function(event) {
    if (event.originalEvent.persisted) {
      $('body').fadeIn(1500); // キャッシュ復元時にフェードイン
    }
  });
  <?php endif; ?>

  $(function () {
    $('.news_list .tab li').on('click touchend', function(e) {
      e.preventDefault(); // スマホでの意図しない挙動を防ぐため
      var index = $('.news_list .tab li').index(this);

      $('.news_list .tab li').removeClass('active');
      $(this).addClass('active');

      $('.news_show .show').removeClass('active').eq(index).addClass('active');
    });

    var headerHight = $("header").height();

    $('a[href^="#"]').click(function(e) {
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top - headerHight;

      $.when(
        $("html, body").animate({
          scrollTop: position
        }, 400, "swing"),
        e.preventDefault(),
      ).done(function() {
        var diff = target.offset().top - headerHight;
        if (diff === position) {
        } else {
          $("html, body").animate({
          scrollTop: diff
          }, 10, "swing");
        }
      });
    });

    var nav = $('.nav');
      //navの位置
      var navTop = nav.offset().top;
      //スクロールするたびに実行
      $(window).scroll(function () {
        var winTop = $(this).scrollTop();
        //スクロール位置がnavの位置より下だったらクラスfixedを追加
        if (winTop >= navTop) {
            nav.addClass('fixed')
        } else if (winTop <= navTop) {
            nav.removeClass('fixed')
        }
    });

    var topBtn = $('#page-top');
      topBtn.hide();
      //スクロールが100に達したらボタン表示
      $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
              topBtn.fadeIn();
          } else {
              topBtn.fadeOut();
          }
      });
      // スクロールしてトップ
      topBtn.click(function () {
          $('body,html,').animate({
              scrollTop: 0
          }, 500);
          return false;
      });

      var fixed = $('.fixed__cv');
      fixed.hide();

      $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
              fixed.fadeIn();
          } else {
              fixed.fadeOut();
          }
      });

      $('.drawer-menu li a.navi').click(function() {
      $('.navi').parents('.sp_nav').toggleClass('close');

      $('.navi').parents('body').removeClass('drawer-open');
      $('.navi').parents('body').addClass('drawer-close');
      $('.navi').parents('body').toggleClass('navi_close');
      $('.navi').parents('body')
          .css({
          'overflow':'auto',
      });
    });
    $('.drawer-toggle').click(function() {
      if ($('.navi').parents('body').hasClass('drawer-close')) {
          $('.navi').parents('body').addClass('drawer-open');
          $('.navi').parents('body').removeClass('drawer-close');
          $('body')
          .css({
          'overflow':'hidden',
      });
      } else {
          $('.navi').parents('body').removeClass('drawer-open');
          $('.navi').parents('body').addClass('drawer-close');
          $('body')
          .css({
          'overflow':'auto',
      });
    }
    });

    // タブ切り替えのクリック処理
    // $("ul.tab_area li").click(function () {
    //   var index = $("ul.tab_area li").index(this);
    //   // $(".content_area").css("display", "none");
    //   // $(".content_area").eq(index).fadeIn(100);
    //   $("ul.tab_area li").removeClass("active");
    //   $(this).addClass("active");
    //   $('.news_show .show').removeClass('active').eq(index).addClass('active');
    // });

  });
</script>

<style>
  .right ul li {
    width: 150px!important;
  }

  @media (max-width: 480px){
    .navi_close {
      overflow: auto !important;
    }
    #ishi {
      margin-bottom: 100px;
    }
  }

  @media all and (min-width: 481px) {
    .fixed__cv {
      display: none !important;
    }
  }
</style>
