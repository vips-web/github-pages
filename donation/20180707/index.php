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
    <title>VIPSTARCOIN DONATION</title>

    <meta property="og:title" content="VIPSTARCOIN DONATION">
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

    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/css/donation.css">
    <meta property="og:url" content="<?php echo URL; ?>/donation/20180707/">
    <meta name="description"
          content="仮想通貨VIPSTARCOIN(VIPS)の西日本豪雨寄付窓口です。">
    <meta name="keywords" content="VIPSTAR,VIPSTARCOIN,VIPS,VIP,ニュー速VIP,仮想通貨">
    <meta property="og:description"
          content="仮想通貨VIPSTARCOIN(VIPS)の西日本豪雨寄付窓口です。">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="nav">
      <nav class="navbar navbar-custom">
        <div class="container">
          <div class="navbar-header">
            <span class="navbar-brand">VIPSTARCOIN DONATION</span>
          </div>
          <div class="navbar-back">
            <a class="navbar-brand" href="<?php echo URL; ?>"><i class="fas fa-home"></i></a>
          </div>
        </div>
      </nav>
    </div>

    <div id="donation">
      <div class="container">
        <div class="card-deck">
          <div class="card">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal text-center">西日本豪雨VIPS寄付窓口</h4>
            </div>
            <div class="card-body">
              <div class="text-center">
                <img src="<?php echo URL; ?>/img/donation/20180707/image.png" alt="西日本豪雨への寄付のお知らせ・お願い" class="donation-image">
              </div>
              西日本豪雨の寄付に関しましては2018年12月4日をもって締め切らせて頂きました。<br>
              たくさんのご支援ありがとうございました。<br>
              お寄せ頂きましたご支援のETH換算分を、責任を持って寄付いたします。<br>
              <br>
              VIPSでの寄付総額：10,679,157.59855170<br>
              7月25日22時以前：10,576,084.89008400 ※BINANCEへ 3.165 ETH 送金済<br>
              7月25日22時以降：103,072.70846770<br>
              寄付募集開始時のVIPSの価格：6sat　合計 0.00618436 BTC　<br>
              <br>
              寄付募集開始時のレート換算額（2018/07/07）：4,157円　0.335 ETH<br>
              7月7日のBTC最高値：686,399円 最安値：657,924円 中間：672,161.5円（JPY/BTC）<br>
              <a href="https://coinmarketcap.com/ja/currencies/bitcoin/historical-data/" target="_blank" style="color: #ffc000;">※coinmarketcap参照</a><br>
              <br>
              <a href="https://support.binance.com/hc/en-us/articles/360007069891-West-Japan-Disaster-Relief-Donation" target="_blank" style="color: #ffc000;">寄付先はこちら</a><br>
              <br>
              たくさんのご支援ありがとうございました。<br>
              <br>
              <p class="text-center">
                <a href="http://explorer.vipstarcoin.jp/address/VJhhZhocLxjA6iA6BmY1dpstuGnNjVivvT" target="_blank" class="donation-link">寄付状況確認</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php require_once('../../common/footer.php'); ?>

    <script>
      function execCopy(string){
        var temp = document.createElement('div');

        temp.appendChild(document.createElement('pre')).textContent = string;

        var s = temp.style;
        s.position = 'fixed';
        s.left = '-100%';

        document.body.appendChild(temp);
        document.getSelection().selectAllChildren(temp);

        var result = document.execCommand('copy');

        document.body.removeChild(temp);

        return result;
      }


      var address = document.getElementById('address');
      var copy = document.getElementById('copy');

      copy.onclick = function(){
        if (execCopy(address.value)) {
          alert('コピーしました');
        } else {
          alert('このブラウザには対応していません。手動でコピーしてください。');
        }
      };
    </script>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab60eab9e6f635f"></script>
  </body>
</html>
