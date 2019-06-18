<?php
  $st = $pdo->query("SELECT * FROM post");
  $syllabuspost = $st->fetchAll();
  $postcontent = Menu::findByPost($syllabuscontent['lecture']);
?>

<div class="Syllabus__list review">
  <div class="row">
    <div class="col-xs-12">
      <table class="table table-striped">
        <?php if(!isset($_SESSION["NAME"])) { ?>
        <a href="webroot/login.php">
          <img src="images/review.jpg" class="review">
        </a>
        <?php } else  { ?>
        <tbody>
          <?php foreach ($postcontent as $g) { ?>
          <tr>
            <td class="td-review">
              <div class="row">
                <div class="col-xs-12 col-sm-6 reprep">
                  <div class="user_box_front">
                    <?php $upload_user_name = $g['username']; 
                    Media::review_media_up($upload_user_name) ?>
                    <div class="body">
                      <div class="bold"><?php echo $g['username'] ?></div>
                      <p class="small">
                        4/28 13:17:31
                      </p>
                      <ul class="Syllabus__rev">
                        <li id="learn<?php echo $g['no'] ?>">学びの大きさ<br><?php echo $g['resultlearn'] ?>
                        </li>
                        <li id="easy<?php echo $g['no'] ?>">授業の簡単さ<br><?php echo $g['resulteasylearn'] ?>
                        </li>
                        <li id="take<?php echo $g['no'] ?>">単位の取りやすさ<br><?php echo $g['resulttakeclass'] ?>
                        </li>
                      </ul>
                      <p class="small2"><?php echo $g['resultcomment'] ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <?php } ?>
        </tbody>
        <?php } ?>
      </table>
    </div>
  </div>
</div>

<?php foreach ($postcontent as $g) { ?>
<script type="text/javascript">
  var Syllabus__rev_learn = document.getElementById("learn<?php echo $g['no'] ?>");

  for (i = 0; i < <?php echo $g['resultlearn']?>; i++) {
    var span = document.createElement('span');
    span.innerHTML = "★";
    Syllabus__rev_learn.appendChild(span);
  }

  var Syllabus__rev_easylearn = document.getElementById("easy<?php echo $g['no'] ?>");

  for (i = 0; i < <?php echo $g['resulteasylearn']?>; i++) {
    var span = document.createElement('span');
    span.innerHTML = "★";
    Syllabus__rev_easylearn.appendChild(span);
  }

  var Syllabus__rev_takelearn = document.getElementById("take<?php echo $g['no'] ?>");

  for (i = 0; i < <?php echo $g['resulttakeclass']?>; i++) {
    var span = document.createElement('span');
    span.innerHTML = "★";
    Syllabus__rev_takelearn.appendChild(span);
  }

</script>
<?php } ?>

<p class="alert alert-success">情報は最新ではない可能性があります。正確な情報はCampusmateを確認してください。</p>
