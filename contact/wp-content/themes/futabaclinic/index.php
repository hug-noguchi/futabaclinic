
<?php get_header(); ?>
<style>
	#main p:nth-child(1) {
		text-align: left;
	}
	#contents {
		margin-top: 0;
	}
	.text-link {
		font-size: 14px !important;
	}
	@media all and (min-width: 481px) {
		#contact nav ul li:nth-child(9) a{
			background: #f48a9d;
			border-radius: 5px;
			opacity: 1;
			color: #fff;
		}
		#contact nav ul li:nth-child(8) a{
			background: none;
			color: #202020;
			pointer-events:auto;
		}
		#contact nav ul li:nth-child(8) a:hover{
			background: #f48a9d;
			border-radius: 5px;
			opacity: 1;
			color: #fff;
		}
	}
</style>
		<ul id="breadcrumb">
			<li><a href="/">ホーム</a>&nbsp;&gt;&nbsp;</li>
			<li>お申し込み</li>
		</ul>
		<div id="contents">
			<div id="main">
				<section style="margin-bottom: 80px;">
					<h2>お申し込み（訪問診療依頼）</h2>
					<div class="txt_box_01">
						<p class="tit" style="text-align: center !important;">ご相談は早めの段階で！</p>
						<p class="txt_01">
							<span>通院が難しくなったり、がんと診断された患者様は早めの段階でご相談ください。</span>
							<span>「在宅医療＝終末期」というイメージがいまだに強く、かなり状態が悪くなってから在宅医療を利用する方が多いですが、早めに介入できた方が、十分に対話もでき、本当に望まれている在宅医療を提供できると考えております。</span>
							<span>病院に通院しながら、普段の体調管理や点滴などで利用することも可能です。<br>ぜひ、気軽にご相談ください。</span>
						</p>
					</div>
					<div>
						<p>・<span class="f_pink">直接ご連絡</span>いただくか、<span class="f_pink">担当ケアマネージャー</span>さんや、<span class="f_pink">医療機関</span>を通してもご相談いただけます。</p>
						<p>・お電話<a href="tel:0480449178">（0480-44-9178）</a>もしくは<a href="/contact/input/#form">お問い合わせフォーム</a>より気軽にご連絡下さい。</p>
						<p>・<a href="/entry.pdf" target="_blank">お申込み書（訪問診療依頼書）</a>を記載いただき、FAXしていただいてもかまいません。</p>
						<p>・お忙ぎの方はお電話をお願いいたします。</p>
						<p>・お電話、又はメールにてご返信申し上げます。ご連絡先はお間違いのない様ご入力をお願いいたします。</p>
					</div>
					<div class="tel_box">
						<p class="tel"><a href="tel:0480449178">0480-44-9178</a></p>
						<p class="txt_01">&lt;受付時間&gt; 平日 午前 9:00 ~ 午後 6:00</p>
					</div>
					<div class="fax_box">
						<p class="fax"><span class="fax_txt">0480-44-9179</span></p>
					</div>
					<div class="mail_box">
						<p><a href="/contact/input/">お問い合わせフォーム</a></p>
					</div>
					<div class="pdf_box">
						<p><a href="/entry.pdf" target="_blank">お申し込み書（訪問診療依頼書）</a></p>
					</div>
				</section>
				<section class="flow">
					<h2>在宅診療の流れ</h2>
					<ul>
						<li>
							<dl>
								<dt>①ご相談、お申し込み</dt>
								<dd>
									<p>在宅医療をお考えの方、詳細だけでも聞いてみたい方はまずは、一度お電話&nbsp;
										<a href="tel:0480449178">0480-44-9178</a>
										&nbsp;でご相談ください。
									</p>
									<p>
										<a href="/contact/input/#form" class="text-link">お問い合わせメール</a>
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

			<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/side.php'); ?>

		</div>
<?php get_footer() ?>
