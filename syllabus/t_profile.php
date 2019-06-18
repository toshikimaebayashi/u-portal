<html>
<?php require 'head.php' ?>

<body>
  <div class="wrap">
    <?php require 'header.php' ?>
    <div class="container">
      <div class="row">
        <div class="col-xs-12"></div>
      </div>
      <?php if(!isset($_SESSION["NAME"])) { ?>
      <div class="row profile">
        <div class="col-xs-12">
          <div class="mT5 mB10"></div>
          <div class="row">
            <div class="col-xs-12">
              <a href="index.php">トップに戻る</a>
            </div>
          </div>
          <div class="Page">
            <h1 class="Page__title">プロフィール設定</h1>
            <p class="Page__text">プロフィールを変更できます。</p>
          </div>
        </div>
      </div>
      <?php } else {?>
      <div class="row profile">
        <div class="col-xs-12">
          <div class="mT5 mB10"></div>
          <div class="row">
            <div class="col-xs-12"><a href="index.php">トップに戻る</a></div>
          </div>
          <div class="Page">
            <h1 class="Page__title">プロフィール設定</h1>
            <p class="Page__text">プロフィールを変更できます。</p>
          </div>
          <form class="row-img" action="profile.php" method="post">
            <div class="col-md-6 col-xs-12">
              <div class="user-label-icon label-icon-lg m-b-md centered-block">
                <?php Media::media_up($upload_user_name);?>
              </div>
              <fieldset class="form-group">
                <div class="fr-file-input">
                  <label for="user_thumbnail_image">プロフィール画像</label>
                  <input value="{}" type="hidden" name="upfile">
                  <input class="form-control-file" type="file" name="upfile" id="user_thumbnail_image">
                </div>
                <input type="submit" value="アップロード">
              </fieldset>
              <div class="col-xs-12 conX rute">
                <div class="field">
                  <label>なまえ</label>
                  <br>
                  <input autocomplete="off" class="form-control" type="password" name="user[password]" id="user_password">
                </div>
              </div>
            </div>
          </form>
          <div class="Page">
            <h1 class="Page__title">お気に入りの授業</h1>
            <?php foreach ($userdata as $g) { ?>
            <a class="Page__text"><?php echo $g['likeclass'] ?></a><br>
            <?php } ?>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <?php require 'footer.php' ?>
  </div>
</body>

</html>
