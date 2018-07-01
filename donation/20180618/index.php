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
    <meta property="og:url" content="<?php echo URL; ?>/donation/">
    <meta name="description"
          content="仮想通貨VIPSTARCOIN(VIPS)の大阪北部地震寄付窓口です。">
    <meta name="keywords" content="VIPSTAR,VIPSTARCOIN,VIPS,VIP,ニュー速VIP,仮想通貨">
    <meta property="og:description"
          content="仮想通貨VIPSTARCOIN(VIPS)の大阪北部地震寄付窓口です。">
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
              <h4 class="my-0 font-weight-normal text-center">大阪北部地震VIPS寄付窓口</h4>
            </div>
            <div class="card-body">
              <div class="text-center">
                <img src="<?php echo URL; ?>/img/donation/20180618/image.png" alt="" class="donation-image">
              </div>
              大阪北部地震への寄付に関しましては6月30日24時をもって締め切らせて頂きました。<br>
              総額600万VIPSを超えるご支援をお寄せ頂いております。<br>
              お寄せ頂きましたご支援の日本円換算分を、締切後責任を持って寄付いたします。<br>
              <br>
              寄付先はこちら<br>
              「平成30年大阪府北部を震源とする地震義援金」<br>
              <a href="http://www.city.takatsuki.osaka.jp/kakuka/kenkouf/fukushise/oshirase/contribution/1529580507460.html" target="_blank" class="donation-link">
                http://www.city.takatsuki.osaka.jp/kakuka/kenkouf/fukushise/oshirase/contribution/1529580507460.html
              </a><br>
              <br>
              ヌクモリ溢れるご支援を頂き本当にありがとうございます。<br>
              <br>
              被災された皆様には心よりお見舞いを申し上げると共に、一日も早い復興をお祈りしております。<br>
              <br>
              <p class="text-center"><a href="http://explorer.vipstarcoin.jp/address/VJhhZhocLxjA6iA6BmY1dpstuGnNjVivvT" target="_blank" class="donation-link">寄付状況確認</a></p>
            </div>
            <div class="card-footer bg-transparent">
              <br>
              <p class="text-center">寄付方法詳細</p>
              <p class="donation-detail">
                現時点ではVIPS支払い可能な店舗が被災地付近に無いこと、自治体等にVIPSを用いた寄付を受付可能な窓口が設置されていないことから、本震災に対してVIPSの直接寄付は行いません。<br>
                現時点で被災地にVIPSを送っても、日本円の換金作業等で無駄な負担を強いてしまう事は明らかであるためです。<br>
                <br>
                VIPSの目指すところは、勿論VIPSを用いて今回のような災害へ即座に支援できる環境の設置ではありますので、運営一同インフラの構築にも全力を尽くしていく次第です。<br>
                <br>
                本震災ではホルダーの皆様から寄付して頂いたVIPSの日本円換算分を一度運営で建て替え、寄付致します。<br>
                また、CoAketのたくぞうブースで得られた利益の100%（ただしこれは公式販売分に限る。）を寄付致します。<br>
                さらに、当初の予定では、CoAketで販売するグッズを国内クラウドファンディングでも販売する予定でした。<br>
                発表は数日後を予定していましたが急遽予定を繰り上げ、その売上からも経費等を差し引いた100%を寄付致します。<br>
                （クラウドファンディングの開始はまだ先となりますのでご注意ください）<br>
                <br>
                <br>
                本震災に限らず、VIPS支払いで支援物資を購入させてくださるという事業主様が居られましたら、お手数をおかけいたしますがVIPSTAR運営までご一報ください。<br>
                メールアドレス：<a href="mailto:vips_coin&#64;vipstarcoin.jp" class="donation-link">vips_coin&#64;vipstarcoin.jp</a><br>
                <br>
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
