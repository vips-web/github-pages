<?php
  header('Location: https://www.vipstarcoin.jp', true, 301);
  exit();

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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>VIPSTARCOIN in Asanteman</title>

  <meta property="og:title" content="VIPSTARCOIN in Asanteman">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo URL; ?>/lp/ashanti/assets/images/og.png">
  <meta property="og:site_name" content="VIPSTARCOIN">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:url" content="<?php echo URL; ?>/lp/ashanti/">
  <meta name="description"
        content="アシャンティ王国がVIPSTARCOINを公式仮想通貨に認定 告知セレモニー開催">
  <meta name="keywords" content="VIPSTAR,VIPSTARCOIN,VIPS,VIP,ニュー速VIP,仮想通貨,暗号資産,アシャンティ王国,ガーナ">
  <meta property="og:description"
        content="アシャンティ王国がVIPSTARCOINを公式仮想通貨に認定 告知セレモニー開催">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo URL; ?>/img/favicon.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo URL; ?>/img/apple-touch-icon.png">
  <!-- Font Awesome -->
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/vips-theme.css" rel="stylesheet">
  <!-- Main Style -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Fonts -->
  <!-- Open Sans for body font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
  <!-- Montserrat for title -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <header id="mu-hero" class="" role="banner">
    <nav class="navbar navbar-fixed-top navbar-default mu-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#top">VIPS in Asanteman</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav mu-menu navbar-right">
            <li><a href="#mu-hero">Top</a></li>
            <li><a href="#mu-about">About</a></li>
            <li><a href="#mu-video">Message</a></li>
            <li><a href="#mu-detail">Detail</a></li>
            <li><a href="#mu-venue">Venue</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="mu-hero-overlay">
      <div class="container">
        <div class="mu-hero-area">
          <div class="mu-hero-featured-area">
            <div class="mu-logo-area">
              <a class="mu-logo" href="javascript:;">VIPSTARCOIN in Asanteman</a>
            </div>
            <div class="mu-hero-featured-content">
              <h1>アシャンティ王国がVIPSTARCOINを<br>公式仮想通貨に認定</h1>
              <p class="mu-event-date-line">告知セレモニー開催予定</p>
              <div class="mu-event-counter-area">
                <div id="mu-event-counter"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main role="main">
    <section id="mu-about">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-about-area">
              <div class="mu-title-area">
                <h2 class="mu-title">About</h2>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left text-center">
                    <img class="" src="assets/images/about-1.svg" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right">
                    <h2>アシャンティ王国とは</h2>
                    <p>
                      <a href="https://ja.wikipedia.org/wiki/%E3%82%A2%E3%82%B7%E3%83%A3%E3%83%B3%E3%83%86%E3%82%A3%E7%8E%8B%E5%9B%BD" target="_blank">アシャンティ王国</a>とは、ガーナ共和国内に存在している王国です。
                    </p>
                    <p>
                      ガーナ共和国は16の州で構成されると説明されますが、実際には州の多くは独立した『王国』であり、『王』による君主制が敷かれています。<br>
                      ガーナ第二の都市<a href="https://ja.wikipedia.org/wiki/%E3%82%AF%E3%83%9E%E3%82%B7" target="_blank">クマシ</a>を首都とするアシャンティ王国は1670年に建国した旧アシャンティ王国の流れを継いでおり、現在10ある王国の中で最も権威があるとされています。
                    </p>
                    <p>
                      現在、アシャンティ王国はガーナ憲法によってガーナ共和国内の立憲君主制王国として承認されています。<br>
                      アシャンティ王国の王もガーナ憲法によって正式な王位を認められており、国家元首である大統領以上の権力を持っているとも言われています。
                    </p>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left">
                    <h2>VIPSTARCOINとは</h2>
                    <p>
                      VIPSTARCOIN（VIPS）は、5ちゃんねるニュー速VIP板発祥の仮想通貨（暗号資産）です。<br>
                      国産仮想通貨として多目的に利用されること、ひいては寄付への利用で世界に貢献することを目指して開発が進んでいます。
                    </p>
                    <p>
                      直近では、有志メンバーを中心に、ガーナでの新生児医療や、教育への支援を目的に仮想通貨での寄付活動を行い、現地メディアでも取り上げられました。
                    </p>
                    <p>
                      VIPSコミュニティでは日々活発にファンによる交流や開発が行われています。<br>
                      日常の生活の話から真面目な話、気軽に開発やブロックチェーンに触れてみたいという方にもおすすめの楽しいコミュニティです。<br>
                      <a href="https://find.5ch.net/search?q=vips" target="_blank">5ちゃんねる</a>にある本スレや<a href="https://discord.gg/sEaaxau" target="_blank">Discord</a>のコミュニティを是非とも覗いて見てください。
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right text-center">
                    <img class="" src="assets/images/about-2.png" alt="">
                    <a href="https://www.vipstarcoin.jp/" target="_blank" class="mu-send-msg-btn"><span>VIPSTARCOIN公式サイト <i class="fas fa-external-link-alt"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="mu-video">
      <div class="mu-video-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-video-area">
                <h2>Message from Nana Obrempon Kwaku Duah III</h2>
                <a class="mu-video-play-btn" href="#"><i class="fa fa-play" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mu-video-content">
        <div class="mu-video-iframe-area">
          <a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
          <iframe width="854" height="480" src="https://www.youtube.com/embed/qCMWPgberzc?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <section id="mu-detail">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-about-area">
              <div class="mu-title-area">
                <h2 class="mu-title">Detail</h2>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left text-center">
                    <img class="" src="assets/images/detail-1.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right">
                    <h2>ガーナ企業との協力</h2>
                    <p>
                      VIPSコミュニティは、ガーナで活動している慈善団体の<a href="https://msmmoorefoundation.org/" target="_blank">MSM Moore foundation</a>（以下MSM）を通じてガーナへの寄付活動を実施しており、現地の子供たちへ食料などの提供を行いました。<br>
                      それに対しMSMからは、ガーナ国内においてVIPSの普及活動を行い、Sekwara市内全店舗へのVIPS決済の導入を斡旋をするなどVIPSコミュニティへ貢献していただきました。
                    </p>
                    <p>
                      その中でVIPS, MSM両者の目標を実現させるべく、MSMのCEOである<a href="https://msmmoorefoundation.org/Team.html" target="_blank">Maximoore</a>氏やVIPSコミュニティメンバーと議論を重ねたところ、まずはVIPSTARCOIN自体をガーナで普及させる必要があるとの結論に至りました。<br>
                      そこで、同じくMaximoore氏がCEOを務め、ガーナにおける暗号資産取引所ライセンスを持っているBM Max Enterprise社とも協力体制を確立し、活動を進める運びとなりました。
                    </p>
                    <p>
                      詳細は<a href="https://www.vipstarcoin.jp/blog/2019/07/05/ghana/" target="_blank">こちら</a>
                    </p>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left">
                    <h2>アシャンティ王国との協力</h2>
                    <p>
                      その後のMaximoore氏およびBM Max Enterprise社の尽力により、 アシャンティ王国の大首長の１人であるNana Obrempon Kwaku Duah III世氏の協力が得られることになりました。<br>
                      上部に掲載している動画は、協力関係構築にあたっていただいたメッセージビデオです。
                    </p>
                    <p>
                      ビデオの日本語訳と詳細は<a href="https://www.vipstarcoin.jp/blog/2019/07/25/ghananana/" target="_blank">こちら</a>
                    </p>
                    <p>
                      さらにその後、Maximoore氏はアシャンティ国王および大首長たちと面会し、VIPSとのこれまでの取り組み、今後の目標を説明しました。<br>
                      その結果、我々の目標にご賛同いただき、アシャンティ王国の公式仮想通貨に認定していただけることになりました。
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right text-center">
                    <img class="" src="assets/images/detail-2.jpg" alt="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left text-center">
                    <img class="" src="assets/images/detail-3.png" alt="" width="300">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right">
                    <h2>セレモニー内容</h2>
                    <p>
                      VIPSTARCOINの公式仮想通貨認定の告知のためのセレモニーが開催されます。（日時未定）
                    </p>
                    <p>
                      セレモニーの内容は以下のとおりです。<br>
                      1) アシャンティ国王のセレモニーへの参加<br>
                      2) 大首長によるVIPSTARCOINのアシャンティ王国公式仮想通貨認定の告知<br>
                      3) 大首長によるVIPSTARCOINロゴの掲揚<br>
                      4) VIPSTARCOIN AmbassadorとしてのMaximoore氏の紹介<br>
                      5) MSMスタッフによる市民へのVIPSTARCOINの配布<br>
                      6) BM Max Enterprise社による希望者へのVIPSTARCOINの販売<br>
                      ※TVを含むメディアも参加予定
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="mu-venue">
      <div class="mu-venue-area">
        <div class="row">
          <div class="col-md-6">
            <div class="mu-venue-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12980.168348865021!2d139.7013494!3d35.577352999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb971e0e722b09%3A0x128f14b87906b5ce!2sOtumfuo+Osei+Agyeman+Prempeh+II+Statue%2C+Prempen+II+Avenue%2C+Kumasi%2C+%E3%82%AC%E3%83%BC%E3%83%8A!5e0!3m2!1sja!2sjp!4v1564817658490!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-md-6">
            <div class="mu-venue-address">
              <h2>セレモニー会場（中心地点）</h2>
              <h3>Kumase City Center</h3>
              <h4>Prempen II Avenue, Kumasi, Ghana</h4>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="mu-footer" role="contentinfo">
    <div class="container">
      <div class="mu-footer-area">
        <div class="addthis_inline_share_toolbox"></div>
        <div class="mu-footer-top">
          <div class="mu-social-media">
            <a href="<?php echo URL; ?>" target="_blank"><i class="fa fa-home"></i></a>
            <a href="https://twitter.com/VIPSTARCOIN" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://discord.gg/sEaaxau" target="_blank"><i class="fab fa-discord"></i></a>
          </div>
        </div>
        <div class="mu-footer-bottom">
          <p class="mu-copy-right">
            Copyright &copy; 2019 <a href="<?php echo URL; ?>" target="_blank">VIPSTAR</a>. All right reserved.
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-2.2.4.min.js"
          integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
          crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
          integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
          crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>
  <script type="text/javascript" src="assets/js/custom.js?d=20180817"></script>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab60eab9e6f635f"></script>
</body>
</html>
