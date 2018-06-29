<?php $lang = 'etc'; ?>
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
<html lang="ja">
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
    <title>VIPSTARCOIN SUPPORTERS</title>

    <meta property="og:title" content="VIPSTARCOIN SUPPORTERS">
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

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css"  href="<?php echo URL; ?>/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/css/supporter.css">
    <meta property="og:url" content="<?php echo URL; ?>/supporter/">
    <meta name="description"
          content="仮想通貨VIPSTARCOIN(VIPS)のオフィシャルサポーターの一覧です。">
    <meta name="keywords" content="VIPSTAR,VIPSTARCOIN,VIPS,VIP,ニュー速VIP,仮想通貨">
    <meta property="og:description"
          content="仮想通貨VIPSTARCOIN(VIPS)のオフィシャルサポーターの一覧です。">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="nav">
      <nav class="navbar navbar-custom">
        <div class="container">
          <div class="navbar-header">
            <span class="navbar-brand">VIPSTARCOIN SUPPORTERS</span>
          </div>
          <div class="navbar-back">
            <a class="navbar-brand" href="<?php echo URL; ?>"><i class="fas fa-home"></i></a>
          </div>
        </div>
      </nav>
    </div>

    <div id="page-supporter">
      <div class="card-deck justify-content-center">
        <div class="card">
          <img class="card-img-top" src="<?php echo URL; ?>/img/supporter/minori.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">白塗りアーティスト・minori</h5>
            <p class="card-text">
              現在白塗りアーティストとして、自然、花言葉、そして様々な国の文化との融合をテーマにした衣装および写真作品を製作。<br>
              2013年より海外の様々なイベントにスペシャルゲストとして招待され、2015年ホノルル美術館に衣装と写真が収蔵される。2017年その活動がBBCによって全世界に報道される。<br>
              <br>
              TokyoFashion.comメイクアップ動画<br>
              <a href="https://youtu.be/fWFD5RqC4RM" target="_blank">https://youtu.be/fWFD5RqC4RM</a><br>
              <br>
              BBCインタビュー<br>
              <a href="https://www.bbc.com/japanese/features-and-analysis-41735009" target="_blank">https://www.bbc.com/japanese/features-and-analysis-41735009</a><br>
              <br>
              7月半ばに発売されるkindleブックにも早速QRコード導入。
            </p>
            <p class="card-text card-address">
              <small class="text-muted">VIPSアドレス</small>
              <a href="vipstarcoin:VLD2pHCmVNG3GgQVKUbNRNsabCT3wfx1Ec?amount=100">
                <span class="badge badge-pill badge-warning">VLD2pHCmVNG3GgQVKUbNRNsabCT3wfx1Ec</span>
              </a>
            </p>
            <p class="card-text">
              <a href="https://twitter.com/cute_minori" target="_blank" class="link-twitter">
                <i class="fab fa-twitter-square fa-3x"></i>
              </a>
              <a href="https://www.instagram.com/minori00mon/" target="_blank" class="link-instagram">
                <i class="fab fa-instagram fa-3x"></i>
              </a>
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <a href="https://minori.co/" target="_blank">
              <li class="list-group-item card-hp">https://minori.co/<i class="fas fa-external-link-alt"></i></li>
            </a>
          </ul>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo URL; ?>/img/supporter/Shirono_Yuki.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">白乃雪</h5>
            <p class="card-text">
              月刊アフタヌーン 四季賞春のコンテスト 審査員特別賞受賞後、『あたりのキッチン』でプロデビュー。<br>
              現在もアフタヌーン誌上で連載中。その他著書にエッセイ漫画の『ほのぼのドイツぐらし。』(KADOKAWA)や、『ドイツで楽しむ日本の家ごはん』（まほろば社）がある。<br>
              今までゲストとして、日本×ベルギー友好150周年記念イベント、Magnology、ComicPark等に招聘。ドイツビールが好き。
            </p>
            <img class="card-img-top" src="<?php echo URL; ?>/img/supporter/Shirono_Yuki_2.jpg" alt="">
            <br><br>
            <p class="card-text card-address">
              <small class="text-muted">VIPSアドレス</small>
              <a href="vipstarcoin:VT32SJmA4JWc3tuAPWhwcwxhVieKuneBrs?amount=100">
                <span class="badge badge-pill badge-warning">VT32SJmA4JWc3tuAPWhwcwxhVieKuneBrs</span>
              </a>
            </p>
            <p class="card-text">
              <a href="https://twitter.com/shironoyuki_jp" target="_blank" class="link-twitter">
                <i class="fab fa-twitter-square fa-3x"></i>
              </a>
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <a href="https://www.shironoyuki.com/" target="_blank">
              <li class="list-group-item card-hp">https://www.shironoyuki.com/<i class="fas fa-external-link-alt"></i></li>
            </a>
          </ul>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo URL; ?>/img/supporter/Nightmaker.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">Nightmaker</h5>
            <p class="card-text">
              「ToxiCC」や「Fading Colors」等、ドイツ語圏で大ヒットとなった漫画を出している女性作家。<br>
              今年のライプチヒブックフェアでは個人でブースを出し、中堅出版社よりも多くの人を呼び、人だかりができるほど会場を大いに盛り上がらせた。
            </p>
            <p class="card-text card-address">
              <small class="text-muted">VIPSアドレス</small>
              <a href="vipstarcoin:VG1C5PB7P7UmRxQmeoeKKKyfyGpQHzqaQM?amount=100">
                <span class="badge badge-pill badge-warning">VG1C5PB7P7UmRxQmeoeKKKyfyGpQHzqaQM</span>
              </a>
            </p>
            <p class="card-text">
              <a href="https://twitter.com/nightmakerde" target="_blank" class="link-twitter">
                <i class="fab fa-twitter-square fa-3x"></i>
              </a>
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <a href="https://nightmaker.tictail.com/" target="_blank">
              <li class="list-group-item card-hp">https://nightmaker.tictail.com/<i class="fas fa-external-link-alt"></i></li>
            </a>
          </ul>
        </div>
      </div>
    </div>
    <?php require_once('../common/footer.php'); ?>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab60eab9e6f635f"></script>
  </body>
</html>
