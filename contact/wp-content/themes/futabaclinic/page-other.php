<?php

/*
Template Name: header-other
*/
?>

  <?php get_header('other'); ?>
        <?php
          if (have_posts()) :
            while (have_posts()):
              the_post();
              the_content();
            endwhile;
          endif;
        ?>
        <!-- </div> -->
      </section>
    </div>
  </div>
  </article>
  <p id="page-top">
    <a href="#"><img src="/common/images/to_top.svg" alt="ページトップへ"></a>
  </p>
  <footer role="contentinfo">
		<img src="/all/assets/images/logo.svg" alt="ふたば在宅クリニック">
		<p>
      <span>クリニックHP</span>/ © 2020 ふたば在宅クリニック
    </p>
	</footer>

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
          $(window).on("beforeunload",function(e){
            $('body').fadeOut(1500);
          });
        });
    <?php endif; ?>

    $(window).on('load' , function() {
      $("body").removeClass("preload");
    });

    $(function() {
      const topBtn = $('#page-top');
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
    });

    $(function(){
      $('a[href^=#]').click(function() {
        const speed    = 500;
        const href     = $(this).attr("href");
        const target   = $(href == "#" || href == "" ? 'html' : href);
        const position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
      });
    });

    $(function() {
      $(document).ready(function() {
        $('.drawer').drawer();
      });
    });
  </script>

  <?php wp_footer(); ?>
</body>
</html>