<div id="visual">
  <p>
    <img class="pc" src="/common/images/area_key.jpg" srcset="/common/images/area_key_2x.jpg 2x" alt="訪問地域">
    <img class="sp" src="/common/images/area_sp_key.jpg" srcset="/common/images/area_sp_key_2x.jpg 2x" alt="訪問地域">
  </p>
</div>
<div id="contents">
  <div id="main">
    <section>
      <h2>訪問地域</h2>
      <?php $url = $_SERVER['REQUEST_URI'];
        if (strpos($url, 'kinshichou') !== false || strpos($url, 'kitasenju') !== false || strpos($url, 'shinkoiwa') !== false) :
      ?>
        <h3><span class="border">東京・城東エリアとその周辺地域</h3>
        <p class="txt_lead">城東エリアの訪問診療はお任せください！</p>
      <?php elseif (strpos($url, 'kitanarashino') !== false || strpos($url, 'sakura') !== false || strpos($url, 'yachiyo') !== false || strpos($url, 'motoyawata') !== false) : ?>
        <h3><span class="border">千葉県北西部・印旛地域とその周辺地域</h3>
        <p class="txt_00">千葉県北西部・印旛地域の訪問診療はお任せ下さい！</p>
      <?php else : ?>
        <h3><span class="border">埼玉県北東部・利根地域とその周辺地域</span></h3>
        <p class="txt_00">埼玉県北東部の訪問診療はお任せ下さい！</p>
      <?php endif; ?>
      <div>
        <?php
          $url = $_SERVER['REQUEST_URI'];
          if (strpos($url, 'kinshichou') !== false) :
        ?>
          <p>
            <img src="/kinshichou/area/images/map_tokyo_v2.svg" alt="医療法人社団 爽緑会 ふたば在宅クリニック 錦糸町院,墨田区 江東区 台東区 葛飾区 江戸川区 足立区 荒川区 在宅医療 訪問診療 訪問看護 往診" loading="lazy">
          </p>
          <ul class="desc">
            <li class="desc_kinshichou">
              <h4 class="txt_01">錦糸町</h4>
              <p class="txt_02">墨田区、江東区、台東区</p>
            </li>
            <li class="desc_kitasenju">
              <h4 class="txt_01">北千住</h4>
              <p class="txt_02">足立区、荒川区</p>
            </li>
            <li class="desc_shinkoiwa">
              <h4 class="txt_01">新小岩</h4>
              <p class="txt_02">葛飾区、江戸川区</p>
            </li>
          </ul>
          <p class="txt_last">※周辺地域の方も気軽にご相談下さい。</p>
        <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
          <p>
            <img src="/shinkoiwa/area/images/map_tokyo_v2.svg" alt="医療法人社団 爽緑会 ふたば在宅クリニック 新小岩院,葛飾区 江戸川区 在宅医療 訪問診療 訪問看護 往診" loading="lazy">
          </p>
          <ul class="desc">
            <li class="desc_shinkoiwa">
              <h4 class="txt_01">新小岩</h4>
              <p class="txt_02">葛飾区、江戸川区</p>
            </li>
            <li class="desc_kitasenju">
              <h4 class="txt_01">北千住</h4>
              <p class="txt_02">足立区、荒川区</p>
            </li>
            <li class="desc_kinshichou">
              <h4 class="txt_01">錦糸町</h4>
              <p class="txt_02">墨田区、江東区、台東区</p>
            </li>
          </ul>
          <p class="txt_last">※周辺地域の方も気軽にご相談下さい。</p>
        <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
          <p>
            <img src="/kitasenju/area/images/map_tokyo_v2.svg" alt=",医療法人社団 爽緑会 ふたば在宅クリニック 北千住院 足立区 荒川区 在宅医療 訪問診療 訪問看護 往診">
          </p>
          <ul class="desc">
            <li class="desc_kitasenju">
              <h4 class="txt_01">北千住</h4>
              <p class="txt_02">足立区、荒川区</p>
            </li>
            <li class="desc_shinkoiwa">
              <h4 class="txt_01">新小岩</h4>
              <p class="txt_02">葛飾区、江戸川区</p>
            </li>
            <li class="desc_kinshichou">
              <h4 class="txt_01">錦糸町</h4>
              <p class="txt_02">墨田区、江東区、台東区</p>
            </li>
          </ul>
          <p class="txt_last">※周辺地域の方も気軽にご相談下さい。</p>
        <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
          <p>
            <img src="/common/images/area/map_chiba_new.svg" loading="lazy" alt="医療法人社団 爽緑会 ふたば在宅クリニック 在宅医療 訪問診療 訪問看護 往診">
          </p>
          <ul class="desc desc_chiba">
            <li class="desc_kitanarashino">
              <h4 class="txt_01">北習志野</h4>
              <p class="txt_02">船橋市、習志野市</p>
            </li>
            <li class="desc_motoyawata">
              <h4 class="txt_01">本八幡</h4>
              <p class="txt_02">市川市</p>
            </li>
            <li class="desc_yachiyo">
              <h4 class="txt_01">八千代</h4>
              <p class="txt_02">八千代市、千葉市</p>
            </li>
            <li class="desc_sakura">
              <h4 class="txt_01">佐倉</h4>
              <p class="txt_02">佐倉市、印西市、四街道市、酒々井町</p>
            </li>
          </ul>
          <p class="txt_last">※周辺地域の方も気軽にご相談下さい。</p>
        <?php elseif (strpos($url, 'sakura') !== false) : ?>
          <p>
            <img src="/common/images/area/map_chiba_new.svg" loading="”lazy”" alt="ふたば在宅クリニック 佐倉院の訪問エリア 佐倉市、印西市、四街道市、八千代市、千葉市、酒々井町、習志野市、船橋市">
          </p>
          <ul class="desc desc_chiba">
            <li>
              <h4 class="txt_01">佐倉</h4>
              <p class="txt_02">佐倉市、印西市、四街道市、酒々井町</p>
            </li>
            <li class="desc_motoyawata">
              <h4 class="txt_01">本八幡</h4>
              <p class="txt_02">市川市</p>
            </li>
            <li class="desc_kitanarashino">
              <h4 class="txt_01">北習志野</h4>
              <p class="txt_02">船橋市、習志野市</p>
            </li>
            <li>
              <h4 class="txt_01">八千代</h4>
              <p class="txt_02">八千代市、千葉市</p>
            </li>
          </ul>
          <p class="txt_last">※周辺地域の方も気軽にご相談下さい。</p>
        <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
          <p>
            <img src="/common/images/area/map_chiba_new.svg" loading=”lazy” alt="ふたば在宅クリニック 八千代院の訪問エリア 八千代市、千葉市、習志野市、船橋市、印西市、佐倉市、四街道市、酒々井町">
          </p>
          <ul class="desc desc_chiba">
            <li>
              <h4 class="txt_01">八千代</h4>
              <p class="txt_02">八千代市、千葉市</p>
            </li>
            <li class="desc_motoyawata">
              <h4 class="txt_01">本八幡</h4>
              <p class="txt_02">市川市</p>
            </li>
            <li class="desc_kitanarashino">
              <h4 class="txt_01">北習志野</h4>
              <p class="txt_02">船橋市、習志野市</p>
            </li>
            <li>
              <h4 class="txt_01">佐倉</h4>
              <p class="txt_02">佐倉市、印西市、四街道市、酒々井町</p>
            </li>
          </ul>
          <p class="txt_last">※周辺地域の方も気軽にご相談下さい。</p>
        <?php elseif (strpos($url, 'motoyawata') !== false) : ?>
          <p>
            <img src="/common/images/area/map_chiba_new.svg" loading="lazy" alt="医療法人社団 爽緑会 ふたば在宅クリニック 在宅医療 訪問診療 訪問看護 往診">
          </p>
          <ul class="desc desc_chiba">
            <li class="desc_motoyawata">
              <h4 class="txt_01">本八幡</h4>
              <p class="txt_02">市川市</p>
            </li>
            <li class="desc_kitanarashino">
              <h4 class="txt_01">北習志野</h4>
              <p class="txt_02">船橋市、習志野市</p>
            </li>
            <li class="desc_yachiyo">
              <h4 class="txt_01">八千代</h4>
              <p class="txt_02">八千代市、千葉市</p>
            </li>
            <li class="desc_sakura">
              <h4 class="txt_01">佐倉</h4>
              <p class="txt_02">佐倉市、印西市、四街道市、酒々井町</p>
            </li>
          </ul>
          <p class="txt_last">※周辺地域の方も気軽にご相談下さい。</p>
        <?php else : ?>
          <p>
            <img src="/kuki/area/images/map_v3.svg" alt="久喜市、加須市、幸手市、白岡市、蓮田市、宮代町、杉戸町、春日部市、玉露町、古河市、上尾市、桶川市、北本市、羽生市、伊奈町、鴻巣市" loading="lazy">
          </p>
          <p class="txt_01">円内（当院から16km圏内）が訪問可能エリアです。</p>
          <p class="txt_02">久喜市、加須市、幸手市、杉戸町、宮代町、白岡市、蓮田市、春日部市、五霞町など。</p>
          <p>※ 訪問エリアに関しては、気軽にご相談ください。</p>
        <?php endif; ?>
      </div>
    </section>
  </div>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/sidebar.php'); ?>
</div>
