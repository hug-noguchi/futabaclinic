<?php

/*
Template Name: header-5
*/
?>

<?php get_header(5); ?>
    <ul id="breadcrumb">
      <li><a href="/kinshichou/">ホーム</a>&nbsp;&gt;</li>
      <li>お問い合わせ・お申し込み 入力</li>
    </ul>
    <div id="visual">
      <img class="pc" src="/common/images/contact_key.jpg" srcset="/common/images/contact_key_2x.jpg 2x" loading="”lazy”" alt="お問い合わせ・お申し込み 入力">
      <img class="sp" src="/common/images/contact_sp_key.jpg" srcset="/common/images/contact_sp_key_2x.jpg 2x" loading="”lazy”" alt="お問い合わせ・お申し込み 入力">
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
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side_kinshichou.php'); ?>
    </div>
  </article>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/footer_kinshichou.php'); ?>
	<?php wp_footer(); ?>
</body>
</html>
