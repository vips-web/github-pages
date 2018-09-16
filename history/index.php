<?php
  if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    ini_set('display_errors', 1);
    define('URL', 'http://localhost:8888/vips-web');
  } else {
    ini_set('display_errors', 0);
    define('URL', 'https://www.vipstarcoin.jp');
  }
  $lang = 'ja';
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
    <title>VIPSTARCOIN HISTORY</title>

    <meta property="og:title" content="VIPSTARCOIN HISTORY">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo URL; ?>/img/og-image.jpg">
    <meta property="og:site_name" content="VIPSTARCOIN">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo URL; ?>/img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo URL; ?>/img/apple-touch-icon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css"  href="<?php echo URL; ?>/css/history.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta property="og:url" content="<?php echo URL; ?>/news/">
    <meta name="description"
          content="仮想通貨VIPSTARCOIN(VIPS)の歩み">
    <meta name="keywords" content="VIPSTAR,VIPSTARCOIN,VIPS,VIP,ニュー速VIP,仮想通貨">
    <meta property="og:description"
          content="仮想通貨VIPSTARCOIN(VIPS)の歩み">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="nav">
      <nav class="navbar navbar-custom">
        <div class="container">
          <div class="navbar-header">
            <span class="navbar-brand">VIPSTARCOIN HISTORY</span>
          </div>
          <div class="navbar-back">
            <a class="navbar-brand" href="<?php echo URL; ?>"><i class="fas fa-home"></i></a>
          </div>
        </div>
      </nav>
    </div>

    <div id="history" class="text-center">
      <div class="container">
        <div class="section-title center">
          <h2>VIPSTARCOINの歩み</h2>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <h4>2018<br>FEB</h4>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-body">
                    <p>VIPSTARイーサリアムトークン(ERC20)が始動</p>
                    <p>コインアイコンコンテスト開催</p>
                    <p>VIPSTAR公式キャラクターコンテスト開催</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>2018<br>MAR</h4>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-body">
                    <p>ロゴ決定</p>
                    <p>独自通貨用試験通貨(TTT)が始動</p>
                    <p>竜殺しの物語との連携(終了済)</p>
                    <p>VIPSTAR Girls誕生</p>
                    <p>ウォレットの着せ替えが可能に</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <h4>2018<br>APR</h4>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-body">
                    <p>VIPSTARCOIN(独自通貨)が始動</p>
                    <p>公式HP公開</p>
                    <p>エクスプローラ公開</p>
                    <p>独自通貨へのスワップ開始(PC)</p>
                    <p>クラウドファンディングで2000%を達成</p>
                    <p>かわいいウォレット公開</p>
                    <p>CoinExchangeに上場</p>
                    <p>法人化発表</p>
                    <p>Androidウォレット開発宣言</p>
                    <p>浅草カフェSPLENDOR COFFEE様と提携</p>
                    <p>マレーチャン様決済サービス導入</p>
                    <p>CryptoBridgeに上場</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>2018<br>MAY</h4>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-body">
                    <p>海外限定エアドロップ実施</p>
                    <p>エヌ次元様との提携</p>
                    <p>5chにてvips関係の書き込みが規制される</p>
                    <p>PoS確率ボーナス開始</p>
                    <p>5chにてVIPS関係の書き込み規制が解除される</p>
                    <p>VIPSコミュニティのリーダーが5chの公認ボランティア認定(キャップ取得)を受ける</p>
                    <p>5chにて上場1ヶ月記念コンマイベント</p>
                    <p>ヌクモリンク公開</p>
                    <p>QRコードジェネレータ公開</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <h4>2018<br>JUN</h4>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-body">
                    <p>ロックアップ発表</p>
                    <p>中期計画発表</p>
                    <p>CoAketに採用決定</p>
                    <p>公認サポーターNightmakerさん</p>
                    <p>QRコードジェネレータのソフト版公開</p>
                    <p>大阪地震への支援金受付開始</p>
                    <p>公認サポーター白乃雪先生</p>
                    <p>オフィスの発表</p>
                    <p>たくぞうの公開</p>
                    <p>公式ゲーム開発を発表</p>
                    <p>店舗決済システム開発を発表</p>
                    <p>公認サポーターminoriさん</p>
                    <p>Androidウォレット(β)公開</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>2018<br>JUL</h4>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-body">
                    <p>CoinExMarketに上場</p>
                    <p>公式ブログ開設</p>
                    <p>クソコラグランプリ開催</p>
                    <p>Binanceへ協賛し西日本豪雨への支援金受付開始</p>
                    <p>Androidウォレット正式リリース</p>
                    <p>惑星ともやし集め開始</p>
                    <p>かねしん尾形様から物資支援の協力</p>
                    <p>CoAket開催</p>
                    <p>大阪北部地震への義援金額の発表</p>
                    <p>ジングルコンテスト開催</p>
                    <p>買い物選手権の審査をする</p>
                    <p>CryptalDashへの上場決定</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <h4>2018<br>AUG</h4>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-body">
                    <p>ドイツのカウントダウン開始</p>
                    <p>ソニートニュースコラボ開催</p>
                    <p>CoAketのクラウドファンディング開始</p>
                    <p>gamescomにてIndie Arena Boothと業務提携</p>
                    <p>Twitter拡散キャンペーン実施</p>
                    <p>WEBウォレット公開</p>
                    <p>PoS確率ボーナス開始</p>
                    <p>gamescom開催</p>
                    <p>VIPSコミュニティドイツ支部設立</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>2018<br>SEP</h4>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-body">
                    <p>トークンエクスプローラー公開</p>
                    <p>TOPBTC上場</p>
                    <p>TOPBTCコラボイベント開催</p>
                    <p>台風第21号被災者・被災地への寄付</p>
                    <p>北海道大地震被災者・被災地への寄付</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php require_once('../common/footer.php'); ?>
    <?php require_once('../common/script.php'); ?>
  </body>
</html>
