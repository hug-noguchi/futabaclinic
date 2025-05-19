<style>
  .banner_article_new {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  .banner_article_new a {
    width: 49%;
  }
  @media all and (max-width: 480px) {
    .banner_article_new {
      display: block;
    }
  }
</style>

<?php $url = $_SERVER['REQUEST_URI'];
  if (strpos($url, 'kinshichou') !== false) :
?>
  <a href="/link.html" target="_blank">
    <img src="/common/images/banner_v3.gif" alt="統括院長がリクルートドクターズキャリアに特集されました！リクルートドクターズキャリア">
  </a>
  <a href="https://zaita9iryou.com/22780/" target="_blank">
    <img src="/common/images/banner_v6.gif" alt="統括院長がおうちde医療に特集されました！">
  </a>
  <a href="https://tokyo-doctors.com/clinicList/113223/interview/" target="_blank">
    <img src="/common/images/banner_v10.gif" alt="東京ドクターズに掲載されました！">
  </a>

<?php elseif (strpos($url, 'kitasenju') !== false) : ?>
  <a href="/link.html" target="_blank">
    <img src="/common/images/banner_v3.gif" alt="統括院長がリクルートドクターズキャリアに特集されました！リクルートドクターズキャリア">
  </a>
  <a href="https://zaita9iryou.com/22780/" target="_blank">
    <img src="/common/images/banner_v6.gif" alt="統括院長がおうちde医療に特集されました！">
  </a>
  <a href="https://tokyo-doctors.com/clinicList/66198/interview/" target="_blank">
    <img src="/common/images/banner_v10.gif" alt="東京ドクターズに掲載されました！">
  </a>

<?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
  <a href="/link.html" target="_blank">
    <img src="/common/images/banner_v3.gif" alt="統括院長がリクルートドクターズキャリアに特集されました！リクルートドクターズキャリア">
  </a>
  <a href="https://zaita9iryou.com/22780/" target="_blank">
    <img src="/common/images/banner_v6.gif" alt="統括院長がおうちde医療に特集されました！">
  </a>
  <a href="https://clinic.mynavi.jp/article/edogawaku_house-call-medicine/" target="_blank">
    <img src="/common/images/banner_v7.gif" alt="マイナビの「訪問診療クリニックおすすめ5選」に掲載されました！">
  </a>
  <a href="https://tokyo-doctors.com/clinicList/66791/interview/" target="_blank">
    <img src="/common/images/banner_v10.gif" alt="東京ドクターズに掲載されました！">
  </a>

<?php elseif (strpos($url, 'kuki') !== false) : ?>
  <a href="/link.html" target="_blank">
    <img src="/recruit/images/banner_v3.gif" alt="統括院長がリクルートドクターズキャリアに特集されました！リクルートドクターズキャリア" class="bnr_riji">
  </a>
  <a href="https://dot.asahi.com/articles/-/206434?page=2" target="_blank">
    <img src="/common/images/banner_v5.gif" alt="AREA誌の「在宅見取り件数が多い診療所」に掲載されました！">
  </a>
  <a href="https://zaita9iryou.com/22780/" target="_blank">
    <img src="/common/images/banner_v6.gif" alt="統括院長がおうちde医療に特集されました！">
  </a>
    <a href="https://saitama-doctors.com/clinicList/113453/interview/" target="_blank">
    <img src="/common/images/banner_v8.gif" alt="埼玉ドクターズに掲載されました！">
  </a>

<?php elseif (strpos($url, 'kuki/message/') !== false) : ?>
  <div class="banner_article">
    <a href="/link.html" target="_blank">
      <img src="/recruit/images/banner_v3.gif" alt="統括院長がリクルートドクターズキャリアに特集されました！リクルートドクターズキャリア" class="bnr_riji" id="recruit_docters">
      <a href="https://zaita9iryou.com/22780/" target="_blank">
        <img src="/common/images/banner_v6.gif" alt="統括院長がおうちde医療に特集されました！">
      </a>
    </a>
  </div>

<?php elseif (strpos($url, 'sakura') !== false) : ?>
  <a href="/link.html" target="_blank">
    <img src="/recruit/images/banner_v3.gif" alt="統括院長がリクルートドクターズキャリアに特集されました！リクルートドクターズキャリア" class="bnr_riji">
  </a>
  <a href="https://chiba-doctors.com/clinicList/109337/interview/" target="_blank">
    <img src="/common/images/banner_v9.gif" alt="千葉ドクターズに掲載されました！">
  </a>

<?php elseif (strpos($url, 'yachiyo') !== false) : ?>
  <a href="/link.html" target="_blank">
    <img src="/recruit/images/banner_v3.gif" alt="統括院長がリクルートドクターズキャリアに特集されました！リクルートドクターズキャリア" class="bnr_riji">
  </a>
  <a href="https://chiba-doctors.com/clinicList/107718/interview/" target="_blank">
    <img src="/common/images/banner_v9.gif" alt="千葉ドクターズに掲載されました！">
  </a>

<?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
  <a href="/link.html" target="_blank">
    <img src="/recruit/images/banner_v3.gif" alt="統括院長がリクルートドクターズキャリアに特集されました！リクルートドクターズキャリア" class="bnr_riji">
  </a>
  <a href="https://chiba-doctors.com/clinicList/113439/interview/" target="_blank">
    <img src="/common/images/banner_v9.gif" alt="千葉ドクターズに掲載されました！">
  </a>

<?php elseif (strpos($url, 'motoyawata') !== false) : ?>
  <a href="/link.html" target="_blank">
    <img src="/recruit/images/banner_v3.gif" alt="統括院長がリクルートドクターズキャリアに特集されました！リクルートドクターズキャリア" class="bnr_riji">
  </a>
  <a href="https://chiba-doctors.com/clinicList/113454/interview/" target="_blank">
    <img src="/common/images/banner_v9.gif" alt="千葉ドクターズに掲載されました！">
  </a>

<?php else : ?>
  <div class="banner_article banner_article_new">
    <a href="/link.html" target="_blank">
      <img src="/recruit/images/banner_v3.gif" alt="統括院長がリクルートドクターズキャリアに特集されました！リクルートドクターズキャリア" class="bnr_riji">
    </a>
    <a href="https://dot.asahi.com/articles/-/206434?page=2" target="_blank">
      <img src="/common/images/banner_v5.gif" alt="AREA誌の「在宅見取り件数が多い診療所」に掲載されました！" class="bnr_riji">
    </a>
    <a href="https://zaita9iryou.com/22780/" target="_blank">
      <img src="/common/images/banner_v6.gif" alt="統括院長がおうちde医療に特集されました！">
    </a>
    <a href="https://clinic.mynavi.jp/article/edogawaku_house-call-medicine/" target="_blank">
      <img src="/common/images/banner_v7.gif" alt="マイナビの「訪問診療クリニックおすすめ5選」に掲載されました！">
    </a>
  </div>
<?php endif; ?>
