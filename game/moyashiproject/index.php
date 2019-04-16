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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>ゆぐもやしる</title>

  <meta property="og:title" content="ゆぐもやしる">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo URL; ?>/game/moyashiproject/assets/images/og.png?20190407">
  <meta property="og:site_name" content="ゆぐもやしる">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:url" content="<?php echo URL; ?>/game/moyashiproject/">
  <meta name="description"
        content="かの宇宙樹ユグドラシルのごとく、惑星を吸収し大きくなるもやし―――「ゆぐもやしる」を萌子ちゃんといっしょに育てる旅に出よう！ まだ見ぬもやしが君を待っている・・・！">
  <meta name="keywords" content="VIPSTAR,VIPSTARCOIN,VIPS,VIP,ニュー速VIP,仮想通貨,ゲーム,もやし,ゆぐもやしる,小田萌子">
  <meta property="og:description"
        content="かの宇宙樹ユグドラシルのごとく、惑星を吸収し大きくなるもやし―――「ゆぐもやしる」を萌子ちゃんといっしょに育てる旅に出よう！ まだ見ぬもやしが君を待っている・・・！">

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
  <link href="assets/css/style.css?v=2018091903" rel="stylesheet">

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
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav mu-menu navbar-right">
            <li><a href="#mu-hero">とっぷ</a></li>
            <li><a href="#mu-story">おはなし</a></li>
            <li><a href="#mu-moyashi">もやし</a></li>
            <li><a href="#mu-star">ほし</a></li>
            <li><a href="#mu-special">れんどう</a></li>
            <li><a href="#mu-vips">VIPS</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="mu-hero-overlay">
      <div class="container">
        <div class="mu-hero-area">
          <div class="mu-hero-featured-area">
            <div class="mu-hero-featured-content">
              <img src="assets/images/title.png" width="487">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main role="main">
    <section id="mu-story">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-about-area">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left text-center">
                    <img src="assets/images/story.png" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right">
                    <p>――あるところに、もやしを愛してやまないひとりの女の子がいた。</p>
                    <p>もやしに対して並々ならぬ情熱を傾けるVIPSTARGIRLS小田萌子は食用・観賞用・保存用、果てはまだ見ぬもやしを追い求め、日々研究に勤んでいた。</p>
                    <p>その溢れ出る情熱は、ついには地球を突き抜けて、宇宙にまで到達してしまう・・・！？</p>
                    <p>かの宇宙樹ユグドラシルのごとく、惑星を吸収し大きくなるもやし―――「ゆぐもやしる」を萌子ちゃんといっしょに育てる旅に出よう！</p>
                    <p>まだ見ぬもやしが君を待っている・・・！</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="mu-middle">
      <div class="mu-middle-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-middle-area">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="mu-moyashi">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-about-area">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left">
                    <h2>もやしを育てよう！</h2>
                    <p>たどり着いた先々の惑星では、その地ならではの畑を入手することができます。</p>
                    <p>その畑をうまく使って萌子とたくさんのもやしを育てよう！</p>
                    <p>ゲームに登場するもやしはなんと１００種類以上！！</p>
                    <p>もやし同士を合成すると更に珍しいもやしになることも・・・</p>
                    <p>あなたはこの広い宇宙のもやしをすべて集めることができるかな？</p>
                    <div class="images">
                      <img class="" src="assets/images/moyashi-1.png" alt="">
                      <img class="" src="assets/images/moyashi-2.png" alt="">
                      <img class="" src="assets/images/moyashi-3.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right text-center">
                    <img class="img-border" src="assets/images/moyashi.png" alt="">
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section id="mu-middle">
      <div class="mu-middle-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-middle-area">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="mu-star">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-about-area">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left text-center">
                    <img class="img-border" src="assets/images/star.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right">
                    <h2>星を捕食しよう！</h2>
                    <p>「ゆぐもやしる」を大きく育て、まだ見ぬ星をみつけよう！</p>
                    <p>育てたどり着いた惑星はもやしによって捕食、吸収されて・・・<br>新たな畑がGETできます！</p>
                    <p>夜空に輝くお星様。</p>
                    <p>もしも、あの星でもやしを育てたら、個性的なもやしが育つんだろうなあ。</p>
                    <p>誰もが一度は思い馳せたであろうその夢を、萌子といっしょに叶えよう！</p>
                    <div class="images">
                      <img class="" src="assets/images/star-1.png" alt="">
                      <img class="" src="assets/images/star-2.png" alt="">
                      <img class="" src="assets/images/star-3.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section id="mu-middle">
      <div class="mu-middle-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-middle-area">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="mu-special">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-about-area">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left">
                    <h2>仮想通貨との連動</h2>
                    <p>ゆぐもやしるは VIPSTARCOIN という仮想通貨と連動しています。<p>
                    <p>もちろん仮想通貨を保有していなくても通常通りプレイできますし、プレイすることでお金がかかることも一切ありません。</p>
                    <p>VIPSTARCOINを持っていれば、普段のプレイがなんとなく楽しくなるかもしれません。</p>
                    <p>詳細は続報をお待ち下さい。</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right text-center">
                    <img class="img-border" src="assets/images/special.png" alt="">
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section id="mu-middle">
      <div class="mu-middle-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-middle-area">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="mu-vips">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-about-area">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left text-center">
                    <img class="" src="assets/images/vips.png" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right">
                    <h2>VIPSTARCOINとは</h2>
                    <p>VIPSTARCOIN (VIPS) は5ちゃんねるニュー速VIP板発祥の仮想通貨です。</p>
                    <p>「楽しさを、買おう。」を合言葉に、国産仮想通貨として多目的に利用されること、ひいては寄付への利用で世界に貢献することを目指して開発が進んでいます。</p>
                    <a href="https://www.vipstarcoin.jp/" target="_blank" class="mu-send-msg-btn"><span>VIPSTARCOIN公式サイト <i class="fas fa-external-link-alt"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="mu-bottom">
      <div class="mu-bottom-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-bottom-area">
                <h2>COMING SOON</h2>
                <img src="assets/images/appstore.png" alt="App Storeからダウンロード" width="225">
                <img src="assets/images/googleplay.png" alt="Google Playで手に入れよう" width="225">
                <!-- <a href="javascript:;" class="mu-bottom-itunes">
                  <img src="https://linkmaker.itunes.apple.com/images/badges/ja-jp/badge_appstore-lrg.svg" alt="Download on the App Store" width="200">
                </a>
                <a href="javascript:;">
                  <img alt="Google Play で手に入れよう" src="https://play.google.com/intl/en_us/badges/images/generic/ja_badge_web_generic.png" width="230">
                </a> -->
              </div>
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
  <script type="text/javascript" src="assets/js/app.js"></script>
  <script type="text/javascript" src="assets/js/custom.js?d=20180817"></script>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab60eab9e6f635f"></script>
</body>
</html>
