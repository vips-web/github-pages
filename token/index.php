<?php $lang = 'etc'; ?>
<?php
  if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    ini_set('display_errors', 1);
    define('URL', 'http://localhost:8888/vips-web');
  } else {
    ini_set('display_errors', 0);
    define('URL', 'https://www.vipstarcoin.jp');
  }

  $json = file_get_contents('../data/token.json');
  $tokens = json_decode($json, true);

  $i = 0;
  foreach ($tokens as &$token) {
    $i++;
    $token['id'] = $i;
    $token['score'] = 0;
    $token['score'] += !empty($token['icon']) ? 100 : 0;
    $token['score'] += !empty($token['pr'])   ? 10 : 0;
    $token['score'] += !empty($token['hp'])   ? 1 : 0;
  }
  unset($token);

  foreach ($tokens as $key => $value) {
    $score[$key] = $value['score'];
    $id[$key] = $value['id'];
  }
  array_multisort($score, SORT_DESC, $id, SORT_ASC, $tokens);
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
    <title>VIPSTARCOIN TOKEN</title>

    <meta property="og:title" content="VIPSTARCOIN TOKEN">
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

    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/css/token.css">
    <meta property="og:url" content="<?php echo URL; ?>/token/">
    <meta name="description"
          content="仮想通貨VIPSTARCOIN(VIPS)のスマートコントラクト機能により作成されたトークンの一覧です。">
    <meta name="keywords" content="VIPSTAR,VIPSTARCOIN,VIPS,VIP,ニュー速VIP,仮想通貨,トークン">
    <meta property="og:description"
          content="仮想通貨VIPSTARCOIN(VIPS)のスマートコントラクト機能により作成されたトークンの一覧です。">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="nav">
      <nav class="navbar navbar-custom">
        <div class="container">
          <div class="navbar-header">
            <span class="navbar-brand">VIPSTARCOIN TOKEN</span>
          </div>
          <div class="navbar-back">
            <a class="navbar-brand" href="<?php echo URL; ?>"><i class="fas fa-home"></i></a>
          </div>
        </div>
      </nav>
    </div>

    <div id="token">
      <div class="table table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>アイコン</th>
              <th>トークンネーム<br>シンボル</th>
              <th>総発行枚数<br>小数点以下桁数</th>
              <th>コントラクトアドレス<br>HP</th>
              <th>PR</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($tokens as $token): ?>
              <tr>
                <td rowspan="2">
                  <?php if (!empty($token['icon'])): ?>
                    <img src="<?php echo htmlspecialchars($token['icon'], ENT_QUOTES); ?>" alt="" width="64">
                  <?php endif; ?>
                </td>
                <td class="token-name"><?php echo htmlspecialchars($token['name'], ENT_QUOTES); ?></td>
                <td class="token-supply"><?php echo htmlspecialchars(number_format($token['supply']), ENT_QUOTES); ?></td>
                <td class="token-address"><?php echo htmlspecialchars($token['address'], ENT_QUOTES); ?></td>
                <td rowspan="2" class="token-pr"><?php echo htmlspecialchars($token['pr'], ENT_QUOTES); ?></td>
              </tr>
              <tr>
                <td><?php echo htmlspecialchars($token['symbol'], ENT_QUOTES); ?></td>
                <td><?php echo htmlspecialchars($token['decimals'], ENT_QUOTES); ?></td>
                <td><a href="<?php echo htmlspecialchars($token['hp'], ENT_QUOTES); ?>" target="_blank"><?php echo htmlspecialchars($token['hp'], ENT_QUOTES); ?></a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <?php require_once('../common/footer.php'); ?>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab60eab9e6f635f"></script>
  </body>
</html>
