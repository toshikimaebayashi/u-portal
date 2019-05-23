<?php
        $upload_user_name = $g['username'];
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
                   echo("<img class='icon size40' src='media/import_media.php?target=$target'>");
                 }
                  echo('<br/>');
               }
               }
        ?>
