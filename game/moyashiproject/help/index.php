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
  <title>ゆぐもやしる ヘルプ、ユーザーガイド</title>

  <meta property="og:title" content="ゆぐもやしる ヘルプ、ユーザーガイド">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo URL; ?>/game/moyashiproject/assets/images/og.png">
  <meta property="og:site_name" content="ゆぐもやしる">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:url" content="<?php echo URL; ?>/game/moyashiproject/help/">
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
  <link id="switcher" href="../assets/css/theme-color/vips-theme.css" rel="stylesheet">
  <!-- Main Style -->
  <link href="../assets/css/style.css?v=2018091903" rel="stylesheet">

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
    <nav class="navbar navbar-fixed-top navbar-default mu-navbar mu-nav-show-always">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#top">ヘルプ、ユーザーガイド</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav mu-menu navbar-right">
            <li><a href="#mu-about">アプリについて</a></li>
            <li><a href="#mu-guide">ゲームガイド</a></li>
            <li><a href="#mu-function">ゲーム内の機能</a></li>
            <li><a href="#mu-vips">VIPSTARCOINについて</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="mu-hero-overlay">
      <div class="container">
        <div class="mu-hero-area">
          <div class="mu-hero-featured-area">
            <div class="mu-hero-featured-content">
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
            <div class="mu-help-area">
              <div class="row">
                <div class="col-md-12">
                  <div>
                    <h2>アプリについて</h2>
                    <p>アプリ「ゆぐもやしる」についての基本的な情報です。</p>
                  </div>
                  <div class="mu-about-center">
                    <p>◇プレイできる端末</p>
                    <p>以下の端末にてプレイすることができます。</p>
                    <p>【iOS】iOS10.0以降のiPhone/iPod touch/iPad</p>
                    <p>【Android】Android OS4.4以降の端末</p>
                    <p>※上記端末以外からの動作は保証しておりません。</p>
                    <p>※リリース直後のOSには対応していない場合があります。</p>
                  </div>
                  <div class="mu-about-center">
                    <p>◇無料で遊べますか?</p>
                    <p>無料でダウンロードできます。</p>
                    <p>現時点ではすべてのコンテンツを無料でお楽しみいただけますが、今後追加要素が生まれてくる可能性もあり、その際に課金コンテンツ等も追加する可能性がございます。</p>
                  </div>
                  <div class="mu-about-center">
                    <p>◇機種変更とバックアップ</p>
                    <p>【iOS】</p>
                    <p>Apple社が提供しているiTunesやiCloudの機能を利用して、iOSからiOSへゲームデータの移行やバックアップができます。</p>
                    <p>【Android】</p>
                    <p>Googleアカウントを使用して、Android OSからAndroid OSへゲームデータの移行やバックアップができます。</p>
                  </div>
                  <div class="mu-about-center">
                    <p>◇通信環境</p>
                    <p>「ゆぐもやしる」のプレイには通信環境が必須となります。</p>
                    <p>※ お客様と通信会社とのご契約内容によっては通信費が発生する場合がございますのでご注意下さい。</p>
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

    <section id="mu-guide">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-help-area">
              <div class="row">
                <div class="col-md-12">
                  <div>
                    <h2>ゲームガイド</h2>
                    <p>萌子ちゃんの野望を実現するには巨大なもやし(ゆぐもやしる)にたくさんのもやしを与えて成長させる必要があります。</p>
                  </div>
                  <div class="mu-about-center">
                    <p>◇もやしを育てる</p>
                    <p>ゆぐもやしるに与えるもやしを育てましょう。</p>
                    <p>畑をタップすることで育てる畑を選ぶことができます。</p>
                    <p>選択した畑によって収穫量や育つもやしの種類が変わります。</p>
                  </div>
                  <div class="mu-about-center">
                    <p>◇もやしを収穫する</p>
                    <p>育てたもやしを収穫しましょう。</p>
                    <p>時間が経つと、「収穫する」ボタンが出てきます。</p>
                    <p>収穫ボタンをタップしてもやしを収穫しましょう。</p>
                    <p>収穫時間は畑によって異なります。</p>
                  </div>
                  <div class="mu-about-center">
                    <p>◇ゆぐもやしるを育てる</p>
                    <p>ゆぐもやしるを成長させるには画面上のゆぐもやしるの根元をタップしましょう。</p>
                    <p>捕食したい惑星を選択し、必要な数のもやしを持っている状態で「もやしを与える」ボタンをタップすることで、ゆぐもやしるを成長させ、惑星を捕食することができます。</p>
                    <p>ゆぐもやしるが星を捕食すると、選択できる畑の種類が増えます。</p>
                    <p>また、惑星を捕食するとアイテムがもらえたり、ショップにアイテムが追加されることがあります。</p>
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

    <section id="mu-function">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-help-area">
              <div class="row">
                <div class="col-md-12">
                  <div>
                    <h2>ゲーム内の機能</h2>
                  </div>
                  <div class="mu-about-center">
                    <p>◇畑</p>
                    <p>もやしを育てる畑です。</p>
                    <p>畑の下に8つ点があります。</p>
                    <p>これは畑の状態を表しております。</p>
                    <p>黄色→畑に何も植えられていない状態です。 </p>
                    <p>灰色→畑がまだ未開放です。</p>
                  </div>
                  <div class="mu-about-center">
                    <p>◇アイテム</p>
                    <p>様々なアイテムが存在します。</p>
                    <p>畑をタップすることで、畑にアイテムを設定できます。</p>
                    <p>畑にアイテムを設定すると収穫時間が変わったり、収穫量が増えたり、効率よくもやしを収穫できます。</p>
                    <p>アイテムは1度使うと無くなるので注意してください。</p>
                  </div>
                  <div class="mu-about-center">
                    <p>◇アクセサリ</p>
                    <p>ショップ等でもやしと引き換えにアクセサリを入手できるようになります。</p>
                    <p>もやしを効率よく育てられる様々な効果があります。</p>
                    <p>入手したアクセサリはメイン画面の畑の上部にある小窓からセットすることができます。</p>
                    <p>ゲームを進めて行くと共にショップに新製品が追加されていきます。</p>
                  </div>
                  <div class="mu-about-center">
                    <p>◇合成</p>
                    <p>異なる種のもやしを合成させることができます。</p>
                    <p>行き詰ってしまったらまずここを見てみましょう。</p>
                    <p>合成は失敗することもあります。</p>
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
            <div class="mu-help-area">
              <div class="row">
                <div class="col-md-12">
                  <div>
                    <h2>VIPSTARCOINについて</h2>
                  </div>
                  <div class="mu-about-center">
                    <p>◇VIPSTARCOIN</p>
                    <p>アプリ「ゆぐもやしる」は VIPSTARCOIN という暗号資産と連動させることができます。</p>
                    <p>あらかじめご自分のウォレットアドレスを登録しておくことで、マイニング成功や、送金着金等のアクションが起こると「ゆぐもやしる」内でちょっとしたアイテム等がドロップされたりします。</p>
                    <p>もちろんVIPSTARCOINを保有していなくても十分に通常通りプレイできますし、プレイすることでお金がかかることも一切ありません。</p>
                    <p>ただ、VIPSTARCOINを持っていれば、普段のプレイがなんとなく楽しくなるかもしれません。</p>
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
              <div class="mu-bottom-help">
                <p>ヘルプ、ユーザーガイドを見てもお困りの内容が解決されない場合は、こちらからお問い合わせください。</p>
                <p><a href="mailto:support&#64;vipstarcoin.jp">support&#64;vipstarcoin.jp</a></p>
                <p>※状況により返信までにお時間をいただく場合がございます。</p>
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
  <script type="text/javascript" src="../assets/js/app.js"></script>
  <script type="text/javascript" src="../assets/js/custom.js?d=20180817"></script>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab60eab9e6f635f"></script>
</body>
</html>
