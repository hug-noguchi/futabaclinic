<div id="side">
	<ul>
    <?php
      $url = $_SERVER['REQUEST_URI'];
      if (strpos($url, 'kinshichou') !== false) :
    ?>
      <li><a href="/kinshichou/"><span class="txt">ホーム <span class="arrow">&gt;</span></span></a></li>
    <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
      <li><a href="/shinkoiwa/"><span class="txt">ホーム <span class="arrow">&gt;</span></span></a></li>
    <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
      <li><a href="/kitasenju/"><span class="txt">ホーム <span class="arrow">&gt;</span></span></a></li>
    <?php elseif (strpos($url, 'sakura') !== false) : ?>
      <li><a href="/sakura/"><span class="txt">ホーム <span class="arrow">&gt;</span></span></a></li>
    <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
      <li><a href="/yachiyo/"><span class="txt">ホーム <span class="arrow">&gt;</span></span></a></li>
    <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
      <li><a href="/kitanarashino/"><span class="txt">ホーム <span class="arrow">&gt;</span></span></a></li>
    <?php elseif (strpos($url, 'motoyawata') !== false) : ?>
      <li><a href="/motoyawata/"><span class="txt">ホーム <span class="arrow">&gt;</span></span></a></li>
    <?php else : ?>
      <li><a href="/kuki/"><span class="txt">ホーム <span class="arrow">&gt;</span></span></a></li>
    <?php endif; ?>
		<li><a href="/"><span class="txt">法人トップ <br>分院案内</span><span class="arrow">&gt;</span></a></li>
    <?php
      $url = $_SERVER['REQUEST_URI'];
      if (strpos($url, 'kinshichou') !== false) :
    ?>
      <li><a href="/kinshichou/message/"><span class="txt">代表挨拶 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/kinshichou/about/"><span class="txt">在宅診療とは <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/kinshichou/input_yachiyo/"><span class="txt">お問い合わせ <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/entry_kinshichou.pdf" target="_blank"><span class="txt">お申し込み書 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/pamphlet_tokyo_2024.pdf" target="_blank"><span class="txt">パンフレット <span class="arrow">&gt;</span></span></a></li>
      <li class="faq"><a href="/kinshichou/faq/"><span class="txt">よくあるご質問 <span class="arrow">&gt;</span></span></a></li>
    <?php elseif (strpos($url, 'shinkoiwa') !== false) : ?>
      <li><a href="/shinkoiwa/message/"><span class="txt">理事長挨拶 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/shinkoiwa/about/"><span class="txt">在宅診療とは <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/contact/input_shinkoiwa/"><span class="txt">お問い合わせ <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/entry_shinnkoiwa.pdf" target="_blank"><span class="txt">お申し込み書 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/pamphlet_tokyo_2024.pdf" target="_blank"><span class="txt">パンフレット <span class="arrow">&gt;</span></span></a></li>
    <?php elseif (strpos($url, 'kitasenju') !== false) : ?>
      <li><a href="/kitasenju/message/"><span class="txt">理事長挨拶 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/kitasenju/about/"><span class="txt">在宅診療とは <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/contact/input_kitasenju/"><span class="txt">お問い合わせ <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/entry_kitasenju.pdf" target="_blank"><span class="txt">お申し込み書 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/pamphlet_tokyo_2024.pdf" target="_blank"><span class="txt">パンフレット <span class="arrow">&gt;</span></span></a></li>
    <?php elseif (strpos($url, 'sakura') !== false) : ?>
      <li><a href="/sakura/message/"><span class="txt">代表挨拶 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/sakura/about/"><span class="txt">在宅診療とは <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/contact/input_sakura/"><span class="txt">お問い合わせ <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/entry_sakura.pdf" target="_blank"><span class="txt">お申し込み書 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/pamphlet_chiba_2025.pdf" target="_blank"><span class="txt">パンフレット <span class="arrow">&gt;</span></span></a></li>
      <li class="faq"><a href="/sakura/faq/"><span class="txt">よくあるご質問 <span class="arrow">&gt;</span></span></a></li>
    <?php elseif (strpos($url, 'yachiyo') !== false) : ?>
      <li><a href="/yachiyo/message/"><span class="txt">代表挨拶 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/yachiyo/about/"><span class="txt">在宅診療とは <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/contact/input_yachiyo/"><span class="txt">お問い合わせ <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/entry_yachiyo.pdf" target="_blank"><span class="txt">お申し込み書 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/pamphlet_chiba_2025.pdf" target="_blank"><span class="txt">パンフレット <span class="arrow">&gt;</span></span></a></li>
      <li class="faq"><a href="/yachiyo/faq/"><span class="txt">よくあるご質問 <span class="arrow">&gt;</span></span></a></li>
    <?php elseif (strpos($url, 'kitanarashino') !== false) : ?>
      <li><a href="/kitanarashino/message/"><span class="txt">代表挨拶 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/kitanarashino/about/"><span class="txt">在宅診療とは <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/contact/input_kitanarashino/"><span class="txt">お問い合わせ <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/entry_kitanarashino.pdf" target="_blank"><span class="txt">お申し込み書 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/pamphlet_chiba_2025.pdf" target="_blank"><span class="txt">パンフレット <span class="arrow">&gt;</span></span></a></li>
      <li class="faq"><a href="/kitanarashino/faq/"><span class="txt">よくあるご質問 <span class="arrow">&gt;</span></span></a></li>
    <?php elseif (strpos($url, 'motoyawata') !== false) : ?>
      <li><a href="/motoyawata/message/"><span class="txt">代表挨拶 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/motoyawata/about/"><span class="txt">在宅診療とは <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/contact/input_motoyawata/"><span class="txt">お問い合わせ <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/entry_motoyawata.pdf" target="_blank"><span class="txt">お申し込み書 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/pamphlet_chiba_2025.pdf" target="_blank"><span class="txt">パンフレット <span class="arrow">&gt;</span></span></a></li>
      <li class="faq"><a href="/motoyawata/faq/"><span class="txt">よくあるご質問 <span class="arrow">&gt;</span></span></a></li>
    <?php else : ?>
      <li><a href="/message/"><span class="txt">理事長挨拶 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/about/"><span class="txt">在宅診療とは <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/contact/input/"><span class="txt">お問い合わせ <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/entry.pdf" target="_blank"><span class="txt">お申し込み書 <span class="arrow">&gt;</span></span></a></li>
      <li><a href="/pamphlet_2024.pdf" target="_blank"><span class="txt">パンフレット <span class="arrow">&gt;</span></span></a></li>
      <li class="faq"><a href="/kuki/faq/"><span class="txt">よくあるご質問 <span class="arrow">&gt;</span></span></a></li>
    <?php endif; ?>
		<li class="tmi"><a href="https://www.tmi.gr.jp/" target="_blank"><span class="txt">TMI総合<br>法律事務所 </span><span class="arrow">&gt;</span></a></li>
	</ul>
</div>
