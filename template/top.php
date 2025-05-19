<article id="wrap">
  <div id="contents_wrap">
    <div id="visual">
      <ul id="slideshow" class="pc">
        <li>
          <img id="image03" src="/top/images/key_03.png" srcset="/top/images/key_03_2x.png 2x" alt="ふたば在宅クリニック 在宅療養支援診療所,在宅医療,訪問診療,訪問看護,往診,住み慣れたご自宅での療養をサポートいたします。" />
        </li>
        <li>
          <img id="image02" src="/top/images/key_02.png" srcset="/top/images/key_02_2x.png 2x" alt="ふたば在宅クリニック 在宅療養支援診療所,在宅医療,訪問診療,訪問看護,往診,当院は在宅医療に特化したクリニックです。" />
        </li>
        <li>
          <img id="image01" src="/top/images/key_01.png" srcset="/top/images/key_01_2x.png 2x" alt="ふたば在宅クリニック 在宅医療 がん・緩和ケア 認知症・高齢者医療 内科・外科（心・肺・脳神経・糖尿病など） 24時間365日対応" />
        </li>
      </ul>
      <ul id="sp_slideshow" class="sp">
        <li>
          <img id="sp_image03" src="/top/images/sp_key_03.png" srcset="/top/images/sp_key_03_2x.png 2x" alt="ふたば在宅クリニック 在宅療養支援診療所,在宅医療,訪問診療,訪問看護,往診,住み慣れたご自宅での療養をサポートいたします。" />
        </li>
        <li>
          <img id="sp_image02" src="/top/images/sp_key_02.png" srcset="/top/images/sp_key_02_2x.png 2x" alt="ふたば在宅クリニック 在宅療養支援診療所,在宅医療,訪問診療,訪問看護,往診,当院は在宅医療に特化したクリニックです。" />
        </li>
        <li>
          <img id="sp_image01" src="/top/images/sp_key_01.png" srcset="/top/images/sp_key_01_2x.png 2x" alt="ふたば在宅クリニック 在宅医療 がん・緩和ケア 認知症・高齢者医療 内科・外科（心・肺・脳神経・糖尿病など） 24時間365日対応" />
        </li>
      </ul>
    </div>
    <div id="contents">
      <div id="main">
        <section id="open_box">
          <div class="title_box">
            <div id="open_box_title">
              <p class="txt_01">「動く総合病院」<br class="sp">を目指しています！！</p>
            </div>
          </div>
          <div class="txt_box_00">
            <?php $url = $_SERVER['REQUEST_URI'];
              if (strpos($url, 'kinshichou') !== false || strpos($url, 'kitasenju') !== false || strpos($url, 'shinkoiwa') !== false) :
            ?>
              <p class="txt_04">呼吸器科・循環器科・総合内科専門医が在籍</p>
              <p class="txt_05">泌尿器科・脳神経科・整形外科まで複数科の専門医が在籍</p>
              <p class="txt_05">精神科専門医による認知症、精神科往診</p>
              <p class="txt_05">皮膚科・形成外科専門医による皮膚、褥瘡往診</p>
              <p class="txt_05">全国9拠点展開中・安心のグループ組織力</p>
            <?php elseif (strpos($url, 'kitanarashino') !== false || strpos($url, 'yachiyo') !== false || strpos($url, 'sakura') !== false) : ?>
              <p class="txt_04">呼吸器科・循環器科・総合内科専門医が在籍</p>
              <p class="txt_05">複数科の専門医が在籍</p>
              <p class="txt_05">精神科専門医による認知症、精神科往診</p>
              <p class="txt_05">皮膚科専門医による皮膚、褥瘡往診</p>
              <p class="txt_05">全国9拠点展開中・安心のグループ組織力</p>
            <?php elseif (strpos($url, 'motoyawata') !== false) : ?>
              <p class="txt_04">呼吸器科・循環器科・総合内科専門医が在籍</p>
              <p class="txt_05">泌尿器科・脳神経科・整形外科まで複数科の専門医が在籍</p>
              <p class="txt_05">精神科専門医による認知症、精神科往診</p>
              <p class="txt_05">皮膚科・形成外科専門医による皮膚、褥瘡往診</p>
              <p class="txt_05">全国9拠点展開中・安心のグループ組織力</p>
            <?php else : ?>
							<p class="txt_04">呼吸器科・循環器科・総合内科専門医が在籍</p>
							<p class="txt_05">泌尿器科・脳神経科・整形外科まで複数科の専門医が在籍</p>
							<p class="txt_05">精神科専門医による認知症、精神科往診</p>
							<p class="txt_05">皮膚科専門医による皮膚、褥瘡往診</p>
							<p class="txt_05">全国9拠点展開中・安心の爽緑会グループ本院</p>
            <?php endif; ?>
          </div>
          <div class="txt_box">
            <?php
              $url = $_SERVER['REQUEST_URI'];
              if (strpos($url, 'kitanarashino') !== false) :
            ?>
              <p class="txt_02">新京成線〈北習志野駅前〉徒歩1分</p>
            <?php elseif (strpos($url, 'sakura') !== false) : ?>
              <p class="txt_02">京成本線〈京成臼井駅〉南口徒歩30秒</p>
            <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
              <p class="txt_02">京成本線〈勝田台駅〉北口徒歩30秒</p>
            <?php elseif (strpos($url, 'motoyawata') !== false) : ?>
              <p class="txt_02">京成本線〈本八幡駅〉徒歩2分</p>
            <?php endif; ?>
            <p class="txt_03 pc"><img src="/common/images/logo_v2_top.svg" alt="ふたば在宅クリニック"  loading="lazy"></p>
            <p class="txt_03 sp"><img src="/common/images/logo_v2_top_sp.svg" alt="ふたば在宅クリニック" loading="lazy"></p>
          </div>
          <div class="top_map">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/top_map.php'); ?>
          </div>
          <div class="buin">
            <p class="txt_06">
              <span>グループ分院案内</span>
            </p>
          </div>
          <div class="news_list">
            <ul class="tab tab_area">
              <?php $url = $_SERVER['REQUEST_URI'];
                if (strpos($url, 'kinshichou') !== false || strpos($url, 'kitasenju') !== false || strpos($url, 'shinkoiwa') !== false) :
              ?>
                <li class="active">東京</li>
                <li>千葉</li>
                <li>埼玉</li>
              <?php elseif (strpos($url, 'kitanarashino') !== false || strpos($url, 'yachiyo') !== false || strpos($url, 'sakura') !== false || strpos($url, 'motoyawata') !== false) : ?>
                <li>東京</li>
								<li class="active">千葉</li>
								<li>埼玉</li>
              <?php else : ?>
								<li>東京</li>
								<li>千葉</li>
								<li class="active">埼玉</li>
              <?php endif; ?>
            </ul>
            <div class="news_show">
              <div class="txt_box_kakuin tab_tokyo show">
                <div class="panel_area content_area">
                  <div class="panel_inner">
                    <div class="txt_box_05">
                      <div class="roppongi_toho">
                        <p class="txt_18">六本木本部｜<span>東京ミッドタウン前</span></p>
                      </div>
                      <div class="photo_roppongi">
                        <img src="/top/images/roppongi_picture.jpg" srcset="/top/images/roppongi_picture_2x.jpg" alt="医療法人社団 爽緑会・千葉爽緑会 ふたば在宅クリニック 六本木本部" />
                      </div>
                      <div class="roppongi_adress">
                        <p class="txt_19">
                          〒106-0032<br>
                          東京都港区六本木7-8-7<br>
                          ハイホーム六本木ビル3階
                        </p>
                      </div>
                      <p class="txt_20">取材、営業、求人は本部へ</p>
                      <p class="txt_21">
                        <a class="shiny-btn-roppongi" href="tel:0358430151">
                          <span>03-5843-0151</span>
                        </a>
                      </p>
                      <p class="btn_roppongi_box">
                        <a class="shiny-btn-roppongi" href="mailto:recruit@futabaclinic.jp">
                          <span class="btn_roppongi_box_txt">お問い合わせ</span>
                        </a>
                      </p>
                      <p class="txt_22">※患者様についてのお問い合わせは<br>各クリニックにご連絡ください</p>
                    </div>
                    <div class="kitasenju_box kinshichou_box">
                      <div class="kitasenju_toho kinshichou_toho">
                        <p class="txt_12 txt_kinshichou">錦糸町院｜<span>錦糸町駅 徒歩2分</span></p>
                      </div>
                      <div class="photo_kitasenju">
                        <img src="/top/images/kinshichou_picture_02.jpg" srcset="/top/images/kinshichou_picture_02_2x.jpg" alt="ふたば在宅クリニック 錦糸町院" loading="lazy">
                      </div>
                      <ul>
                        <li>墨田区</li>
                        <li>江東区</li>
                        <li>台東区</li>
                      </ul>
                      <p class="txt_13">の患者様はこちら</p>
                      <p class="txt_14">
                        <a class="shiny-btn-kinshichou" href="/kinshichou/">
                          <span>錦糸町院</span>
                        </a>
                      </p>
                    </div>
                    <div class="txt_box_03">
                      <div class="shinkoiwa_toho">
                        <p class="txt_12">新小岩院｜<span>新小岩駅 徒歩1分</span></p>
                      </div>
                      <div class="photo_shinkoiwa">
                        <img src="/top/images/shinkoiwa_picture_02_v2.jpg" srcset="/top/images/shinkoiwa_picture_02_v2_2x.jpg" alt="ふたば在宅クリニック 新小岩院" loading="lazy">
                      </div>
                      <ul>
                        <li>葛飾区</li>
                        <li>江戸川区</li>
                      </ul>
                      <p class="txt_13">の患者様はこちら</p>
                      <p class="txt_14">
                        <a class="shiny-btn-edogawa" href="/shinkoiwa/">
                          <span>新小岩院</span>
                        </a>
                      </p>
                    </div>
                    <div class="kitasenju_box">
                      <div class="kitasenju_toho">
                        <p class="txt_12">北千住院｜<span>北千住駅 徒歩3分</span></p>
                      </div>
                      <div class="photo_kitasenju">
                        <img src="/top/images/kitasenju_picture_02_v2.jpg" srcset="/top/images/kitasenju_picture_02_v2_2x.jpg" alt="ふたば在宅クリニック 北千住院" loading="lazy">
                      </div>
                      <ul>
                        <li>足立区</li>
                        <li>荒川区</li>
                      </ul>
                      <p class="txt_13">の患者様はこちら</p>
                      <p class="txt_14">
                        <a class="shiny-btn-kitasenju" href="/kitasenju/">
                          <span>北千住院</span>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="txt_box_kakuin tab_chiba show active">
                <div class="panel_area content_area">
                  <div class="panel_inner">
                    <div class="txt_box_sakura">
                      <div class="sakura_toho">
                          <p class="txt_12">佐倉院｜<span>京成臼井駅 徒歩30秒</span></p>
                      </div>
                      <div class="photo_sakura">
                        <img src="/top/images/sakura_picture.jpg" srcset="/top/images/sakura_picture_2x.jpg" alt="ふたば在宅クリニック 佐倉院" loading="lazy">
                      </div>
                      <ul>
                        <li>佐倉市</li>
                        <li>印西市</li>
                        <li>四街道市</li>
                        <li>酒々井町</li>
                      </ul>
                      <p class="txt_13">の患者様はこちら</p>
                      <p class="txt_14">
                        <a class="shiny-btn-sakura" href="/sakura/">
                          <span>佐倉院</span>
                        </a>
                      </p>
                    </div>
                    <div class="txt_box_yachiyo">
                      <div class="yachiyo_toho">
                        <p class="txt_12">八千代院｜<span>勝田台駅 徒歩30秒</span></p>
                      </div>
                      <div class="photo_yachiyo">
                        <img src="/top/images/yachiyo_picture.jpg" srcset="/top/images/yachiyo_picture_2x.jpg" alt="ふたば在宅クリニック 八千代院" loading="lazy">
                      </div>
                      <ul>
                        <li>八千代市</li>
                        <li>千葉市</li>
                      </ul>
                      <p class="txt_13">の患者様はこちら</p>
                      <p class="txt_14">
                        <a class="shiny-btn-yachiyo" href="/yachiyo/">
                          <span>八千代院</span>
                        </a>
                      </p>
                    </div>
                    <div class="txt_box_kitanarashino">
                      <div class="toho">
                        <p class="txt_12">北習志野院｜<span>北習志野駅前 徒歩1分</span></p>
                      </div>
                      <div class="photo_yachiyo">
                        <img src="/common/images/top_kitanarashino_picture.jpg" srcset="/common/images/top_kitanarashino_picture_2x.jpg" alt="ふたば在宅クリニック 北習志野院" loading="lazy">
                      </div>
                      <ul>
                        <li>船橋市</li>
                        <li>習志野市</li>
                      </ul>
                      <p class="txt_13">の患者様はこちら</p>
                      <p class="txt_14">
                        <a class="shiny-btn-kitanarashino" href="/kitanarashino/">
                          <span>北習志野院</span>
                        </a>
                      </p>
                    </div>
                    <div class="txt_box_motoyawata">
                      <div class="toho">
                        <p class="txt_12">本八幡院｜<span>本八幡駅前 徒歩2分</span></p>
                      </div>
                      <div class="photo_box">
                        <img src="/common/images/top_motoyawata_picture.jpg" srcset="/common/images/top_motoyawata_picture_2x.jpg" alt="ふたば在宅クリニック 本八幡院" loading="lazy">
                      </div>
                      <ul>
                        <li>市川市</li>
                        <li>浦安市</li>
                      </ul>
                      <p class="txt_13">の患者様はこちら</p>
                      <p class="txt_14">
                        <a class="shiny-btn-motoyawata" href="/motoyawata/">
                          <span>本八幡院</span>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="txt_box_kakuin show">
                <div class="panel_area content_area">
                  <div class="panel_inner">
                    <div class="txt_box_kuki">
                      <div class="kuki_toho">
                          <p class="txt_12">埼玉院｜<span>久喜駅 徒歩30秒</span></p>
                      </div>
                      <div class="photo_kukiin">
                        <img src="/top/images/kukiin_picture_v2.jpg" srcset="/top/images/kukiin_picture_2x_v2.jpg" alt="ふたば在宅クリニック 埼玉院" loading="lazy">
                      </div>
                      <ul>
                        <li>久喜市</li>
                        <li>加須市</li>
                        <li>幸手市</li>
                        <li>杉戸町</li>
                        <li>宮代町</li>
                        <li>白岡市</li>
                        <li>蓮田市</li>
                        <li>春日部市</li>
                        <li>五霞町</li>
                      </ul>
                      <p class="txt_13">の患者様はこちら</p>
                      <p class="txt_14">
                        <a class="shiny-btn-kuki" href="/kuki/">
                          <span>埼玉院</span>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="teacher_box">
            <img src="/top/images/teacher_04.jpg" srcset="/top/images/teacher_04_2x.jpg 2x" alt="ふたば在宅クリニック 代表・統括院長 石井 成伸" loading="lazy">
          </div>
        </section>

        <section id="sec_01">
          <div>
            <p>認知症や体の不自由さで、外来通院や<br class="sp">ご家族の付き添いが大変な方･･････</p>
            <p>ご自宅での終末期医療、緩和ケアを望む方･･････</p>
            <p>ご自宅で安心して診療が受けられます。</p>
            <p>
              <?php $url = $_SERVER['REQUEST_URI'];
                if (strpos($url, 'motoyawata') !== false) :
              ?>
                <a href="/motoyawata/about/">「在宅医療とは？」</a>
              <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
                <a href="/kitanarashino/about/">「在宅医療とは？」</a>
              <?php elseif (strpos($url, 'sakura') !== false) : ?>
                <a href="/sakura/about/">「在宅医療とは？」</a>
              <?php else : ?>
                <a href="/yachiyo/about/">「在宅医療とは？」</a>
              <?php endif; ?>
            </p>
          </div>
        </section>

        <div class="banner_article">
          <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/banner.php'); ?>
        </div>

        <?php
          $url = $_SERVER['REQUEST_URI'];
          if (strpos($url, 'kinshichou') !== false) :
        ?>
          <?php
            $posts = get_posts("numberposts=5&orderby=post_date&offset=0&post_type=kinshichou");
            if (!empty($posts)) {
          ?>
          <section id="sec_07">
            <h2>お知らせ</h2>
            <p><a href="/news/kinshichou/">一覧はこちら</a></p>

            <table>
              <?php
                foreach ($posts as $post):
                  setup_postdata($post);
              ?>
              <tr>
                <th><?php the_time('Y/m/d'); ?></th>
                <td id="post-<?php the_ID(); ?>">
                  <a href="<?php the_permalink(); ?>">
                  <?php
                    $days=7;
                    $today=date('U'); $entry=get_the_time('U');
                    $diff1=date('U',($today - $entry))/86400;
                    if ($days > $diff1) {
                    echo '<span class="new">NEW</span><br class="sp">';
                    }
                    ?>
                    <?php the_title(); ?>
                  </a>
                </td>
              </tr>
              <?php endforeach; ?>
            </table>
          </section>
          <?php } ?>

          <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
            <?php
              $posts = get_posts("numberposts=5&orderby=post_date&offset=0&post_type=shinkoiwa");
              if (!empty($posts)) {
            ?>
            <section id="sec_07">
              <h2>お知らせ</h2>
              <p><a href="/news/shinkoiwa/">一覧はこちら</a></p>
              <table>
                <?php
                  foreach ($posts as $post):
                    setup_postdata($post);
                ?>
                <tr>
                  <th><?php the_time('Y/m/d'); ?></th>
                  <td id="post-<?php the_ID(); ?>">
                    <a href="<?php the_permalink(); ?>">
                      <?php
                        $days=7;
                        $today=date('U'); $entry=get_the_time('U');
                        $diff1=date('U',($today - $entry))/86400;
                        if ($days > $diff1) {
                          echo '<span class="new">NEW</span><br class="sp">';
                        }
                      ?>
                      <?php the_title(); ?>
                    </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </table>
            </section>
            <?php } ?>

          <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
            <?php
              $posts = get_posts("numberposts=5&orderby=post_date&offset=0&post_type=kitasenju");
              if (!empty($posts)) {
            ?>
            <section id="sec_07">
              <h2>お知らせ</h2>
              <p><a href="/news/kitasenju/">一覧はこちら</a></p>

              <table>
                <?php
                  foreach ($posts as $post):
                    setup_postdata($post);
                ?>
                <tr>
                  <th><?php the_time('Y/m/d'); ?></th>
                  <td id="post-<?php the_ID(); ?>">
                    <a href="<?php the_permalink(); ?>">
                    <?php
                      $days=7;
                      $today=date('U'); $entry=get_the_time('U');
                      $diff1=date('U',($today - $entry))/86400;
                      if ($days > $diff1) {
                      echo '<span class="new">NEW</span><br class="sp">';
                      }
                      ?>
                      <?php the_title(); ?>
                    </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </table>
            </section>
            <?php } ?>

          <?php elseif (strpos($url, 'sakura') !== false) : ?>
            <?php
              $posts = get_posts("numberposts=5&orderby=post_date&offset=0&post_type=sakura");
              if (!empty($posts)) {
            ?>
            <section id="sec_07">
              <h2>お知らせ</h2>
              <p><a href="/news/sakura/">一覧はこちら</a></p>

              <table>
                <?php
                  foreach ($posts as $post):
                    setup_postdata($post);
                ?>
                <tr>
                  <th><?php the_time('Y/m/d'); ?></th>
                  <td id="post-<?php the_ID(); ?>">
                    <a href="<?php the_permalink(); ?>">
                    <?php
                      $days=7;
                      $today=date('U'); $entry=get_the_time('U');
                      $diff1=date('U',($today - $entry))/86400;
                      if ($days > $diff1) {
                      echo '<span class="new">NEW</span><br class="sp">';
                      }
                      ?>
                      <?php the_title(); ?>
                    </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </table>
            </section>
            <?php } ?>

          <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
            <?php
              $posts = get_posts("numberposts=5&orderby=post_date&offset=0&post_type=yachiyo");
              if (!empty($posts)) {
            ?>
            <section id="sec_07">
              <h2>お知らせ</h2>
              <p><a href="/news/yachiyo/">一覧はこちら</a></p>

              <table>
                <?php
                  foreach ($posts as $post):
                    setup_postdata($post);
                ?>
                <tr>
                  <th><?php the_time('Y/m/d'); ?></th>
                  <td id="post-<?php the_ID(); ?>">
                    <a href="<?php the_permalink(); ?>">
                    <?php
                      $days=7;
                      $today=date('U'); $entry=get_the_time('U');
                      $diff1=date('U',($today - $entry))/86400;
                      if ($days > $diff1) {
                      echo '<span class="new">NEW</span><br class="sp">';
                      }
                      ?>
                      <?php the_title(); ?>
                    </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </table>
            </section>
            <?php } ?>

          <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
            <?php
              $posts = get_posts("numberposts=5&orderby=post_date&offset=0&post_type=kitanarashino");
            ?>
            <section id="sec_07">
              <h2>お知らせ</h2>
              <p><a href="/news/kitanarashino/">一覧はこちら</a></p>
              <table>
                <?php if (!empty($posts)) : ?>
                  <?php foreach ($posts as $post) : setup_postdata($post); ?>
                    <tr>
                      <th><?php the_time('Y/m/d'); ?></th>
                      <td id="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink(); ?>">
                          <?php
                          $days = 7;
                          $today = date('U');
                          $entry = get_the_time('U');
                          $diff1 = date('U', ($today - $entry)) / 86400;
                          if ($days > $diff1) {
                            echo '<span class="new">NEW</span><br class="sp">';
                          }
                          ?>
                          <?php the_title(); ?>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <?php wp_reset_postdata(); ?>
                <?php else : ?>
                  <tr>
                    <td colspan="2">まだ投稿はありません。</td>
                  </tr>
                <?php endif; ?>
              </table>
            </section>

            <?php elseif (strpos($url, 'motoyawata') !== false) : ?>
            <?php
              $posts = get_posts("numberposts=5&orderby=post_date&offset=0&post_type=motoyawata");
            ?>
            <section id="sec_07">
              <h2>お知らせ</h2>
              <p><a href="/news/motoyawata/">一覧はこちら</a></p>
              <table>
                <?php if (!empty($posts)) : ?>
                  <?php foreach ($posts as $post) : setup_postdata($post); ?>
                    <tr>
                      <th><?php the_time('Y/m/d'); ?></th>
                      <td id="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink(); ?>">
                          <?php
                          $days = 7;
                          $today = date('U');
                          $entry = get_the_time('U');
                          $diff1 = date('U', ($today - $entry)) / 86400;
                          if ($days > $diff1) {
                            echo '<span class="new">NEW</span><br class="sp">';
                          }
                          ?>
                          <?php the_title(); ?>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <?php wp_reset_postdata(); ?>
                <?php else : ?>
                  <tr>
                    <td colspan="2">まだ投稿はありません。</td>
                  </tr>
                <?php endif; ?>
              </table>
            </section>

            <?php else : ?>
            <section id="sec_07">
              <h2>お知らせ</h2>
              <p><a href="/news/">一覧はこちら</a></p>
              <table>
                <?php
                $posts = get_posts("numberposts=5&orderby=post_date&offset=0");
                foreach ($posts as $post):
                setup_postdata($post);
                ?>
                <tr>
                  <th><?php the_time('Y/m/d'); ?></th>
                  <td id="post-<?php the_ID(); ?>">
                    <a href="<?php the_permalink(); ?>">
                    <?php
                      $days=7;
                      $today=date('U'); $entry=get_the_time('U');
                      $diff1=date('U',($today - $entry))/86400;
                      if ($days > $diff1) {
                      echo '<span class="new">NEW</span><br class="sp">';
                      }
                      ?>
                      <?php the_title(); ?>
                    </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </table>
            </section>
        <?php endif; ?>
        <section id="sec_02">
          <h2>当院の特色</h2>
          <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/futaba_style.php'); ?>
        </section>
        <section id="sec_03">
          <h2>在宅診療とは?</h2>
          <p>
            訪問診療とは、通院が困難な患者さんに対して、
            医師がご自宅を定期的に（月2回〜）訪問して診療を行うことです。
          </p>
          <div>
            <p>病気の治療・予防を中心に行い、緊急時には24時間365日対応いたします。</p>
            <p>病状に応じて、連携病院への入院やご自宅での治療など適切に対応いたします。</p>
            <p>病状が安定した方も治療が必要な方も気軽にご相談ください。</p>
          </div>
          <div id="about_box">
            <div>
              <ul>
                <li>外来に行かなくていい！</li>
                <li>家に医師がうかがいます！</li>
                <li>緊急時も24時間対応！</li>
              </ul>
            </div>
            <div>
              <img src="/common/images/teacher_04.jpg" alt="訪問診療とは">
            </div>
          </div>
        </section>
        <section id="sec_04">
          <h2>診療科目</h2>
          <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/shinryou_subject.php'); ?>
        </section>
        <section id="sec_05">
          <h2>診療日</h2>
          <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/shinryou_day.php'); ?>
        </section>
        <section id="shinryou_box">
          <h2>診療内容</h2>
          <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/shinryou_box.php'); ?>
        </section>
        <?php
          $url = $_SERVER['REQUEST_URI'];
          if (strpos($url, 'kinshichou') !== false) :
        ?>
        <section id="sec_06">
          <h2>連携医療機関</h2>
          <p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
          <ul>
            <li class="sec_06_list">・東京医科大学病院</li>
            <li class="sec_06_list">・東京慈恵会医科大学付属病院葛飾医療センター</li>
            <li class="sec_06_list">・がん研有明病院</li>
            <li class="sec_06_list">・日本赤十字社医療センター</li>
            <li class="sec_06_list">・NTT東日本関東病院</li>
            <li class="sec_06_list">・東京都済生会向島病院</li>
            <li class="sec_06_list">・国立国際医療研究センター国府台病院</li>
            <li class="sec_06_list">・東京臨海病院</li>
            <li class="sec_06_list">・森山記念病院</li>
            <li class="sec_06_list">・順天堂大学医学部付属東京江東高齢者医療センター</li>
            <li class="sec_06_list">・千葉西総合病院</li>
            <li class="sec_06_list">・東京女子医科大学付属足立医療センター</li>
            <li class="sec_06_list">・東和病院</li>
            <li class="sec_06_list">・東京北部病院</li>
            <li class="sec_06_list">・帝京大学医学部付属病院</li>
            <li class="sec_06_list">・虎の門病院</li>
            <li class="sec_06_list">・三井記念病院</li>
            <li class="sec_06_list">・永寿総合病院</li>
            <li class="sec_06_list">・聖路加国際病院</li>
            <li class="sec_06_list">・東京大学医学部付属病院</li>
            <li class="sec_06_list">・国立がん研究センター中央病院</li>
            <li class="sec_06_list">・日本大学病院</li>
            <li class="sec_06_list">・順天堂大学医学部付属順天堂医院</li>
            <li class="sec_06_list">・順天堂大学医学部付属浦安病院</li>
            <li class="sec_06_list">・かつしか江戸川病院</li>
            <li class="sec_06_list">・京葉病院</li>
            <li class="sec_06_list">・江戸川メディケア病院</li>
            <li class="sec_06_list">・黒木整形外科内科クリニック</li>
            <li class="sec_06_list">・社会福祉法人 仁生社 江戸川病院</li>
            <li class="sec_06_list">・訪問診療わっしょいクリニック</li>
          </ul>
        </section>

        <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
          <section id="sec_06">
          <h2>連携医療機関</h2>
          <p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
          <ul>
            <li class="sec_06_list">・東京医科大学病院</li>
            <li class="sec_06_list">・東京慈恵会医科大学付属病院葛飾医療センター</li>
            <li class="sec_06_list">・がん研有明病院</li>
            <li class="sec_06_list">・日本赤十字社医療センター</li>
            <li class="sec_06_list">・NTT東日本関東病院</li>
            <li class="sec_06_list">・東京都済生会向島病院</li>
            <li class="sec_06_list">・国立国際医療研究センター国府台病院</li>
            <li class="sec_06_list">・東京臨海病院</li>
            <li class="sec_06_list">・森山記念病院</li>
            <li class="sec_06_list">・順天堂大学医学部付属東京江東高齢者医療センター</li>
            <li class="sec_06_list">・千葉西総合病院</li>
            <li class="sec_06_list">・東京女子医科大学付属足立医療センター</li>
            <li class="sec_06_list">・東和病院</li>
            <li class="sec_06_list">・東京北部病院</li>
            <li class="sec_06_list">・帝京大学医学部付属病院</li>
            <li class="sec_06_list">・虎の門病院</li>
            <li class="sec_06_list">・三井記念病院</li>
            <li class="sec_06_list">・永寿総合病院</li>
            <li class="sec_06_list">・聖路加国際病院</li>
            <li class="sec_06_list">・東京大学医学部付属病院</li>
            <li class="sec_06_list">・国立がん研究センター中央病院</li>
            <li class="sec_06_list">・日本大学病院</li>
            <li class="sec_06_list">・順天堂大学医学部付属順天堂医院</li>
            <li class="sec_06_list">・順天堂大学医学部付属浦安病院</li>
            <li class="sec_06_list">・かつしか江戸川病院</li>
            <li class="sec_06_list">・京葉病院</li>
            <li class="sec_06_list">・江戸川メディケア病院</li>
            <li class="sec_06_list">・黒木整形外科内科クリニック</li>
            <li class="sec_06_list">・社会福祉法人 仁生社 江戸川病院</li>
            <li class="sec_06_list">・訪問診療わっしょいクリニック</li>
          </ul>
        </section>
        <section id="renkei_jigyou">
          <h2>連携事業所</h2>
          <p>訪問看護ステーション</p>
          <ul>
            <li>・KAZOKUナースステーション</li>
            <li><span>・LE在宅・施設訪問看護リハビリステーション 青砥支店</span></li>
            <li>・LE訪問看護ステーション 船堀支店</li>
            <li>・LE訪問看護リハビリステーション新小岩</li>
            <li>・ORCA訪問看護ステーション</li>
            <li>・いきいきSUN訪問看護リハビリステーション</li>
            <li>・ウィル訪問看護ステーション江戸川＋江東サテライト</li>
            <li>・えそら看護ステーション</li>
            <li>・アリカ訪問看護ステーション瑞江</li>
            <li>・かのん訪問看護ステーションえどがわ</li>
            <li>・きづきリハビリ訪問ステーション</li>
            <li>・コープSTサテライトかなまち</li>
            <li>・セントケア訪看ステーション 墨田</li>
            <li>・新小岩訪問看護ステーションほほえみ</li>
            <li>・デイズ訪問看護リハビリステーション新小岩</li>
            <li>・トーリツ訪問看護ステーション江戸川</li>
            <li>・トーリツ訪問看護ステーション新小岩</li>
            <li>・ぱれっと訪問看護 船堀</li>
            <li>・ぱれっと訪問看護リハビリステーション綾瀬</li>
            <li>・むつみ訪問看護ステーション</li>
            <li>・㈱Hale ハレノヒ訪問看護ステーション</li>
            <li>・江戸川病院訪問看護ステーション マックスライフ</li>
            <li>・東京ケアメディカル</li>
            <li>・訪問看護ステーション オアシス</li>
            <li>・訪問看護ステーションこころ</li>
            <li>・訪問看護ステーションデライト葛飾</li>
            <li>・訪問看護ステーション心音</li>
            <li>・訪問看護ステーション都葦</li>
            <li>・訪問看護リハビリステーションここゆい</li>
            <li>・うさぎ訪問看護ステーション</li>
            <li>・在宅療養支援ステーション楓の友かつしか</li>
          </ul>
          <p>居宅支援事務所</p>
          <ul>
            <li>・チームケアキイ</li>
            <li>・合同会社なないろ</li>
            <li>・日本リック居宅介護支援小松川事業所</li>
            <li>・癒しの森堀切</li>
            <li>・ピースアイランド</li>
            <li>・在宅総合支援センター せせらぎ</li>
          </ul>
          <p>薬局</p>
          <ul>
            <li>・アイセイ薬局 西新小岩店</li>
            <li>・クリーン薬局新小岩</li>
            <li>・さくら薬局 立石店</li>
            <li>・しんわ薬局上野店</li>
            <li>・そうごう薬局在宅調剤センター青砥店</li>
            <li>・上平井クリーン薬局</li>
            <li>・水戸薬局 在宅医療支援センター</li>
            <li>・日本調剤 立石駅前薬局</li>
            <li>・薬局ニコニコ</li>
            <li>・あおぞら薬局 東新小岩店</li>
            <li>・わかば薬局</li>
          </ul>
        </section>

        <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
        <section id="sec_06">
          <h2>連携医療機関</h2>
          <p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
          <ul>
            <li class="sec_06_list">・東京医科大学病院</li>
            <li class="sec_06_list">・東京慈恵会医科大学付属病院葛飾医療センター</li>
            <li class="sec_06_list">・がん研有明病院</li>
            <li class="sec_06_list">・日本赤十字社医療センター</li>
            <li class="sec_06_list">・NTT東日本関東病院</li>
            <li class="sec_06_list">・東京都済生会向島病院</li>
            <li class="sec_06_list">・国立国際医療研究センター国府台病院</li>
            <li class="sec_06_list">・東京臨海病院</li>
            <li class="sec_06_list">・森山記念病院</li>
            <li class="sec_06_list">・順天堂大学医学部付属東京江東高齢者医療センター</li>
            <li class="sec_06_list">・千葉西総合病院</li>
            <li class="sec_06_list">・東京女子医科大学付属足立医療センター</li>
            <li class="sec_06_list">・東和病院</li>
            <li class="sec_06_list">・東京北部病院</li>
            <li class="sec_06_list">・帝京大学医学部付属病院</li>
            <li class="sec_06_list">・虎の門病院</li>
            <li class="sec_06_list">・三井記念病院</li>
            <li class="sec_06_list">・永寿総合病院</li>
            <li class="sec_06_list">・聖路加国際病院</li>
            <li class="sec_06_list">・東京大学医学部付属病院</li>
            <li class="sec_06_list">・国立がん研究センター中央病院</li>
            <li class="sec_06_list">・日本大学病院</li>
            <li class="sec_06_list">・順天堂大学医学部付属順天堂医院</li>
            <li class="sec_06_list">・順天堂大学医学部付属浦安病院</li>
          </ul>
        </section>

        <section id="renkei_jigyou">
          <h2>連携事業所</h2>
          <p>訪問看護ステーション</p>
          <ul>
            <li>・ぱれっと訪問看護リハビリステーション綾瀬</li>
            <li>・まつり訪問看護ステーション</li>
            <li>・ハレノヒ訪問看護リハビリステーション</li>
            <li>・おうちのカンゴ東京</li>
            <li><span>・LE在宅・施設 訪問看護リハビリステーション北千住</span></li>
            <li><span>・LE在宅・施設 訪問看護リハビリステーション・南千住</span></li>
            <li>・エール訪問看護ステーション</li>
            <li>・日介訪問看護ステーション</li>
            <li>・訪問看護ステーションはな</li>
            <li>・訪問看護リハビリステーション白樺</li>
            <li>・指定訪問看護アットリハ梅島</li>
            <li>・ガイア訪問看護ステーション</li>
            <li>・かもめ訪問看護ステーション</li>
            <li>・訪問看護ステーションちゅーりっぷ</li>
            <li>・輝　訪問看護ステーション</li>
            <li>・フローレンス訪問看護たけのつか</li>
            <li>・ミルカ訪問看護ステーション</li>
            <li>・訪問看護ステーションはなもも</li>
            <li>・綾瀬訪問看護ステーション</li>
            <li>・北千住訪問看護ステーション</li>
            <li>・ゆい訪問看護リハビリステーション葛飾</li>
            <li>・ベストリハ訪問看護ステーション</li>
            <li>・かきつばた訪問看護ステーション</li>
            <li>・トライケア訪問看護ステーション</li>
            <li>・わかくさ薬局</li>
            <li>・やまびこ訪問看護ステーション</li>
            <li><span>・ケアプロ訪問看護ステーション東京足立ステーション</span></li>
            <li>・スマイル優 訪問看護ステーション</li>
          </ul>
          <p>居宅支援事務所</p>
          <ul>
            <li>・わかばケアセンター大谷田</li>
            <li>・わかばケアセンター鹿浜</li>
            <li>・城北介護センター</li>
            <li class="jigyou_long">・医療法人財団 竹栄会 けんちの苑すみだ川指定居宅介護支援事業所</li>
            <li>・SOMPOケア北綾瀬居宅介護支援事業所</li>
            <li>・北千住訪問看護ステーション(居宅)</li>
            <li>・ケアサポーター・もやい</li>
            <li>・ケア21台東</li>
            <li>・宅ろう所ひらの</li>
            <li>・ゆいま〜るつばさ</li>
            <li>・日介センター足立西</li>
          </ul>
          <p>薬局</p>
          <ul>
            <li>・桜木薬局</li>
            <li>・つなぐ薬局足立</li>
            <li>・すず薬局</li>
            <li>・ほうもん薬局江東店</li>
            <li>・すばる薬局</li>
            <li>・かばさん薬局綾瀬店</li>
            <li>・なの花薬局東伊興店</li>
          </ul>
        </section>

        <?php elseif (strpos($url, 'sakura') !== false) : ?>
        <section id="sec_06">
          <h2>連携医療機関</h2>
          <p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
          <ul>
            <li>・東邦大学医療センター佐倉病院</li>
            <li>・聖隷佐倉市民病院</li>
            <li>・日本医科大学千葉北総病院病院</li>
            <li>・東京女子医科大学八千代医療センター</li>
            <li>・千葉大学医学部付属病院</li>
            <li>・成田富里徳州会病院</li>
            <li>・成田赤十字病院</li>
            <li>・下志津病院</li>
            <li>・国際医療福祉大学成田病院</li>
          </ul>
        </section>
        <section id="renkei_jigyou">
          <h2>連携事業所</h2>
          <p>訪問看護ステーション</p>
          <ul>
            <li>・MySelf訪問看護ステーション</li>
            <li>・アイリス訪問看護ステーション</li>
            <li>・クランベリー訪問看護ステーション・佐倉</li>
            <li>・コープみらい四街道訪問看護ステーション</li>
            <li>・訪問看護ステーション　サポートオール</li>
            <li>・しゃるぅる訪問看護ステーション</li>
            <li>・シュガーハート・勝田台訪問看護ステーション</li>
            <li>・セントケア看護小規模佐倉</li>
            <li>・セントケア訪問看護ステーション佐倉</li>
            <li>・セントケア訪問看護ステーション成田</li>
            <li>・ふくろう訪問看護ステーション</li>
            <li>・みなもと訪問看護リハビリステーション</li>
            <li>・もねの里訪問看護ステーション</li>
            <li>・ラビッツ訪問看護</li>
            <li>・わらび訪問看護ステーション四街道</li>
            <li>・勝田台訪問看護ステーション</li>
            <li>・厚生園訪問看護ステーション</li>
            <li>・ドットライフ 佐倉（訪問看護・リハビリ）</li>
            <li>・生活クラブ風の村訪問看護ステーションさくら</li>
            <li>・訪問ステーションてとてと印西</li>
            <li>・訪問看護ステーション　さくら咲くさくら</li>
            <li>・訪問看護ステーションきずな</li>
            <li>・訪問看護ステーション スマイルリンク 八千代事業所</li>
            <li>・訪問看護ステーション　笑の木</li>
            <li>・DS訪問看護ステーション佐倉</li>
            <li>・さくら咲くいんざい</li>
            <li>・訪問介護ステーションちとせ</li>
          </ul>
          <p>居宅支援事務所</p>
          <ul>
            <li>・ケアポート居宅介護事業所</li>
            <li>・ケアプラン夢</li>
            <li>・セントケア佐倉</li>
            <li>・ペブル居宅介護支援センター</li>
            <li>・在宅介護相談所きこえ</li>
            <li>・居宅介護支援事業所スマイル</li>
            <li>・せいれいケアプランセンター佐倉</li>
            <li>・印西居宅介護支援センター</li>
            <li>・ａｎｄｚ</li>
            <li>・ケアプランセンターしあわせうさぎ</li>
          </ul>
          <p>薬局</p>
          <ul>
            <li>・アイセイ薬局　志津店</li>
            <li>・アイン薬局 日本医大北総店</li>
            <li>・イオン薬局臼井店</li>
            <li>・ウエルシア佐倉小竹店</li>
            <li>・ウェルシア佐倉志津店</li>
            <li>・さくら薬局　下志津店</li>
            <li>・さくら薬局　佐倉南ユーカリが丘店</li>
            <li>・まごころ薬局</li>
            <li>・日本調剤そめい野薬局</li>
            <li>・日本調剤ユーカリ薬局</li>
            <li>・田中薬局</li>
            <li>・ウエルシア薬局勝田台店</li>
            <li>・ウエルシア薬局ユーカリが丘２号店</li>
            <li>・あやめ城西薬局</li>
            <li>・ユーカリ石井薬局</li>
            <li>・第一薬局浅間通り店</li>
            <li>・ウエルシア薬局佐倉王子台店</li>
            <li>・あやめ薬局西の原店</li>
            <li>・健栄鏑木薬局</li>
          </ul>
        </section>

        <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
        <section id="sec_06">
          <h2>連携医療機関</h2>
          <p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
          <ul>
            <li>・千葉大学医学部付属病院</li>
            <li>・東京女子医科大学八千代医療センター</li>
            <li>・日本医科大学千葉北総病院病院</li>
            <li>・東邦大学医療センター佐倉病院</li>
            <li>・聖隷佐倉市民病院</li>
            <li>・成田富里徳州会病院</li>
            <li>・勝田台病院</li>
            <li>・セントマーガレット病院</li>
            <li>・山王病院</li>
          </ul>
        </section>
        <section id="renkei_jigyou">
          <h2>連携事業所</h2>
          <p>訪問看護ステーション</p>
          <ul>
            <li>・MySelf訪問看護ステーション</li>
            <li>・いしいさん家の訪問看護</li>
            <li>・訪問看護ステーション スマイルリンク 八千代事業所</li>
            <li>・コウジー訪問看護リハビリステーション八千代</li>
            <li>・さかいリハ訪問看護ステーション・八千代</li>
            <li>・シュガーハート・勝田台訪問看護ステーション</li>
            <li>・セントケア訪問看護ステーション八千代緑が丘</li>
            <li>・ドットライフ 八千代（訪問看護・リハビリ）</li>
            <li>・まちのナースステーション八千代</li>
            <li>・ラビッツ訪問看護</li>
            <li>・勝田台訪問看護ステーション</li>
            <li>・大和田訪問看護ステーション</li>
            <li>・訪問看護ステーション　さくら咲くやちよ</li>
            <li>・アイリス訪問看護ステーション</li>
            <li>・クランベリー訪問看護ステーション・佐倉</li>
            <li>・コープみらい四街道訪問看護ステーション</li>
            <li>・訪問看護ステーション　サポートオール</li>
            <li>・しゃるぅる訪問看護ステーション</li>
            <li>・セントケア看護小規模佐倉</li>
            <li>・セントケア訪問看護ステーション佐倉</li>
            <li>・セントケア訪問看護ステーション成田</li>
            <li>・ふくろう訪問看護ステーション</li>
            <li>・みなもと訪問看護リハビリステーション</li>
            <li>・もねの里訪問看護ステーション</li>
            <li>・わらび訪問看護ステーション四街道</li>
            <li>・厚生園訪問看護ステーション</li>
            <li>・ドットライフ 佐倉（訪問看護・リハビリ）</li>
            <li>・生活クラブ風の村訪問看護ステーションさくら</li>
            <li>・訪問ステーションてとてと印西</li>
            <li>・訪問看護ステーション　さくら咲くさくら</li>
            <li>・訪問看護ステーションきずな</li>
            <li>・訪問看護ステーション スマイルリンク 八千代事業所</li>
            <li>・訪問看護ステーション　笑の木</li>
            <li>・DS訪問看護ステーション佐倉</li>
          </ul>
          <p>居宅支援事務所</p>
          <ul>
            <li>・セントマーガレット病院　居宅支援室</li>
            <li>・ニチイケアセンター八千代緑が丘</li>
            <li>・ケアポート居宅介護事業所</li>
            <li>・ケアプラン夢</li>
            <li>・セントケア佐倉</li>
            <li>・ペブル居宅介護支援センター</li>
            <li>・在宅介護相談所きこえ</li>
            <li>・居宅介護支援事業所スマイル</li>
            <li>・せいれいケアプランセンター佐倉</li>
          </ul>
          <p>薬局</p>
          <ul>
            <li>・薬樹薬局 八千代</li>
            <li>・アイセイ薬局　志津店</li>
            <li>・アイン薬局 日本医大北総店</li>
            <li>・イオン薬局臼井店</li>
            <li>・ウエルシア佐倉小竹店</li>
            <li>・ウェルシア佐倉志津店</li>
            <li>・さくら薬局　下志津店</li>
            <li>・さくら薬局　佐倉南ユーカリが丘店</li>
            <li>・まごころ薬局</li>
            <li>・日本調剤そめい野薬局</li>
            <li>・日本調剤ユーカリ薬局</li>
            <li>・田中薬局</li>
          </ul>
        </section>

        <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
        <section id="sec_06">
          <h2>連携医療機関</h2>
          <p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
          <ul>
            <li>・千葉大学医学部付属病院</li>
            <li>・東京女子医科大学八千代医療センター</li>
            <li>・日本医科大学千葉北総病院病院</li>
            <li>・東邦大学医療センター佐倉病院</li>
          </ul>
        </section>

        <?php elseif (strpos($url, 'motoyawata') !== false) : ?>
        <section id="sec_06">
          <h2>連携医療機関</h2>
          <p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
          <ul>
            <li>・千葉大学医学部付属病院</li>
          </ul>
        </section>

        <?php else : ?>
        <section id="sec_06">
          <h2>連携医療機関</h2>
          <p>病状に応じて、連携病院への紹介、入院にも迅速に対応いたします。</p>
          <ul>
            <li>・済生会加須病院</li>
            <li>・新久喜総合病院</li>
            <li>・東埼玉総合病院</li>
            <li>・新井病院</li>
            <li>・東鷲宮病院</li>
            <li>・白岡中央総合病院</li>
            <li>・久喜すずのき病院</li>
            <li>・埼玉県立がんセンター</li>
            <li>・東京女子医科大学病院</li>
            <li>・上尾中央総合病院</li>
            <li>・羽生総合病院</li>
            <li>・古河総合病院</li>
          </ul>
        </section>
        <?php endif; ?>
      </div>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/sidebar.php'); ?>
    </div>
  </div>
</article>
