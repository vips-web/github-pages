<?php $lang = 'etc'; ?>
<?php
  if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    ini_set('display_errors', 1);
    define('URL', 'http://localhost:8888/vips-web');
  } else {
    ini_set('display_errors', 0);
    define('URL', 'https://www.vipstarcoin.jp');
  }

  $cards = [
    [
      'image' => 'nemchill-1.jpg',
      'name' => 'nemchill',
      'twitter' => 'nemchill',
      'vips' => 'VKfCtoBb227zyo33pT3w3HqPYoyCM94nEh',
    ],
    [
      'image' => 'nemchill-2.jpg',
      'name' => 'nemchill',
      'twitter' => 'nemchill',
      'vips' => 'VKfCtoBb227zyo33pT3w3HqPYoyCM94nEh',
    ],
    [
      'image' => 'nemchill-3.jpg',
      'name' => 'nemchill',
      'twitter' => 'nemchill',
      'vips' => 'VKfCtoBb227zyo33pT3w3HqPYoyCM94nEh',
    ],
    [
      'image' => 'nemchill-4.jpg',
      'name' => 'nemchill',
      'twitter' => 'nemchill',
      'vips' => 'VKfCtoBb227zyo33pT3w3HqPYoyCM94nEh',
    ],
    [
      'image' => 'akitaka_ono-1.jpg',
      'name' => 'Akitaka ONO',
      'twitter' => 'ONO_Keyboard',
      'vips' => 'VVRk6QLVQzxJaJnB7DbbvfABRQfRCXYxST',
    ],
    [
      'image' => 'akitaka_ono-2.jpg',
      'name' => 'Akitaka ONO',
      'twitter' => 'ONO_Keyboard',
      'vips' => 'VVRk6QLVQzxJaJnB7DbbvfABRQfRCXYxST',
    ],
    [
      'image' => 'akitaka_ono-3.jpg',
      'name' => 'Akitaka ONO',
      'twitter' => 'ONO_Keyboard',
      'vips' => 'VVRk6QLVQzxJaJnB7DbbvfABRQfRCXYxST',
    ],
    [
      'image' => 'akitaka_ono-4.jpg',
      'name' => 'Akitaka ONO',
      'twitter' => 'ONO_Keyboard',
      'vips' => 'VVRk6QLVQzxJaJnB7DbbvfABRQfRCXYxST',
    ],
    [
      'image' => 'rockon7-1.jpg',
      'name' => 'Rockon7',
      'twitter' => '',
      'vips' => 'VEANCfDkT5oepAyPwtrJnb55nRJXuCpNVF',
    ],
    [
      'image' => 'rockon7-2.jpg',
      'name' => 'Rockon7',
      'twitter' => '',
      'vips' => 'VEANCfDkT5oepAyPwtrJnb55nRJXuCpNVF',
    ],
    [
      'image' => 'rockon7-3.jpg',
      'name' => 'Rockon7',
      'twitter' => '',
      'vips' => 'VEANCfDkT5oepAyPwtrJnb55nRJXuCpNVF',
    ],
    [
      'image' => 'rockon7-4.png',
      'name' => 'Rockon7',
      'twitter' => '',
      'vips' => 'VEANCfDkT5oepAyPwtrJnb55nRJXuCpNVF',
    ],
    [
      'image' => 'tetukuzu-1.png',
      'name' => 'tetukuzu',
      'twitter' => '',
      'vips' => 'VGJLfCkJF1YRXu4CmjFjYSysYY2GXSEyuK',
    ],
    [
      'image' => 'tetukuzu-2.png',
      'name' => 'tetukuzu',
      'twitter' => '',
      'vips' => 'VGJLfCkJF1YRXu4CmjFjYSysYY2GXSEyuK',
    ],
    [
      'image' => 'tetukuzu-3.png',
      'name' => 'tetukuzu',
      'twitter' => '',
      'vips' => 'VGJLfCkJF1YRXu4CmjFjYSysYY2GXSEyuK',
    ],
    [
      'image' => 'uiii-1.png',
      'name' => 'uiii',
      'twitter' => '',
      'vips' => 'VSYXPQeUhVZaKFBssL3RvEjDwvF7Qbdvkw',
    ],
    [
      'image' => 'tno-1.png',
      'name' => 'TNO',
      'twitter' => '',
      'vips' => 'VTZVCg1VNuFJUmo5JWQAvtsP8Kr27AULgo',
    ],
  ];
  shuffle($cards);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117099829-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-117099829-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VIPSTARCOIN TIPPING</title>

    <meta property="og:title" content="VIPSTARCOIN TIPPING">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo URL; ?>/img/og-image.jpg">
    <meta property="og:site_name" content="VIPSTARCOIN">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo URL; ?>/img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo URL; ?>/img/apple-touch-icon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
          crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <link href="./lightbox/lightbox.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css"  href="<?php echo URL; ?>/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="./tipping.css">
    <meta property="og:url" content="<?php echo URL; ?>/lp/tipping/">
    <meta name="description"
          content="You can view masterpieces of our creators in VIPS community. You can experience instant tippping to creatore of your choice with one click.">
    <meta name="keywords" content="VIPSTAR,VIPSTARCOIN,VIPS,VIP,tipping">
    <meta property="og:description"
          content="You can view masterpieces of our creators in VIPS community. You can experience instant tippping to creatore of your choice with one click.">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="nav">
      <nav class="navbar navbar-custom">
        <div class="container">
          <div class="navbar-header">
            <span class="navbar-brand">VIPSTARCOIN TIPPING</span>
          </div>
          <div class="navbar-back">
            <a class="navbar-brand" href="<?php echo URL; ?>/en/"><i class="fas fa-home"></i></a>
          </div>
        </div>
      </nav>
    </div>

    <div id="page-supporter">
      <div class="card-columns justify-content-center">
        <?php foreach ($cards as $card): ?>
          <div class="card">
            <a class="example-image-link" href="./img/<?php echo $card['image']; ?>" data-lightbox="example-set">
              <img class="card-img-top" src="./img/<?php echo $card['image']; ?>" alt="">
            </a>
  
            <div class="card-body">
              <p class="card-title">
                <?php if (!empty($card['twitter'])): ?>
                  <a href="https://twitter.com/<?php echo $card['twitter']; ?>" target="_blank" class="link-twitter">
                    <?php echo $card['name']; ?>
                    <i class="fab fa-twitter-square "></i>
                  </a>
                <?php else: ?>
                  <?php echo $card['name']; ?>
                <?php endif; ?>
              </p>
              <p class="card-text card-address">
                <small class="text-muted">VIPS address</small><br>
                <a href="vipstarcoin:<?php echo $card['vips']; ?>?amount=100">
                  <span class="badge badge-pill badge-warning"><?php echo $card['vips']; ?></span>
                </a>
                <a href="http://explorer.vipstarcoin.jp/address/<?php echo $card['vips']; ?>" target="_blank">
                  <i class="fas fa-search"></i>
                </a>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div id="footer">
      <div class="container text-center">
        <div class="fnav">
          <div class="addthis_inline_share_toolbox"></div>
          <p>Copyright &copy; 2018 VIPSTAR. All Rights Reserved.</p>
        </div>
        
        
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
          integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
          crossorigin="anonymous"></script>
    <script src="./lightbox/lightbox.min.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab60eab9e6f635f"></script>
  </body>
</html>
