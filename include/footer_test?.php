<p id="page-top">
	<a href="#"><img src="/common/images/to_top.svg" alt="ページトップへ"></a>
</p>
<footer>
	<div id="footer_in">
		<div id="footer_in_02">
			<div class="left">
                <?php $url = $_SERVER['REQUEST_URI']; ?>
                <p class="logo">
                    <?php if($url == "/kitasenju/" || $url == "/contact/input_kitasenju/" || $url == "/contact/confirm_kitasenju/" || $url == "/contact/thanks_kitasenju/") { ?>
                        <a href="/all/"><img src="/common/images/footer_logo_k_02.svg" alt="医療法人社団 爽緑会 ふたば在宅クリニック 北千住" loading="lazy"></a>
                    <?php } else if ($url == "/edogawa/" || $url == "/contact/input_edogawa/" || $url == "/contact/confirm_edogawa/" || $url == "/contact/thanks_edogawa/"){ ?>
                        <a href="/all/"><img src="/common/images/footer_logo_e_02.svg" alt="医療法人社団 爽緑会 ふたば在宅クリニック 新小岩" loading="lazy"></a>
                    <?php } else if ($url == "/kinshichou/" || $url == "/contact/input_kinshichou/" || $url == "/contact/confirm_kinshichou/" || $url == "/contact/thanks_kinshichou/"){ ?>
                        <a href="/all/"><img src="/common/images/logo_tokyo_kin.svg" alt="医療法人社団 爽緑会 ふたば在宅クリニック 錦糸町" loading="lazy"></a>
                    <?php } else { ?>
                        <a href="/kuki/"><img src="/common/images/footer_logo_s_02.svg" alt="ふたば在宅クリニック 埼玉院,埼玉県、利根地域（久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市など）の在宅医療 訪問診療 訪問看護 往診" loading="lazy"></a>
                    <?php } ?>
                </p>

                <?php if($url == "/kitasenju/" || $url == "/contact/input_kitasenju/" || $url == "/contact/confirm_kitasenju/" || $url == "/contact/thanks_kitasenju/") { ?>
                    <p class="address address_01">〒120-0034 東京都足立区千住2-4<br class="sp"> オカバツインタワービル イースト8階</p>
                <?php } else if ($url == "/edogawa/" || $url == "/contact/input_edogawa/" || $url == "/contact/confirm_edogawa/" || $url == "/contact/thanks_edogawa/"){ ?>
                    <p class="address address_01">〒120-0034 東京都足立区千住2-4<br> オカバツインタワービル イースト8階（準備室）</p>
                <?php } else if ($url == "/kinshichou/" || $url == "/contact/input_kinshichou/" || $url == "/contact/confirm_kinshichou/" || $url == "/contact/thanks_kinshichou/"){ ?>
                    <p class="address address_01">〒130-0013 東京都墨田区錦糸1-4-14<br> 長嶋ビル 4階</p>
                <?php } else { ?>
				    <p class="address address_01">〒346-0016 埼玉県久喜市久喜東1-2-5 東山ビル 3階-A</p>
                <?php } ?>
			</div>
			<div class="right">
				<ul>
					<li><a href="/kuki/">ホーム</a></li>
					<li><a href="/kuki/message/">理事長挨拶・スタッフ紹介</a></li>
					<li><a href="/kuki/guide/">当院について</a></li>
					<li><a href="/kuki/about/">在宅診療とは</a></li>
					<li><a href="/kuki/area/">訪問地域</a></li>
					<li><a href="/kuki/recruit/">採用・求人</a></li>
					<li><a href="/contact/input/">お問い合わせ・お申し込み</a></li>
					<li><a href="/news/">お知らせ</a></li>
					<li><a href="/">法人トップ・分院案内</a></li>
					<li><a href="/kuki/privacy/">プライバシーポリシー</a></li>
					<li><a href="/kuki/faq/">よくあるご質問</a></li>
				</ul>
			</div>
		</div>
		<p class="copy_txt"><small>Copyright © <?php echo date("Y"); ?> ふたば在宅クリニック All Rights Reserved.</small></p>
	</div>
</footer>

<div class="fixed__cv">
    <div class="fixed__cv__contact">
        <a href="/contact/input/#mw_wp_form_mw-wp-form-4" class="mail">
        </a>
        <a href="tel:0480-44-9178" class="tel"></a>
    </div>
</div>

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
      // 各院トップページタブ
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
