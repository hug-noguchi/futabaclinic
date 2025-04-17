$(function () {
  // クリックしたときのファンクションをまとめて指定
  $("ul.tab_area li").click(function () {
    var index = $("ul.tab_area li").index(this);
    $(".content_area").css("display", "none");
    $(".content_area").eq(index).fadeIn(100); // アニメーション速度を200ミリ秒に設定
    $("ul.tab_area li").removeClass("active");
    $(this).addClass("active");
  });
});

$(function () {
  // ハッシュが変更されたときの処理を追加
  $(window).on("hashchange", function () {
    var hash = location.hash;
    hash = (hash.match(/^#tab\d+$/) || [])[0];
    var tabname = hash ? hash.slice(1) : "tab1";

    if ($("#" + tabname).length && $(".content_area").length) {
      $(".content_area").css("display", "none");
      $(".tab_area li").removeClass("active");
      var tabno = $("ul.tab_area li#" + tabname).index();
      $(".content_area").eq(tabno).fadeIn(100); // アニメーション速度を200ミリ秒に設定
      $("ul.tab_area li").eq(tabno).addClass("active");
    }
  });

  // ページロード時にハッシュを確認しタブを切り替える
  $(window).trigger("hashchange");
});
