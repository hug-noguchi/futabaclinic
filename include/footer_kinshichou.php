<p id="page-top">
  <a href="#"><img src="/common/images/to_top.svg" alt="ページトップへ"></a>
</p>
<footer>
	<div id="footer_in">
		<div id="footer_in_02">
			<div class="left">
          <p class="logo">
            <a href="/kinshichou/">
              <img src="/common/images/logo_tokyo_kin.svg" alt="医療法人社団 爽緑会 ふたば在宅クリニック 錦糸町院（墨田区、江東区、台東区、葛飾区、江戸川区、足立区、荒川区など）東京都・城東エリアの在宅医療 訪問診療 往診" loading="lazy">
            </a>
          </p>
          <p class="address address_02">〒130-0013 東京都墨田区錦糸1-4-14<br class="sp"> 長嶋ビル 4階</p>
          <p class="address address_02">〒120-0034 東京都足立区千住2-4<br class="sp"> オカバツインタワービル イースト 8階</p>
          <p class="address address_02">〒124-0024 東京都葛飾区新小岩1-49-10<br class="sp"> 第5デリカビル（メディカルタウン新小岩） 2階</p>
			</div>
			<div class="right">
				<ul>
          <li><a href="/kinshichou/">ホーム</a></li>
					<li><a href="/kinshichou/message/">理事長挨拶・スタッフ紹介</a></li>
					<li><a href="/kinshichou/guide/">当院について</a></li>
					<li><a href="/kinshichou/about/">在宅診療とは</a></li>
					<li><a href="/kinshichou/area/">訪問地域</a></li>
					<li><a href="/kinshichou/recruit/">採用・求人</a></li>
					<li><a href="/contact/input_kinshichou/">お問い合わせ・お申し込み</a></li>
          <li><a href="/news/kinshichou/">お知らせ</a></li>
					<li><a href="/">法人トップ・分院案内</a></li>
					<li><a href="/kinshichou/privacy/">プライバシーポリシー</a></li>
          <li class="faq"><a href="/kinshichou/faq/"><span class="txt">よくあるご質問</span></a></li>
				</ul>
			</div>
		</div>
		<p class="copy_txt"><small>Copyright © <?php echo date("Y"); ?> ふたば在宅クリニック All Rights Reserved.</small></p>
	</div>
</footer>

<div class="fixed__cv">
    <div class="fixed__cv__contact">
        <a href="/contact/input_kinshichou/#mw_wp_form_mw-wp-form-4" class="mail">
        </a>
        <a href="tel:0366588175" class="tel"></a>
    </div>
</div>

<style>
  section#open_box .title_box {
    background: url(/top/images/photo_01_2x.png) no-repeat 570px -8px / 122px 172px;
  }
  @media (max-width: 600px) {
    section#open_box .title_box {
      background: url(/top/images/photo_01_2x.png) no-repeat 89% 8% / 25% auto;
    }
  }
  @media (max-width: 480px) {
    header {
      padding: 10px 10px 4px;
    }
    #header_logo {
      width: 78%;
    }
    .drawer-hamburger {
      top: 24px !important;
    }
  }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/common/js/cookie.js"></script>
<script src="/common/js/styleswitcher.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script>
    <?php $url = $_SERVER['REQUEST_URI'];?>

    <?php if(strstr($url,'contact')==false): ?>
        $(document).ready(function() {
            $('body').fadeIn(1500);
            $(window).on("beforeunload", function(e) {
              if (e.target.activeElement.tagName === 'A' && e.target.activeElement.href.startsWith('mailto:')) {
                return; // フェードアウトをスキップ
              }
              $('body').fadeOut(1500);
            });
        });
    <?php endif; ?>

    $(window).on('load' , function() {
      $("body").removeClass("preload");
  });

  $(function() {
    // トップページタブ
    $('.news_list .tab li').on('click touchend', function(e) {
    e.preventDefault(); // スマホでの意図しない挙動を防ぐため
    var index = $('.news_list .tab li').index(this);

    $('.news_list .tab li').removeClass('active');
    $(this).addClass('active');

    $('.news_show .show').removeClass('active').eq(index).addClass('active');
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
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html,').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    $('a[href^=#]').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });

    $(document).ready(function() {
        $('.drawer').drawer();
    });
    $(document).on("click", ".drawer-toggle", function() {
        $('html, body').toggleClass('fixed');
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
  });
</script>
