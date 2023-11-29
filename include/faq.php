<div class="faq">
	<h2>よくあるご質問</h2>
  <section>
    <?php $url = $_SERVER['REQUEST_URI']; ?>
    <div class="faq_title">
      <ul class="title_list">
        <li class="accordion">
          <div class="option">
          <input type="checkbox" id="toggle1" class="toggle">
          <label class="title" for="toggle1"><span>Q.</span>何科の先生がいるのですか？</label>
          <div class="content">
          <p>
            <span class="answer">A.</span>
            <?php if($url == "/kuki/faq/") { ?>
              当院は、呼吸器科・循環器科・消化器科・泌尿器科など、複数の常勤医が在籍しております。<br>
              在宅総合診療、緩和ケアの経験豊富な医師です。
              <br><br>
              他にも皮膚科・精神科・外科などの専門医が在籍しており、総合病院のようなチーム医療を実践しています。
            <?php } else if($url == "/sakura/faq/" || $url == "/yachiyo/faq/") { ?>
              当院は、呼吸器科・循環器科・脳神経科・リハビリ科など、複数の常勤医が在籍しております。<br>
              在宅総合診療、緩和ケアの経験豊富な医師です。
              <br><br>
              他にも皮膚科・精神科などの専門医が在籍しており、総合病院のようなチーム医療を実践しています。
            <?php } else { ?>
              当院は、循環器科・呼吸器科・泌尿器科・麻酔科・形成外科など、複数の常勤医が在籍しております。<br>
              在宅総合診療、緩和ケアの経験豊富な医師です。
              <br><br>
              他にも皮膚科・精神科・外科などの専門医が在籍しており、総合病院のようなチーム医療を実践しています。
            <?php } ?>
          </p>
          </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
            <input type="checkbox" id="toggle2" class="toggle">
            <label class="title" for="toggle2"><span>Q.</span>他の病院にも通院できますか？</label>
            <div class="content">
            <p>
              <span class="answer">A.</span>
              もちろんできます。<br>
              病院を数ヶ月に1度受診しながら、普段の自宅療養のサポートを当院で行います。<br>
              抗がん剤をしながらや、専門科目は数ヶ月に１度受診しながら利用している方も多いです。
              <br><br>
              在宅医療というと、終末期というイメージがいまだに強く、「病院に見捨てられた」「最期だ・・・」と思う方が多いですが、そんなことはありません。
              <br><br>
              当院は、病院と連携しながら、自宅療養をサポートいたします。
            </p>
            </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
            <input type="checkbox" id="toggle3" class="toggle">
            <label class="title" for="toggle3"><span>Q.</span>入院が必要な時は病院を紹介してもらえますか？</label>
            <div class="content">
            <p>
              <span class="answer">A.</span>
              <?php if($url == "/kuki/faq/") { ?>
                当院は、在宅医療において大事なことは、病院との連携と考えております。
                <br><br>
                院長が長年、地域の中核病院に勤務していたこともあり、当院は、「病診連携の充実」をテーマに診療しています。<br>
                緊急時は地域の中核病院に迅速に紹介、入院依頼を行います。
              <?php } else if($url == "/sakura/faq/") { ?>
                当院は、在宅医療において大事なことは、病院との連携と考えております。
                <br><br>
                院長が長年、地域の中核病院に勤務していたこともあり、当院は、「病診連携の充実」をテーマに診療しています。<br>
                緊急時は地域の中核病院に迅速に紹介、入院依頼を行います。
              <?php } else { ?>
                当院は、「病診連携の充実」をテーマに診療しています。<br>
                緊急時は地域の中核病院に迅速に紹介、入院依頼を行います。
              <?php } ?>
            </p>
            </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
            <input type="checkbox" id="toggle4" class="toggle">
            <label class="title" for="toggle4"><span>Q.</span>何人で自宅に来るのですか？</label>
            <div class="content">
              <p>
                <span class="answer">A.</span>
                <?php if($url == "/kuki/faq/") { ?>
                  基本的には、医師と看護師（救命士）の2人体制で伺います。
                  <br><br>
                  当院は医師会在宅医療顧問、研修医指導施設です。<br>
                  研修医や看護実習などの研修同行者がいる場合がありますので、ご了承下さい。
                <?php } else if($url == "/sakura/faq/") { ?>
                  基本的には、医師と看護師（救命士）の2人体制で伺います。
                  <br><br>
                  研修医や看護実習などの研修同行者がいる場合がありますので、ご了承下さい。
                <?php } else { ?>
                  基本的には、医師と看護師（救命士）、運転手の3人体制で伺います。
                  <br><br>
                  研修医や看護実習などの研修同行者がいる場合がありますので、ご了承下さい。
                <?php } ?>
              </p>
            </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
          <input type="checkbox" id="toggle5" class="toggle">
          <label class="title" for="toggle5"><span>Q.</span>自宅での看取りを考えているのですが、可能ですか？</label>
          <div class="content">
          <p>
            <span class="answer">A.</span>
            当法人は年間500人以上の看取り実績があり、自宅看取りに力を入れております。
            <br><br>
            ご家族や各事業所と連携して、希望に沿えるようサポートいたします。
            <br><br>
            もちろん在宅療養が難しくなった場合は病院や施設をご紹介いたします。
          </p>
          </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
          <input type="checkbox" id="toggle6" class="toggle">
          <label class="title" for="toggle6"><span>Q.</span>夜間・休日の体制はどうなっていますか？</label>
          <div class="content">
          <p>
            <span class="answer">A.</span>
            医師、看護師（救命士）、それぞれ当直室を完備しており、「常勤」の看護師（救命士）、医師が待機しております。
            <br><br>
            契約している患者様に対しては、緊急時は24時間対応しますので、ご安心下さい。
            <br><br>
            往診が重なったりで、すぐに対応できないこともありますが、その際も電話診察、訪問看護師と連携し、適切に対応いたします。
          </p>
          </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
          <input type="checkbox" id="toggle7" class="toggle">
          <label class="title" for="toggle7"><span>Q.</span>どのような検査ができますか？</label>
          <div class="content">
          <p>
            <span class="answer">A.</span>
            ポータブルX線レントゲン検査、エコー検査をはじめ、血液検査、心電図、培養検査等行っております。<br>
            CT、MRIに関しては連携医療機関に依頼いたします。
          </p>
          </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
          <input type="checkbox" id="toggle8" class="toggle">
          <label class="title" for="toggle8"><span>Q.</span>在宅輸血は対応していますか</label>
          <div class="content">
          <p>
            <span class="answer">A.</span>
            対応しております。<br>
            ただし、緊急の輸血対応は難しいので、事前に輸血予定日を組ませていただいております。
          </p>
          </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
          <input type="checkbox" id="toggle9" class="toggle">
          <label class="title" for="toggle9"><span>Q.</span>胸水・腹水穿刺は対応していますか？</label>
          <div class="content">
          <p>
            <span class="answer">A.</span>
            対応しております。<br>
            ただし、当番医によっては夜間休日の穿刺は難しい場合がございますので、早めに穿刺予定日を組ませていただいております。
          </p>
          </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
          <input type="checkbox" id="toggle10" class="toggle">
          <label class="title" for="toggle10"><span>Q.</span>紹介状がない場合でも訪問診療は頼めますか？</label>
          <div class="content">
          <p>
            <span class="answer">A.</span>
            かかりつけ医がいない等の事情がある場合は必須ではありません。<br>
            初診時に病状、病歴の問診をさせていただきます。
          </p>
          </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
          <input type="checkbox" id="toggle11" class="toggle">
          <label class="title" for="toggle11"><span>Q.</span>交通費はかかりますか？</label>
          <div class="content">
          <p>
            <span class="answer">A.</span>
            交通費はいただいておりません。<br>
            ただし、夜間休日の緊急往診に関しては別途1000円交通費をいただいております。
          </p>
          </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
          <input type="checkbox" id="toggle12" class="toggle">
          <label class="title" for="toggle12"><span>Q.</span>初診の緊急往診はしていますか？</label>
          <div class="content">
          <p>
            <span class="answer">A.</span>
            緊急のご依頼も受け付けておりますので、具合が悪い際はお気軽にご相談ください。
          </p>
          </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
          <input type="checkbox" id="toggle13" class="toggle">
          <label class="title" for="toggle13"><span>Q.</span>訪問時間の指定はできますか？</label>
          <div class="content">
          <p>
            <span class="answer">A.</span>
            訪問予定時間は午前、午後でお伝えしています。<br>
            ご自宅でゆっくりお待ちください。
            <br><br>
            重症患者様や急変患者様が優先になるので、正確な到着時間をお伝えすることは難しいです。<br>
            何卒ご理解、ご協力をお願いいたします。
          </p>
          </div>
          </div>
        </li>
        <li class="accordion">
          <div class="option">
          <input type="checkbox" id="toggle14" class="toggle">
          <label class="title" for="toggle14"><span>Q.</span>臨時往診はどれくらいで到着しますか？</label>
          <div class="content">
          <p>
            <span class="answer">A.</span>
            夜間・休日は、最短30分〜1時間程度で到着いたします。<br>
            日中は他の訪問患者様もいますので、時間を要することもございます。
            <br><br>
            他の患者様の診療状況や交通状況により到着時間は変動しますので、何卒ご理解、ご協力をお願いいたします。
          </p>
          </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
</div>
