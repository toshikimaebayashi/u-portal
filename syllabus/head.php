<?php
$url = $_SERVER['SCRIPT_NAME'];
 ?>

<head>
  <meta charset="UTF-8">
  <title>U-portal 一橋大生のためのシラバスアプリ</title>
  <link href="https://fonts.googleapis.com/css?family=Bitter:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link href="css/footer.css" rel="stylesheet">
  <link href="css/header.css" rel="stylesheet">

  <?php if($url == "/PHPlesson2/syllabus/index.php"){ ?>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="js/slick.js"></script>
  <link rel="stylesheet" type="text/css" href="css/slick.css" media="screen" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/front.css" rel="stylesheet">
  <script type="text/javascript">
    $(function() {
      $('.slick-box').slick({
        dots: true, // スライダー下部に表示される、ドット状のページネーションです
        infinite: true, // 無限ループ
        speed: 600, // 切り替わりのスピード
        slidesToShow: 3, //通常 1024px以上の領域では4画像表示
        slidesToScroll: 3,
        responsive: [{
            breakpoint: 1024,
            settings: { //601px～1024pxでは3画像表示
              slidesToShow: 3,
              slidesToScroll: 3,
            }
          },
          {
            breakpoint: 600,
            settings: { //481px～600pxでは2画像表示
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: { //480px以下では1画像表示
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });

  </script>
  <script type="text/javascript">

  </script>

  <?php } else if($url == "/PHPlesson2/syllabus/content.php"){ ?>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/content.css" rel="stylesheet">
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="js/slick_others.js"></script>
  <link rel="stylesheet" type="text/css" href="css/slick.css" media="screen" />
  <script type="text/javascript">
    $(function() {
      $('.slick-box').slick({
        dots: true, // スライダー下部に表示される、ドット状のページネーションです
        infinite: true, // 無限ループ
        speed: 600, // 切り替わりのスピード
        slidesToShow: 3, //通常 1024px以上の領域では4画像表示
        slidesToScroll: 3,
        responsive: [{
            breakpoint: 1024,
            settings: { //601px～1024pxでは3画像表示
              slidesToShow: 3,
              slidesToScroll: 3,
            }
          },
          {
            breakpoint: 600,
            settings: { //481px～600pxでは2画像表示
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: { //480px以下では1画像表示
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });

  </script>

  <?php } else if($url == "/PHPlesson2/syllabus/review.php"){?>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/content.css" rel="stylesheet">
  <link href="css/review.css" rel="stylesheet">

  <?php } else if($url == "/PHPlesson2/syllabus/profile.php"){?>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/profile.css" rel="stylesheet">

  <?php } else if($url == "/PHPlesson2/syllabus/t_search.php"){?>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/search.css" rel="stylesheet">
  <link href="css/sidebar.css" rel="stylesheet">

  <?php } else if($url == "/PHPlesson2/syllabus/webroot/logout.php"){?>
  <link href="css/login.css" rel="stylesheet">

  <?php } else if($url == "/PHPlesson2/syllabus/webroot/login.php"){?>
  <link href="css/login.css" rel="stylesheet">

  <?php } else if($url == "/PHPlesson2/syllabus/webroot/SignUp.php"){?>
  <link href="css/login.css" rel="stylesheet">

  <?php } else if($url == "/PHPlesson2/syllabus/webroot/main.php"){?>
  <link href="css/login.css" rel="stylesheet">

  <?php } else if($url == "/PHPlesson2/syllabus/webroot/Login.php?"){?>
  <link href="css/login.css" rel="stylesheet">

  <?php } else if($url == "/PHPlesson2/syllabus/admin/make_page.php"){?>
  <link href="../css/header.css" rel="stylesheet">
  <link href="../css/footer.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <?php } ?>

</head>
