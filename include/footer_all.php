<p id="page-top">
	<a href="#"><img src="/common/images/to_top.svg" alt="ページトップへ"></a>
</p>
<footer>
	<div id="footer_in">
		<div id="footer_in_02">
			<div class="left">
                <p class="logo">
                        <a href="/"><img src="/common/images/logo_v2_02.svg" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック"></a>
                </p>
			</div>
			<div class="right">
				<ul>
                    <li><a href="/#bunin_box" class="navi">各院案内</a></li>
                    <li><a href="/#sec_07" class="navi">お知らせ</a></li>
                    <li><a href="/#message" class="navi">理事長挨拶</a></li>
                    <li><a href="/#about" class="navi">訪問診療とは</a></li>
                    <li><a href="/#sec_02" class="navi">ふたばの特色</a></li>
                    <li><a href="/#sec_04" class="navi">診療科目</a></li>
                    <li><a href="/#sec_05" class="navi">診療日</a></li>
                    <li><a href="/#shinryou" class="navi">診療内容</a></li>
					<li><a href="/#graf" class="navi">診療実績</a></li>
                    <li><a href="/#ishi" class="navi">医師紹介</a></li>
					<li><a href="/#kanren_sec02" class="navi">採用・求人</a></li>
				</ul>
			</div>
		</div>
		<p class="copy_txt"><small>Copyright © <?php echo date("Y"); ?> ふたば在宅クリニック All Rights Reserved.</small></p>
	</div>
</footer>

<div class="fixed__cv">
    <div class="fixed__cv__contact">
        <a href="mailto:recruit@futabaclinic.jp" class="mail">
        </a>
        <a href="tel:03-5843-0151" class="tel"></a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/common/js/cookie.js" type="text/javascript"></script>
<script src="/common/js/styleswitcher.js" type="text/javascript"></script>

<script type="text/javascript">
    <?php
        $url = $_SERVER['REQUEST_URI'];
        if(strstr($url,'contact')==false):
    ?>
            $(document).ready(function() {
                $('body').fadeIn(1500);
                $(window).on("beforeunload",function(e){
                    $('body').fadeOut(1500);
                });
            });
    <?php endif; ?>

    $(function() {
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
    });

    $(window).on('load' , function() {
        $("body").removeClass("preload");
        $("body").addClass("drawer-close");
    });

    $(function() {
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
    });

    $(function(){
        $('a[href^=#]').click(function(){
            var speed = 500;
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
            $("html, body").animate({scrollTop:position}, speed, "swing");
            return false;
        });
    });

    $(function () {
        $('a.navi').click(function () {
            var headerHeight = 0;
            var speed = 500;
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? "html" : href);
            var position = target.offset().top - headerHeight;
            $("html, body").animate({scrollTop:position}, speed, "swing");
            return false;
        });
    });

    $(function() {
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


    $(function () {
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

		});


</script>

<style>

.right ul li {
    width: 200px!important;
}

@media (max-width: 480px){
    .navi_close {
        overflow: auto !important;
    }
}

@media all and (min-width: 481px) {
  .fixed__cv {
    display: none !important;
  }
}

</style>
