<p id="page-top">
	<a href="#"><img src="/common/images/to_top.svg" alt="ページトップへ" loading="lazy"></a>
</p>
<footer>
	<div id="footer_in">
		<div id="footer_in_02">
			<div class="left">
        <?php $url = $_SERVER['REQUEST_URI']; ?>
        <p class="logo">
          <a href="/yachiyo/">
            <img src="/common/images/logo_yachiyo.svg" class="logo_yachiyo" alt="医療法人社団 千葉爽緑会 ふたば在宅クリニック 八千代院,千葉県・北西部・印旛地域（八千代市、千葉市、印西市、四街道市、佐倉市、酒々井町）の在宅医療 訪問診療 訪問看護 往診" loading="lazy">
          </a>
        </p>
        <p class="address address_01">〒276-0020 千葉県八千代市勝田台北1-9-1<br class="sp"> みかど第2ビル 104</p>
        <p class="address address_01">〒274-0063 千葉県船橋市習志野台2-6-1<br class="sp"> 小林ビル 3階-C</p>
        <p class="address address_02">〒285-0837 千葉県佐倉市王子台1丁目22-13<br class="sp"> 海佑ビル 1階</p>
			</div>
			<div class="right">
				<ul>
					<li><a href="/yachiyo/">ホーム</a></li>
					<li><a href="/yachiyo/message/">代表挨拶・スタッフ紹介</a></li>
					<li><a href="/yachiyo/guide/">当院について</a></li>
					<li><a href="/yachiyo/about/">在宅診療とは</a></li>
					<li><a href="/yachiyo/area/">訪問地域</a></li>
					<li><a href="/yachiyo/recruit/">採用・求人</a></li>
					<li><a href="/contact/input_yachiyo/">お問い合わせ・お申し込み</a></li>
          <li><a href="/news/yachiyo/">お知らせ</a></li>
					<li><a href="/">法人トップ・分院案内</a></li>
					<li><a href="/yachiyo/privacy/">プライバシーポリシー</a></li>
          <li><a href="/yachiyo/faq/">よくあるご質問</a></li>
				</ul>
			</div>
		</div>
		<p class="copy_txt"><small>Copyright © <?php echo date("Y"); ?> ふたば在宅クリニック All Rights Reserved.</small></p>
	</div>
</footer>

<div class="fixed__cv">
  <div class="fixed__cv__contact">
    <a href="/contact/input_yachiyo/#mw_wp_form_mw-wp-form-4" class="mail"></a>
    <a href="tel:0474093677" class="tel"></a>
  </div>
</div>

<style>
  @media (min-width: 481px) {
    footer #footer_in {
      width: 1055px;
    }
  }
  @media (max-width: 480px) {
    footer {
      margin-top: 0;
      margin-bottom: 80px;
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
<script src="/common/js/cookie.js" type="text/javascript"></script>
<script src="/common/js/styleswitcher.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>

<script type="text/javascript">
  <?php
      $url = $_SERVER['REQUEST_URI'];
      if(strstr($url,'contact')==false):
  ?>
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
    var navTop = nav.offset().top;
    $(window).scroll(function () {
        var winTop = $(this).scrollTop();
        if (winTop >= navTop) {
            nav.addClass('fixed')
        } else if (winTop <= navTop) {
            nav.removeClass('fixed')
        }
    });

    var topBtn = $('#page-top');
    topBtn.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
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

    $('a.navi').click(function() {
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
