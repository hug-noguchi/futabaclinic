$(function () {
  $(".news_list .tab li").on("click", function () {
    var index = $(".news_list .tab li").index(this);
    $(".news_list .tab li").removeClass("active");
    $(this).addClass("active");
    $(".news_show .show").removeClass("active").eq(index).addClass("active");
  });
});
