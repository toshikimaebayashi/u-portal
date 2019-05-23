<div class="Status">

  <?php if(!isset($_SESSION["NAME"])) { ?>
  <div class="user-label-icon label-icon-lg m-b-md centered-block">
  </div>
  <?php } else {?>
  <div class="user-label-icon label-icon-lg m-b-md centered-block"><?php
        $upload_user_name = $_SESSION["NAME"];
              //DBから取得して表示する．
               $sql = 'SELECT * FROM media WHERE name =' .'"'. $upload_user_name.'"';
               $stmt = $pdo->prepare($sql);
               $stmt->execute();
    
               if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                 if ( $row['name'] == $upload_user_name) {
                  
                 //動画と画像で場合分け
                 $target = $row['fname'];
            
                 if ($row['extension'] == 'mp4') {
                   echo("<video src=\"media/import_media.php?target=$target\" width=\"426\" height=\"240\" controls></video>");
                 } elseif ($row['extension'] == 'jpeg' || $row['extension'] == 'png' || $row['extension'] == 'gif') {
                    echo("<img src='media/import_media.php?target=$target'>");
                 }
                  echo('<br/>');
               }
               }
        ?>
  </div>
  <?php } ?>
  <div class="Status__block Status__block--favorite">
    <p class="Status__review">お気に入り授業数：<span>1</span></p>
    <p class="Status__favorites">
      <a href="/mypage">お気に入り授業の時間割</a>
    </p>
  </div>
</div>
