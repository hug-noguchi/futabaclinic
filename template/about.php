<div id="visual">
  <p>
    <img class="pc" src="/common/images/about_key.jpg" srcset="/common/images/about_key_2x.jpg 2x" alt="在宅診療とは">
    <img class="sp" src="/common/images/about_sp_key.jpg" srcset="/common/images/about_sp_key_2x.jpg 2x" alt="在宅診療とは">
  </p>
</div>
<div id="contents">
  <div id="main">
    <section id="sec_01">
      <h2>在宅診療とは?</h2>
      <?php $url = $_SERVER['REQUEST_URI'];
        if (strpos($url, 'kitasenju') !== false) :
      ?>
        <p>訪問診療とは、通院が困難な患者さんに対して、医師がご自宅を定期的に（月2回～）訪問して診療を行うことです。</p>
      <?php else : ?>
        <p>在宅医療・診療（訪問診療）とは、通院が困難な患者さんに対して、医師がご自宅を定期的に（月2回～）訪問して診療を行うことです。</p>
      <?php endif; ?>
      <p>病気の治療・予防を中心に行い、緊急時には24時間365日対応いたします。</p>
      <p>病状に応じて、連携病院への入院やご自宅での治療など適切に対応します。</p>
      <p>病状が安定した方も治療が必要な方も気軽にご相談ください。</p>
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
    <section>
      <h2>対象となる方</h2>
      <p>ひとりで通院ができなくなった方であれば誰でも対象となります。</p>
      <p>ご自宅でのんびり静養したい方はもちろん、グループホームや高齢者施設に入院中の方もお気軽にお問い合わせください。</p>
      <ul>
        <li><span class="check"><img src="/common/images/icon_check_02.svg" loading=”lazy” alt="checkmark"></span><span class="border">通院が大変、外来の待ち時間が長くて大変な方</span></li>
        <li><span class="check"><img src="/common/images/icon_check_02.svg" loading=”lazy” alt="checkmark"></span><span class="border">ご家族の通院付き添いが大変な方</span></li>
        <li><span class="check"><img src="/common/images/icon_check_02.svg" loading=”lazy” alt="checkmark"></span><span class="border">入院せずに、ご自宅で治療を受けたい方</span></li>
        <li><span class="check"><img src="/common/images/icon_check_02.svg" loading=”lazy” alt="checkmark"></span><span class="border">ご自宅での終末期医療、緩和ケアを望む方</span></li>
        <li><span class="check"><img src="/common/images/icon_check_02.svg" loading=”lazy” alt="checkmark"></span><span class="border">退院後のご自宅での療養が不安な方</span></li>
        <li><span class="check"><img src="/common/images/icon_check_02.svg" loading=”lazy” alt="checkmark"></span><span class="border">いつでも気軽に相談できるかかりつけ医をお探<span class="border_02">しの方</span></span></li>
        <li><span class="check"><img src="/common/images/icon_check_02.svg" loading=”lazy” alt="checkmark"></span><span class="border">独居高齢者の安否確認が必要な方</span></li>
        <li><span class="check"><img src="/common/images/icon_check_02.svg" loading=”lazy” alt="checkmark"></span><span class="border">主治医意見書が必要な方</span></li>
      </ul>
    </section>
    <section id="shinryou_box">
      <h2>診療内容</h2>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/shinryou_box.php'); ?>
    </section>
    <section>
      <h2>料金</h2>
      <p>
        自己負担金は保険種別により異なりますが、<br>
        <span class="fb">１割負担の方で、</span>
      </p>
      <div class="box">
        <h3><span class="h3">・ご自宅でお過ごしの患者様</span></h3>
        <p>
          <span class="txt_01">6,526円</span> ～/月です。<br class="sp">自己負担上限金額は18,000円です。
        </p>
      </div>
      <div class="box">
        <h3>
          <span class="h3">・施設にご入居中の患者様</span>
            <span class="h3_txt pc">※人数で料金が異なります。</span>
        </h3>
        <p><span class="h3_txt sp">※人数で料金が異なります。</span></p>
        <p>
          その施設に患者様が<span class="fb">1人</span>の場合、<br>
          <span class="txt_01">4,976円</span> ～/月です。<br class="sp">自己負担上限金額は18,000円です。
        </p>
        <p>
          その施設に患者様が<span class="fb">2～9人</span>の場合、<br>
          <span class="txt_01">2,126円</span> ～/月です。<br class="sp">自己負担上限金額は18,000円です。
        </p>
        <p class="b_pink">
          その施設に患者様が<span class="fb">10人以上</span>の場合、<br>
          <span class="txt_01">1,601円</span> ～/月です。<br class="sp">自己負担上限金額は18,000円です。
        </p>
        <p>
          症状により負担金が増える場合がございます。<br>
          福祉給付金資格者、障がい者の方は医療費はかかりません。
        </p>
      </div>
      <p class="last">
        詳しくはお気軽に
        <span>
          <a
            <?php
              $url = $_SERVER['REQUEST_URI'];
              if (strpos($url, 'kinshichou') !== false) :
            ?>
              href="/contact/input_kinshichou/"
            <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
              href="/contact/input_shinkoiwa/"
            <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
              href="/contact/input_kitasenju/"
            <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
              href="/contact/input_kitanarashino/"
            <?php elseif (strpos($url, 'sakura') !== false) : ?>
              href="/contact/input_sakura/"
            <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
              href="/contact/input_yachiyo/"
            <?php else : ?>
              href="/contact/input_kuki/"
            <?php endif; ?>
          >お問い合わせ</a>
        </span>
        ください。
      </p>
    </section>
    <section>
      <h2>在宅診療の流れ</h2>
      <ul>
        <li>
          <dl>
            <dt>①ご相談、お申し込み</dt>
            <dd>
              <p>
                在宅医療をお考えの方、詳細だけでも聞いてみたい方はまずは、一度お電話&nbsp;
                <?php
                  $url = $_SERVER['REQUEST_URI'];
                  if (strpos($url, 'kinshichou') !== false) :
                ?>
                  <a href="tel:0366588175" class="tel-link">03-6658-8175</a>
                <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
                  <a href="tel:0358793530" class="tel-link">03-5879-3530</a>
                <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
                  <a href="tel:0368062590" class="tel-link">03-6806-2590</a>
                <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
                  <a href="tel:0474026536" class="tel-link">047-402-6536</a>
                <?php elseif (strpos($url, 'sakura') !== false) : ?>
                  <a href="tel:0432909700" class="tel-link">043-290-9700</a>
                <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
                  <a href="tel:0474093677" class="tel-link">047-409-3677</a>
                <?php else : ?>
                  <a href="tel:0480449178" class="tel-link">0480-44-9178</a>
                <?php endif; ?>
                &nbsp;でご相談ください。
              </p>
              <p>
              <?php
                  $url = $_SERVER['REQUEST_URI'];
                  if (strpos($url, 'kinshichou') !== false) :
                ?>
                  <a href="/contact/input_kinshichou/#form" class="text-link">
                <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
                  <a href="/contact/input_shinkoiwa/#form" class="text-link">
                <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
                  <a href="/contact/input_kitasenju/#form" class="text-link">
                <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
                  <a href="/contact/input_kitanarashino/#form" class="text-link">
                <?php elseif (strpos($url, 'sakura') !== false) : ?>
                  <a href="/contact/input_sakura/#form" class="text-link">
                <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
                  <a href="/contact/input_yachiyo/#form" class="text-link">
                <?php else : ?>
                  <a href="/contact/input/#form" class="text-link">
                <?php endif; ?>
                  お問い合わせメール</a>
                  、お申し込み書FAXでもかまいません。
              </p>
              <p>
              ご連絡は患者様、ご家族、ケアマネージャーさん、かかりつけの医療機関など、どなたからでもお待ちしております。<br>
              当院の担当者がお答えいたします。
              </p>
            </dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>②面談</dt>
            <dd>
              患者様にとって在宅医療が最善かどうか、医師を含め、スタッフが訪問し、面談をして決定します。<br>
              入院中の患者様の場合、病院へうかがい、入院主治医とも相談、連携いたします。
            </dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>③訪問開始</dt>
            <dd>
              初回訪問日を決定し、在宅医療を開始します。<br>患者様の経過を定期的にみながら（月2回程度）、ご家族にも適切なアドバイスを行います。<br>また緊急時には24時間365日電話対応いたします。
            </dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>④処方</dt>
            <dd>
              処方せんをお出しした場合、薬局に薬を取りに行っていただくか、当院と連携している薬局がご自宅にお届けいたします。
            </dd>
          </dl>
        </li>
      </ul>
    </section>
  </div>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/sidebar.php'); ?>
</div>
