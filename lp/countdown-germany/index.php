<?php
  if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    ini_set('display_errors', 1);
    define('URL', 'http://localhost:8888/vips-web');
  } else {
    ini_set('display_errors', 0);
    define('URL', 'https://www.vipstarcoin.jp');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<!--
        ／⌒ヽ
⊂二二二（　＾ω＾）二⊃
       |   /     ﾌﾞｰﾝ
      （ ヽノ
       ﾉ>ノ　
  三  レﾚ
-->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117099829-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-117099829-1');
  </script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VIPSTARCOIN COMING SOON</title>

  <meta property="og:title" content="VIPSTARCOIN COMING SOON">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo URL; ?>/img/og-image.jpg">
  <meta property="og:site_name" content="VIPSTARCOIN">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Favicons -->
  <link rel="shortcut icon" href="<?php echo URL; ?>/img/favicon.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo URL; ?>/img/apple-touch-icon.png">

  <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <meta property="og:url" content="<?php echo URL; ?>/lp/countdown-germany/">
  <meta name="description"
        content="VIPSTARCOIN COMING SOON">
  <meta name="keywords" content="VIPSTAR,VIPSTARCOIN,VIPS,VIP,ニュー速VIP,仮想通貨">
  <meta property="og:description"
        content="VIPSTARCOIN COMING SOON">
</head>

<body>
  <img src="./img/8.jpg"></img>

  <div class="background">
    <div class="background-filter">
      <p class="text-top"><a href="<?php echo URL; ?>">VIPSTARCOIN</a></p>
      <p class="text-bottom">COMING SOON</p>

      <div class="countdown countdown-container container"
           data-start="<?php echo strtotime('2018-08-06 21:00:00'); ?>"
           data-end="<?php echo strtotime('2018-08-13 15:00:00'); ?>"
           data-now="<?php echo time(); ?>"
           data-border-color="rgba(255, 255, 255, .8)">
        <div class="clock row">
          <div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
            <div class="wrap">
              <div class="inner">
                <div id="canvas-days" class="clock-canvas"></div>
                <div class="text">
                  <p class="val">0</p>
                  <p class="type-days type-time">DAYS</p>
                </div><!-- /.text -->
              </div><!-- /.inner -->
            </div><!-- /.wrap -->
          </div><!-- /.clock-item -->

          <div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
            <div class="wrap">
              <div class="inner">
                <div id="canvas-hours" class="clock-canvas"></div>
                <div class="text">
                  <p class="val">0</p>
                  <p class="type-hours type-time">HOURS</p>
                </div><!-- /.text -->
              </div><!-- /.inner -->
            </div><!-- /.wrap -->
          </div><!-- /.clock-item -->

          <div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
            <div class="wrap">
              <div class="inner">
                <div id="canvas-minutes" class="clock-canvas"></div>
                <div class="text">
                  <p class="val">0</p>
                  <p class="type-minutes type-time">MINUTES</p>
                </div><!-- /.text -->
              </div><!-- /.inner -->
            </div><!-- /.wrap -->
          </div><!-- /.clock-item -->

          <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
            <div class="wrap">
              <div class="inner">
                <div id="canvas-seconds" class="clock-canvas"></div>
                <div class="text">
                  <p class="val">0</p>
                  <p class="type-seconds type-time">SECONDS</p>
                </div><!-- /.text -->
              </div><!-- /.inner -->
            </div><!-- /.wrap -->
          </div><!-- /.clock-item -->
        </div><!-- /.clock -->
      </div><!-- /.countdown-wrapper -->
    </div><!-- /.countdown-wrapper -->
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="js/kinetic.js"></script>
  <script type="text/javascript" src="js/jquery.final-countdown.min.js"></script>
  <script type="text/javascript">
    $('.countdown').final_countdown({}, function() {
      // location.reload();
    });

    setInterval("imgTimer()", 5000);

    function imgTimer() {
      var random = Math.floor(Math.random() * 15);
      $('img').attr('src', './img/' + random + '.jpg');
    }
  </script>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab60eab9e6f635f"></script>
</body>
</html>
