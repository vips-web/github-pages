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
              今回の大雨災害の被災者の方々にお悔やみとお見舞いを申し上げます。<br>
              また、VIPSTARは少しでも被災者の力になれるよう、寄付を募ることにいたしました。<br>
              VIPSの目指すところは、勿論VIPSを用いて今回のような災害へ即座に支援できる環境の設置ではありますので、運営一同インフラの構築にも全力を尽くしていく次第です。<br>
              <br>
              今回の西日本豪雨では大阪震災同様、ホルダーの皆様から寄付して頂いたVIPSの日本円換算分を一度運営で建て替え、寄付致します。<br>
              <br>
              寄付受付専用のウォレットアドレスは以下となります。<br>
              此方のアドレスに寄付をして頂いた分は定期的に全て報告し、必要に迫られるまで実質のロックアップとさせて頂きます。<br>
              <br>
              皆様の温もりあふれるご支援を、よろしくお願いいたします。<br>
              <br>
              <div class="input-group">
                <input type="text" id="address" class="form-control" value="VJhhZhocLxjA6iA6BmY1dpstuGnNjVivvT" aria-label="Recipient's username" aria-describedby="basic-addon2" readonly="">
                <div class="input-group-append">
                  <button id="copy" class="btn btn-outline-secondary" type="button">コピー</button>
                </div>
              </div><br>
              <p><a href="vipstarcoin:VJhhZhocLxjA6iA6BmY1dpstuGnNjVivvT?amount=100" class="btn btn-lg btn-block btn-warning">ウォレット起動</a></p>
              <p class="donation-notice text-center">※送金額は100VIPSが指定されています。ウォレット上で任意に変更が可能です。</p>
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