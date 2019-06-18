<?php 
//①データ取得ロジックを呼び出す
include_once('menu.php');
$userData = Menu::getUserData($_GET);
?>

<div class="col-xs-6 col-xs-offset-3 form-pc">
  <?php //③取得データを表示する ?>
  <?php if(isset($userData) && count($userData)): ?>
  <p class="alert alert-success"><?php echo count($userData) ?>件見つかりました。</p>
  <table class="table">
    <thead>
      <tr>
        <th>授業名</th>
        <th>年度</th>
        <th>学部</th>
        <th>講師</th>
        <th>学期</th>
        <th>コマ</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($userData as $row): ?>
      <tr>
        <td><a href="content.php?name=<?php echo $row['lecture'] ?>"><?php echo htmlspecialchars($row['lecture']) ?></a></td>
        <td><?php echo htmlspecialchars($row['year'] ) ?></td>
        <td><?php echo htmlspecialchars($row['faculty_id']) ?></td>
        <td><?php echo htmlspecialchars($row['teacher']) ?></td>
        <td><?php echo htmlspecialchars($row['term']) ?></td>
        <td><?php echo htmlspecialchars($row['day']) ?>・<?php echo htmlspecialchars($row['coma']) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>

  </table>
  <?php else: ?>
  <p class="alert alert-danger">検索対象は見つかりませんでした。</p>
  <?php endif; ?>
</div>

<div class="col-xs-6 col-xs-offset-3 form-sp">
  <?php //③取得データを表示する ?>
  <?php if(isset($userData) && count($userData)): ?>
  <p class="alert alert-success"><?php echo count($userData) ?>件見つかりました。</p>
  <table class="table">
    <thead>
      <tr>
        <th>授業名</th>
        <th>講師</th>
        <th>学期</th>
        <th>コマ</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($userData as $row): ?>
      <tr>
        <td><a href="content.php?name=<?php echo $row['lecture'] ?>"><?php echo htmlspecialchars($row['lecture']) ?></a></td>
        <td><?php echo htmlspecialchars($row['teacher']) ?></td>
        <td><?php echo htmlspecialchars($row['term']) ?></td>
        <td><?php echo htmlspecialchars($row['day']) ?>・<?php echo htmlspecialchars($row['coma']) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>

  </table>
  <?php else: ?>
  <p class="alert alert-danger">検索対象は見つかりませんでした。</p>
  <?php endif; ?>
</div>
