<div class="Status">

  <?php if(!isset($_SESSION["NAME"])) { ?>
  <div class="user-label-icon label-icon-lg m-b-md centered-block">
    <img src="images/noimage.png">
  </div>
  <?php } else {?>
  <div class="user-label-icon label-icon-lg m-b-md centered-block">
    <?php Media::sidebar_media_up($_SESSION["NAME"]) ?>
  </div>
  <?php } ?>
  <div class="Status__block Status__block--favorite">
    <p class="Status__review">お気に入り授業数：<span>1</span></p>
    <p class="Status__favorites">
      <a href="/mypage">お気に入り授業の時間割</a>
    </p>
  </div>
</div>
