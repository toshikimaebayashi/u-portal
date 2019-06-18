<?php 
//①データ取得ロジックを呼び出す
include_once('menu.php');
$userData = Menu::getUserData($_GET);
?>

<form method="get"><input name="utf8" type="hidden" value="✓">
  <div class="row">
    <div class="form-group col-sm-6 col-xs-12">
      <input type="text" name="name" id="name" placeholder="授業名/教授名" class="form-control" value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-sm-3 col-xs-6">
      <select name="year" id="year" class="form-control">
        <option value="" <?php echo empty($_GET['year']) ? 'selected' : '' ?>>年度</option>
        <option value="2017" <?php echo isset($_GET['year']) && $_GET['year'] == '2017' ? 'selected' : '' ?>>2017年</option>
        <option value="2018" <?php echo isset($_GET['year']) && $_GET['year'] == '2018' ? 'selected' : '' ?>>2018年</option>
      </select>
    </div>
    <div class="form-group col-sm-3 col-xs-6">
      <select name="campus" id="campus" class="form-control">
        <option value="" <?php echo empty($_GET['campus']) ? 'selected' : '' ?>>キャンパス</option>
        <option value="駿河台" <?php echo isset($_GET['campus']) && $_GET['campus'] == '駿河台' ? 'selected' : '' ?>>駿河台</option>
        <option value="和泉" <?php echo isset($_GET['campus']) && $_GET['campus'] == '和泉' ? 'selected' : '' ?>>和泉</option>
        <option value="その他" <?php echo isset($_GET['campus']) && $_GET['campus'] == 'その他' ? 'selected' : '' ?>>その他</option>
      </select>
    </div>
    <div class="form-group col-sm-3 col-xs-6">
      <select name="faculty_id" id="faculty_id" class="form-control">
        <option value="" <?php echo empty($_GET['faculty_id']) ? 'selected' : '' ?>>学部</option>
        <option value="文学部" <?php echo isset($_GET['faculty_id']) && $_GET['faculty_id'] == '文学部' ? 'selected' : '' ?>>文学部</option>
        <option value="経営学部" <?php echo isset($_GET['faculty_id']) && $_GET['faculty_id'] == '経営学部' ? 'selected' : '' ?>>経営学部</option>
        <option value="政治経済学部" <?php echo isset($_GET['faculty_id']) && $_GET['faculty_id'] == '政治経済学部' ? 'selected' : '' ?>>政治経済学部</option>
        <option value="商学部" <?php echo isset($_GET['faculty_id']) && $_GET['faculty_id'] == '商学部' ? 'selected' : '' ?>>商学部</option>
        <option value="情報コミュニケーション学部" <?php echo isset($_GET['faculty_id']) && $_GET['faculty_id'] == '情報コミュニケーション学部' ? 'selected' : '' ?>>情報コミュニケーション学部</option>
        <option value="法学部" <?php echo isset($_GET['faculty_id']) && $_GET['faculty_id'] == '法学部' ? 'selected' : '' ?>>法学部</option>
        <option value="総合数理学部" <?php echo isset($_GET['faculty_id']) && $_GET['faculty_id'] == '総合数理学部' ? 'selected' : '' ?>>総合数理学部</option>
        <option value="国際日本学部" <?php echo isset($_GET['faculty_id']) && $_GET['faculty_id'] == '国際日本学部' ? 'selected' : '' ?>>国際日本学部</option>
      </select>
    </div>
    <div class="form-group col-sm-3 col-xs-6">
      <select name="coma" id="coma" class="form-control">
        <option value="" <?php echo empty($_GET['coma']) ? 'selected' : '' ?>>コマ</option>
        <option value="1" <?php echo isset($_GET['coma']) && $_GET['coma'] == '1' ? 'selected' : '' ?>>1</option>
        <option value="2" <?php echo isset($_GET['coma']) && $_GET['coma'] == '2' ? 'selected' : '' ?>>2</option>
        <option value="3" <?php echo isset($_GET['coma']) && $_GET['coma'] == '3' ? 'selected' : '' ?>>3</option>
        <option value="4" <?php echo isset($_GET['coma']) && $_GET['coma'] == '4' ? 'selected' : '' ?>>4</option>
        <option value="5" <?php echo isset($_GET['coma']) && $_GET['coma'] == '5' ? 'selected' : '' ?>>5</option>
        <option value="6" <?php echo isset($_GET['coma']) && $_GET['coma'] == '6' ? 'selected' : '' ?>>6</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-sm-3 col-xs-4">
      <select name="term" id="term" class="form-control">
        <option value="" <?php echo empty($_GET['term']) ? 'selected' : '' ?>>学期</option>
        <option value="春学期" <?php echo isset($_GET['term']) && $_GET['term'] == '春学期' ? 'selected' : '' ?>>春学期</option>
        <option value="2" <?php echo isset($_GET['秋学期']) && $_GET['秋学期'] == '2' ? 'selected' : '' ?>>秋学期</option>
        <option value="3" <?php echo isset($_GET['通年']) && $_GET['通年'] == '3' ? 'selected' : '' ?>>通年</option>
        <option value="4" <?php echo isset($_GET['その他']) && $_GET['その他'] == '4' ? 'selected' : '' ?>>その他</option>
      </select>
    </div>
    <div class="form-group col-sm-3 col-xs-4">
      <select name="day" id="day" class="form-control">
        <option value="" <?php echo empty($_GET['day']) ? 'selected' : '' ?>>曜日</option>
        <option value="月" <?php echo isset($_GET['day']) && $_GET['day'] == "月" ? 'selected' : '' ?>>月</option>
        <option value="火" <?php echo isset($_GET['day']) && $_GET['day'] == "火" ? 'selected' : '' ?>>火</option>
        <option value="水" <?php echo isset($_GET['day']) && $_GET['day'] == "水" ? 'selected' : '' ?>>水</option>
        <option value="木" <?php echo isset($_GET['day']) && $_GET['day'] == "木" ? 'selected' : '' ?>>木</option>
        <option value="金" <?php echo isset($_GET['day']) && $_GET['day'] == "金" ? 'selected' : '' ?>>金</option>
        <option value="土" <?php echo isset($_GET['day']) && $_GET['day'] == "土" ? 'selected' : '' ?>>土</option>
      </select>
    </div>
    <!--<div class="form-group col-sm-3 col-xs-12">
              <select name="coma" id="coma" class="form-control">
                <option value="" <?php echo empty($_GET['coma']) ? 'selected' : '' ?>>コマ</option>
                <option value="1" <?php echo isset($_GET['coma']) && $_GET['coma'] == '1' ? 'selected' : '' ?>>1</option>
                <option value="2" <?php echo isset($_GET['coma']) && $_GET['coma'] == '2' ? 'selected' : '' ?>>2</option>
                <option value="3" <?php echo isset($_GET['coma']) && $_GET['coma'] == '3' ? 'selected' : '' ?>>3</option>
                <option value="4" <?php echo isset($_GET['coma']) && $_GET['coma'] == '4' ? 'selected' : '' ?>>4</option>
                <option value="5" <?php echo isset($_GET['coma']) && $_GET['coma'] == '5' ? 'selected' : '' ?>>5</option>
                <option value="6" <?php echo isset($_GET['coma']) && $_GET['coma'] == '6' ? 'selected' : '' ?>>6</option>
              </select>
            </div>-->
  </div>
  <div class="pull-left">
    <div class="form-group text-right">
      <div class="checkbox">
        <label><input type="checkbox" name="have_result" id="have_result" value="true">レビューのある授業だけ</label>
      </div>
    </div>
  </div>
  <div class="pull-right"><span class="clear-btn">検索クリア</span></div>
  <div class="pull-right">
    <div class="form-group"><button type="submit" name="search" class="btn btn-success btn-go">検索</button></div>
  </div>
  <div class="clearfix"></div>
</form>
