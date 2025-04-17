<?php $url = $_SERVER['REQUEST_URI'];
  if (strpos($url, 'kinshichou') !== false || strpos($url, 'kitasenju') !== false || strpos($url, 'shinkoiwa') !== false) :
?>
  <ul>
    <li>内科</li>
    <li>呼吸器内科</li>
    <li>循環器内科</li>
    <li>消化器内科</li>
    <li>脳神経内科</li>
    <li>泌尿器科</li>
    <li>形成外科</li>
    <li>整形外科</li>
    <li>リハビリ科</li>
    <li>腫瘍内科</li>
    <li>緩和ケア科</li>
    <li>皮膚科</li>
    <li>精神科</li>
  </ul>
  <p>※ 精神科、皮膚科の往診のみでも受け付けております。</p>
<?php elseif (strpos($url, 'kitanarashino') !== false || strpos($url, 'yachiyo') !== false || strpos($url, 'sakura') !== false) : ?>
  <ul>
    <li>内科</li>
    <li>呼吸器内科</li>
    <li>循環器内科</li>
    <li>消化器内科</li>
    <li>脳神経内科</li>
    <li>泌尿器科</li>
    <li>整形外科</li>
    <li>リハビリ科</li>
    <li>腫瘍内科</li>
    <li>緩和ケア科</li>
    <li>皮膚科</li>
    <li>精神科</li>
  </ul>
<?php else : ?>
  <ul>
    <li>内科</li>
    <li>呼吸器内科</li>
    <li>循環器内科</li>
    <li>消化器内科</li>
    <li>脳神経内科</li>
    <li>泌尿器科</li>
    <li>整形外科</li>
    <li>リハビリ科</li>
    <li>腫瘍内科</li>
    <li>緩和ケア科</li>
    <li>皮膚科</li>
    <li>精神科</li>
  </ul>
  <p>※ 皮膚科・精神科往診のみでも受けつけております</p>
<?php endif; ?>
</section>
