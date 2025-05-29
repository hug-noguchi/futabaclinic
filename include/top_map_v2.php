<style>
  .top_map {
    position: relative;
  }
  .top_map .recruit-map-layout {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    gap: 34px;
    flex-wrap: nowrap;
  }
  .top_map .area-column {
    display: flex;
    flex-direction: column;
  }
  .top_map .top_map_chiba {
    margin-left: auto;
  }
  .top_map .map-center-wrapper {
    max-width: 620px;
    width: 61%;
    position: absolute;
    top: 44%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    z-index: -1;
  }
  .top_map .bg-map {
    width: 100%;
    height: auto;
  }
  .top_map .area-title {
    font-family: "Hiragino Maru Gothic ProN", "ヒラギノ丸ゴ ProN W4", "Hiragino Maru Gothic Std", "ヒラギノ丸ゴ Std", sans-serif;
    font-weight: 580;
    font-size: 1.4em;
    color: #f48a9d;
    text-align: left;
    margin-bottom: 8px;
  }
  .top_map .area-title::before {
    content: '';
    display: inline-block;
    width: 12px;
    height: 12px;
    margin-right: 4px;
    background-color: #f48a9d;
    border-radius: 50%;
  }
  .top_map .area-column .clinic:not(:last-child) {
    margin-bottom: 14px;
  }
  .top_map .clinic img {
    width: 100%;
    height: auto;
    max-width: 200px;
    border-radius: 4px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }
  /* .top_map .clinic img:hover {
    transform: scale(1.05);
  }
  .top_map .top_honbu img:hover {
    transform: unset;
  }
  .top_map .clinic:hover {
    opacity: unset;
  } */
  @media screen and (max-width: 768px) {
    .top_map {
      padding: 0 20px;
    }
    .top_map .recruit-map-layout {
      gap: 12px;
    }
    .top_map .area-title {
      font-size: 13px;
      font-weight: 700;
    }
    .top_map .area-title::before {
      width: 8px;
      height: 8px;
      margin-right: 2px;
    }
    .top_map .area-column .clinic:not(:last-child) {
      margin-bottom: 4px;
    }
    .top_map .clinic img {
      max-width: 80px;
    }
    .top_map .map-center-wrapper {
      max-width: 350px;
      width: 49%;
      top: 39%;
    }
  }
</style>

<div class="recruit-map-layout">
  <div class="area-column">
    <p class="area-title">東京エリア</p>
    <a href="/kinshichou/" class="clinic pc"><img src="/common/images/top_map_kinshichou.jpg" alt="錦糸町院"></a>
    <a href="/shinkoiwa/" class="clinic pc"><img src="/common/images/top_map_shinkoiwa.jpg" alt="新小岩院"></a>
    <a href="/kitasenju/" class="clinic pc"><img src="/common/images/top_map_kitasenju.jpg" alt="北千住院"></a>
    <div class="clinic top_honbu pc"><img src="/common/images/top_map_honbu.jpg" alt="六本木本部"></div>
    <a href="/kinshichou/" class="clinic sp"><img src="/common/images/top_map_kinshichou_sp.jpg" alt="錦糸町院"></a>
    <a href="/shinkoiwa/" class="clinic sp"><img src="/common/images/top_map_shinkoiwa_sp.jpg" alt="新小岩院"></a>
    <a href="/kitasenju/" class="clinic sp"><img src="/common/images/top_map_kitasenju_sp.jpg" alt="北千住院"></a>
    <div class="clinic top_honbu sp"><img src="/common/images/top_map_honbu_sp.jpg" alt="六本木本部"></div>
  </div>
  <div class="area-column">
    <p class="area-title">埼玉エリア</p>
    <a href="/kuki/" class="clinic pc"><img src="/common/images/top_map_kuki.jpg" alt="埼玉院"></a>
    <a href="/kuki/" class="clinic sp"><img src="/common/images/top_map_kuki_sp.jpg" alt="埼玉院"></a>
  </div>
  <div class="area-column top_map_chiba">
    <p class="area-title">千葉エリア</p>
    <a href="/sakura/" class="clinic pc"><img src="/common/images/top_map_sakura.jpg" alt="佐倉院"></a>
    <a href="/yachiyo/" class="clinic pc"><img src="/common/images/top_map_yachiyo.jpg" alt="八千代院"></a>
    <a href="/kitanarashino/" class="clinic pc"><img src="/common/images/top_map_kitanarashino.jpg" alt="北習志野院"></a>
    <a href="/motoyawata/" class="clinic pc"><img src="/common/images/top_map_motoyawata.jpg" alt="本八幡院"></a>
    <a href="/sakura/" class="clinic sp"><img src="/common/images/top_map_sakura_sp.jpg" alt="佐倉院"></a>
    <a href="/yachiyo/" class="clinic sp"><img src="/common/images/top_map_yachiyo_sp.jpg" alt="八千代院"></a>
    <a href="/kitanarashino/" class="clinic sp"><img src="/common/images/top_map_kitanarashino_sp.jpg" alt="北習志野院"></a>
    <a href="/motoyawata/" class="clinic sp"><img src="/common/images/top_map_motoyawata_sp.jpg" alt="本八幡院"></a>
  </div>
</div>
<div class="map-center-wrapper">
  <img src="/common/images/top_map.jpg" alt="マップ" class="bg-map pc">
  <img src="/common/images/top_map_sp.jpg" alt="マップ" class="bg-map sp">
</div>
