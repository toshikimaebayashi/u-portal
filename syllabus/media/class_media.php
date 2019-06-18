<?php
class Media {
  
  public function profile_media_up($upload_user_name){
    $pdo = connect();
    $st = $pdo->query("SELECT * FROM favorite WHERE username =" ."'". $upload_user_name."'");
    
    try {
    $pdo = connect();
    
    $sqlfirst = 'SELECT * FROM media WHERE name =' .'"'. $upload_user_name.'"';
    $stmt = $pdo->prepare($sqlfirst);
    $stmt->execute();
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
    if (!isset($row["name"])) {
      if (isset($_FILES['upfile']['error']) && is_int($_FILES['upfile']['error']) && $_FILES['upfile']['name'] !== '') {
      //エラーチェック
        switch ($_FILES['upfile']['error']) {
          case UPLOAD_ERR_OK: // OK
            break;
          case UPLOAD_ERR_NO_FILE:   // 未選択だったら例外を投げる  throw new Exception(‘例外メッセージ’);
            throw new RuntimeException('ファイルが選択されていません', 400);
          case UPLOAD_ERR_INI_SIZE:  // php.ini定義の最大サイズ超過
            throw new RuntimeException('ファイルサイズが大きすぎます', 400);
          default:
            throw new RuntimeException('その他のエラーが発生しました', 500);
         }

        // 画像・動画をバイナリデータにする．
        // file_get_contents — ファイルの内容を全て文字列に読み込む
          
        $raw_data = file_get_contents($_FILES['upfile']['tmp_name']);

        //拡張子を見る
        $tmp = pathinfo($_FILES['upfile']['name']);
            
        // var_dump($tmp);
        // $tmp配列の中のextensionは、ファイル名を返す
        $extension = $tmp['extension'];
          
        if ($extension === 'jpg' || $extension === 'jpeg' || $extension === 'JPG' || $extension === 'JPEG') {
          $extension = 'jpeg';
        } elseif ($extension === 'png' || $extension === 'PNG') {
          $extension = 'png';
        } elseif ($extension === 'gif' || $extension === 'GIF') {
          $extension = 'gif';
        } elseif ($extension === 'mp4' || $extension === 'MP4') {
          $extension = 'mp4';
        } else {
          echo '非対応ファイルです．<br/>';
          echo('<a href="index.php">戻る</a><br/>');
          exit(1);
        }

        //DBに格納するファイルネーム設定
        //サーバー側の一時的なファイルネームと取得時刻を結合した文字列にsha256をかける．
        $date = getdate();
        $fname = $_FILES['upfile']['tmp_name'].$date['year'].$date['mon'].$date['mday'].$date['hours'].$date['minutes'].$date['seconds'];
            
        $fname = hash('sha256', $fname);
        
        $sql = "INSERT INTO media(fname, extension, raw_data, name) VALUES (:fname, :extension, :raw_data, :name);";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':fname', $fname, PDO::PARAM_STR);
        $stmt->bindValue(':extension', $extension, PDO::PARAM_STR);
        $stmt->bindValue(':raw_data', $raw_data, PDO::PARAM_STR);
        $stmt->bindValue(':name', $upload_user_name, PDO::PARAM_STR);
      
        $stmt->execute();
      }
    } else {
      if (isset($_FILES['upfile']['error']) && is_int($_FILES['upfile']['error']) && $_FILES['upfile']['name'] !== '') {
      //エラーチェック
      switch ($_FILES['upfile']['error']) {
        case UPLOAD_ERR_OK: // OK
          break;
        case UPLOAD_ERR_NO_FILE:   // 未選択だったら例外を投げる  throw new Exception(‘例外メッセージ’);
          throw new RuntimeException('ファイルが選択されていません', 400);
        case UPLOAD_ERR_INI_SIZE:  // php.ini定義の最大サイズ超過
          throw new RuntimeException('ファイルサイズが大きすぎます', 400);
        default:
          throw new RuntimeException('その他のエラーが発生しました', 500);
       }

      // 画像・動画をバイナリデータにする．
      // file_get_contents — ファイルの内容を全て文字列に読み込む
          
      $raw_data = file_get_contents($_FILES['upfile']['tmp_name']);

      //拡張子を見る
      $tmp = pathinfo($_FILES['upfile']['name']);
            
      // var_dump($tmp);
      // $tmp配列の中のextensionは、ファイル名を返す
      $extension = $tmp['extension'];
          
      if ($extension === 'jpg' || $extension === 'jpeg' || $extension === 'JPG' || $extension === 'JPEG') {
        $extension = 'jpeg';
      } elseif ($extension === 'png' || $extension === 'PNG') {
        $extension = 'png';
      } elseif ($extension === 'gif' || $extension === 'GIF') {
        $extension = 'gif';
      } elseif ($extension === 'mp4' || $extension === 'MP4') {
        $extension = 'mp4';
      } else {
        echo '非対応ファイルです．<br/>';
        echo('<a href="index.php">戻る</a><br/>');
        exit(1);
      }

      //DBに格納するファイルネーム設定
      //サーバー側の一時的なファイルネームと取得時刻を結合した文字列にsha256をかける．
      $date = getdate();
      $fname = $_FILES['upfile']['tmp_name'].$date['year'].$date['mon'].$date['mday'].$date['hours'].$date['minutes'].$date['seconds'];
            
      $fname = hash('sha256', $fname);

      //画像・動画をDBに格納．
      $sql = 'UPDATE media SET fname = :fname, extension = :extension, raw_data = :raw_data, name = :name  WHERE name =' ."'". $upload_user_name."'";
      
      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':fname', $fname, PDO::PARAM_STR);
      $stmt->bindValue(':extension', $extension, PDO::PARAM_STR);
      $stmt->bindValue(':raw_data', $raw_data, PDO::PARAM_STR);
      $stmt->bindValue(':name', $upload_user_name, PDO::PARAM_STR);
     
      $stmt->execute();
    }
    }
  } catch (PDOException $e) {
      echo('<p>500 Inertnal Server Error</p>');
      exit($e->getMessage());
    }
  }
  
  public function media_up($upload_user_name){
    $pdo = connect();
    //DBから取得して表示する．
    $sql = 'SELECT * FROM media WHERE name =' .'"'. $upload_user_name.'"';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      if ( $row['name'] == $upload_user_name) {
      
      //動画と画像で場合分け
      $target = $row['fname'];

      if ($row['extension'] == 'mp4') {
        echo("<video src=\"import_media.php?target=$target\" width=\"426\" height=\"240\" controls></video>");
      } elseif ($row['extension'] == 'jpeg' || $row['extension'] == 'png' || $row['extension'] == 'gif') {
        echo("<img src='media/import_media.php?target=$target'>");
      }
        echo('<br/><br/>');
      }
    }
  }
  
  public function return_user_data($upload_user_name){
    $pdo = connect();
    $st = $pdo->query("SELECT * FROM favorite WHERE username =" ."'". $upload_user_name."'");
    $userdata = $st->fetchAll();
    return $userdata;
  }
  
  public function review_media_up($upload_user_name){
    $pdo = connect();
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
  }
  
  public function sidebar_media_up($upload_user_name){
    $pdo = connect();
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
  }
}
?>
