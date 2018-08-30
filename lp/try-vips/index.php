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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Let's try VIPSTARCOIN</title>

  <meta property="og:title" content="Let's try VIPSTARCOIN">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo URL; ?>/lp/gamescom/assets/images/og-en.png">
  <meta property="og:site_name" content="VIPSTARCOIN">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:url" content="<?php echo URL; ?>/lp/try-vips/">
  <meta name="description"
        content="Let's try VIPSTARCOIN. Here, you can experience our tipping culture and spirit of 'Nukumority'">
  <meta name="keywords" content="VIPSTAR,VIPSTARCOIN,VIPS,VIP,gamescom,IAB">
  <meta property="og:description"
        content="Let's try VIPSTARCOIN. Here, you can experience our tipping culture and spirit of 'Nukumority'">

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
  <header id="mu-hero" role="banner">
    <div class="mu-hero-overlay">
      <div class="container">
        <div class="mu-hero-area">
          <div class="mu-hero-featured-area">
            <div class="mu-logo-area">
              <a class="mu-logo" href="javascript:;">Welcome to VIPSTARCOIN</a>
            </div>
            <div class="mu-hero-featured-content">
              <h1>Let's try VIPS!</h1>
              <p>Here, you can experience our tipping culture and spirit of "Nukumority"</p>
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
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left text-center">
                    <img src="assets/images/wallet.png" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right">
                    <h2>Wallet</h2>
                    <p>
                      "How to install VIPS wallet" page, you can find manual to install VIPS wallet in your Android smartphone.<br>
                      Alternatively, or for iOS users, you can find manual for our web wallet, too.
                    </p>
                    <a href="https://www.vipstarcoin.jp/blog/2018/08/14/how-to-install-android-wallet/" target="_blank" class="mu-send-msg-btn"><span>Wallet page <i class="fas fa-external-link-alt"></i></span></a>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left">
                    <h2>Fountain</h2>
                    <p>
                      "Fountain" page provides you link which you can get some VIPS for free!<br>
                      With that VIPS, you can experience world of VIPS!
                    </p>
                    <a href="http://app.nukora.jp/vipsimageboard/thread?id=5" target="_blank" class="mu-send-msg-btn"><span>Fountain page <i class="fas fa-external-link-alt"></i></span></a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right text-center">
                    <img src="assets/images/fountain.png" alt="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left text-center">
                    <img src="assets/images/tipping.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right">
                    <h2>Instant Tipping</h2>
                    <p>
                      In "Instant Tipping" page, you can view masterpieces of our creators in VIPS community.<br>
                      You can experience instant tippping to creatore of your choice with one click.
                    </p>
                    <a href="<?php echo URL; ?>/lp/tipping/" target="_blank" class="mu-send-msg-btn"><span>Instant Tipping page <i class="fas fa-external-link-alt"></i></span></a>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left">
                    <h2>Image Board</h2>
                    <p>
                      Get inspired by our creators?<br>
                      You can post your works here and display it to your fellow VIPS holders!<br>
                      You can post your VIPS address along your works, so others can tip you.<br>
                      For others, you can see your friends's work and support through instant tipping!<br>
                      [Note] Please be aware of copyrights. Its all on your own responsibility.
                    </p>
                    <a href="http://app.nukora.jp/vipsimageboard/" target="_blank" class="mu-send-msg-btn"><span>Image Board <i class="fas fa-external-link-alt"></i></span></a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right text-center">
                    <img src="assets/images/board.jpg" alt="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left text-center">
                    <img src="assets/images/donation.png" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-about-right">
                    <h2>Donation</h2>
                    <p>
                      In "Donation" page, you can make instant donation to Binance's western Japan heavy rain relief fund.<br>
                      See detail in the page. 
                    </p>
                    <a href="https://www.vipstarcoin.jp/blog/2018/08/19/donation-with-vipstarcoin/" target="_blank" class="mu-send-msg-btn"><span>Donation page <i class="fas fa-external-link-alt"></i></span></a>
                  </div>
                </div>
              </div>

              <div class="mu-title-area">
                <h2 class="mu-title">Happy VIPS life!</h2>
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
        <div class="mu-footer-top">
          <div class="mu-social-media">
            <a href="<?php echo URL; ?>/en/" target="_blank"><i class="fa fa-home"></i></a>
            <a href="https://twitter.com/VIPSTARCOIN_" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://discord.gg/sEaaxau" target="_blank"><i class="fab fa-discord"></i></a>
          </div>
        </div>
        <div class="mu-footer-bottom">
          <p class="mu-copy-right">
            Copyright &copy; 2018 <a href="<?php echo URL; ?>" target="_blank">VIPSTAR</a>. All right reserved.
            &nbsp;<a class="" href="#" data-toggle="modal" data-target="#licenseModal">License</a>
          </p>
        </div>
      </div>
    </div>

    <div class="modal fade" id="licenseModal" tabindex="-1" role="dialog" aria-labelledby="licenseModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="licenseModalLabel">License</h4>
          </div>
          <div class="modal-body">
            <p>
              "<a href="https://commons.wikimedia.org/wiki/File:Südeingang_zur_Gamescom_2015.jpg" target="_blank">Südeingang zur Gamescom 2015</a>"
              by Kalligraf
              is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">CC BY-SA 4.0</a>
            </p>
          </div>
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
  <script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>
