<?php
  require 'common.php';
  require 'menu.php';
?>

<html>
<?php require '../head.php'; ?>

<body>
  <?php require 'header.php' ?>
  <div class="wrap">
    <?php echo Menu::placeClassinfo(); ?>
  </div>
  <?php require 'footer.php' ?>
</body>

</html>
