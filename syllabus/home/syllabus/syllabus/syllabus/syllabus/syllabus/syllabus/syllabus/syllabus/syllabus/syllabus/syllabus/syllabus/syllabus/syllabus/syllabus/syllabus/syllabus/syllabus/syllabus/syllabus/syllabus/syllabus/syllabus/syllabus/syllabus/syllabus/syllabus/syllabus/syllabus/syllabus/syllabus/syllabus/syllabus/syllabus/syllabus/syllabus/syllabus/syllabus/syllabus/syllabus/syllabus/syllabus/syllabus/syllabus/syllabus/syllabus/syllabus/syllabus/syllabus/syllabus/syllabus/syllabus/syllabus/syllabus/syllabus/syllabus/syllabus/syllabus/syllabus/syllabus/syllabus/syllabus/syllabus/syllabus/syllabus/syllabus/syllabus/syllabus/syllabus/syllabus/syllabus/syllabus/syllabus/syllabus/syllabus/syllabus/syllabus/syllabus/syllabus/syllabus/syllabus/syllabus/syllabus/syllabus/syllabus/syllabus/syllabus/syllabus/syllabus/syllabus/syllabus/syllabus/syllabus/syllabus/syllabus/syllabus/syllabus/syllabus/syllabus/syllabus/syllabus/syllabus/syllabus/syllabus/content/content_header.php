<?php

$pot = false;

  if (isset($_SESSION["NAME"])) {
    $upload_user_name = $_SESSION["NAME"];
    $pdo = connect();
    $st = $pdo->query("SELECT * FROM favorite WHERE username =" ."'". $upload_user_name."'");
    $userdata = $st->fetchAll();
    $pot = findLikeclass($userdata, $syllabuscontent);
  } else {
    $pot = false;
  }

?>

<div class="LessonDetail__header">
  <div class="LessonDetail__title">
    <div class="pull-left">
      <div class="LessonDetail__item">
        <h1 class="lecture-title"><?php echo $syllabuscontent['lecture'] ?></h1>
      </div>
    </div>
    <div class="pull-down">
      <ul class="LessonDetail__nav-list">
        <li class="LessonDetail__nav">
          <a class="btn btn-primary btn-go" href="review.php?name=<?php echo $syllabuscontent['lecture'] ?>">レビューを書く</a>
        </li>
        <?php if ($pot == true){ ?>
        <li class="LessonDetail__nav">
          <div id="Favorite__button--12599">
            <input name="btn-like" type="submit" value="お気に入り登録済み" class="btn btn-warning btn-like">
          </div>
        </li>
        <?php } else { ?>
        <li class="LessonDetail__nav">
          <div id="Favorite__button--12599">
            <form method="post" action="content/like_class.php">
              <input name="btn-like" type="submit" value="お気に入り追加" class="btn btn-warning btn-like">
              <input type=hidden value="<?php echo $syllabuscontent['lecture'] ?>" name="classname">
            </form>
          </div>
        </li>
        <?php } ?>

      </ul>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="LessonDetail__info">
    <div class="table-responsive">
      <table class="table table-title">
        <tbody>
          <tr class="tr-table">
            <th>年度</th>
            <th>学部</th>
            <th>学科</th>
            <th>講師</th>
            <th>学期</th>
            <th>コマ</th>
          </tr>
          <tr>
            <td>2019</td>
            <td>経営学部</td>
            <td>総合系科目(2016~)</td>
            <td><?php echo $syllabuscontent['teacher'] ?><br></td>
            <td>春</td>
            <td><?php echo $syllabuscontent['day'] ?>・<?php echo $syllabuscontent['coma'] ?><br></td>
          </tr>
        </tbody>
      </table>
      <div class="tag-list">
        <ul>
          <li>楽単</li>
          <li>先生が面白い</li>
          <li>重要</li>
        </ul>
      </div>
    </div>
  </div>
</div>
