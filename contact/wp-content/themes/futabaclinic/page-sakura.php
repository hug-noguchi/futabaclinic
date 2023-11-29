<?php

/*
Template Name: header-3
*/
?>

<?php get_header(3); ?>
  <ul id="breadcrumb">
    <li><a href="/sakura/">ホーム</a>&nbsp;&gt;</li>
    <?php
        $url = $_SERVER['REQUEST_URI'];
        if(strstr($url,'input')==true):
      ?>
    <li>お問い合わせ 入力</li>
    <?php endif; ?>
    <?php
      $url = $_SERVER['REQUEST_URI'];
      if(strstr($url,'confirm')==true):
    ?>
    <li>お問い合わせ 確認</li>
    <?php endif; ?>

    <?php
      $url = $_SERVER['REQUEST_URI'];
      if(strstr($url,'thanks')==true):
    ?>
    <li>お問い合わせ 完了</li>
    <?php endif; ?>
  </ul>
  <div id="visual">
    <p>
      <img class="pc" src="/common/images/contact_key.jpg" srcset="/common/images/contact_key_2x.jpg 2x" loading="”lazy”" alt="お問い合わせ・お申し込み 入力">
      <img class="sp" src="/common/images/contact_sp_key.jpg" srcset="/common/images/contact_sp_key_2x.jpg 2x" loading="”lazy”" alt="お問い合わせ・お申し込み 入力">
    </p>
  </div>
  <div id="contents">
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
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side_sakura.php'); ?>
    </div>
  </div>
  </article>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/footer_sakura.php'); ?>
	<?php wp_footer(); ?>
</body>
</html>
