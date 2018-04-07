<?php require_once('../controller.php'); ?>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VIPSTARCOIN</title>
<meta name="description"
      content="VIPSTARCOIN (VIPS) is a cryptocurrency originated from a community called 'VIP' in 5chnnel, the largest Japanese textboards.">
<meta name="keywords" content="VIPSTAR,VIPSTARCOIN,VIPS,VIP,ニュー速VIP,仮想通貨">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="<?php echo URL; ?>/img/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo URL; ?>/img/apple-touch-icon.png">

<meta property="og:title" content="VIPSTARCOIN">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo URL; ?>/en">
<meta property="og:image" content="<?php echo URL; ?>/img/og-image.jpg">
<meta property="og:site_name" content="VIPSTARCOIN">
<meta property="og:description"
      content="VIPSTARCOIN (VIPS) is a cryptocurrency originated from a community called 'VIP' in 5chnnel, the largest Japanese textboards.">
<meta name="twitter:card" content="summary_large_image">

<!-- Bootstrap -->
<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="<?php echo URL; ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Header -->
<header id="header" class="header">
  <img src="<?php echo URL; ?>/img/header.jpg" alt="VIPSTAR" class="header-image">
</header>
<!-- Navigation -->
<div id="nav">
  <nav class="navbar navbar-custom">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top">VIPSTARCOIN</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li> <a class="page-scroll" href="#about">ABOUT</a> </li>
          <li> <a class="page-scroll" href="#roadmap">ROADMAP</a> </li>
          <li> <a class="page-scroll" href="#holding">HOLDING</a> </li>
          <li> <a class="page-scroll" href="#wallet">WALLET</a> </li>
          <li> <a class="page-scroll" href="#">NEWS</a> </li>
          <li> <a class="page-scroll" href="#community">COMMUNITY</a> </li>
          <li> <a class="page-scroll" href="#contact">CONTACT</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="dropdown">
      <button class="button button-bw dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <i class="fas fa-language"></i>LANGUAGE
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li class="selected">English<i class="fas fa-check"></i></li>
        <li role="separator" class="divider"></li>
        <li><a href="<?php echo URL; ?>/">日本語</a></li>
        <li><a href="<?php echo URL; ?>/vip/">VIP</a></li>
      </ul>
    </div>

    <div class="section-title text-center center">
      <h2>ABOUT</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-12 text-center"><img src="<?php echo URL; ?>/img/about.jpg" class="js_about-img img-responsive"></div>
      <div class="col-md-8 col-md-offset-2">
        <div class="about-text">
        <p>VIPSTARCOIN (VIPS) is a cryptocurrency originated from a community called 'VIP' in 5chnnel, the largest Japanese textboards.</p>
        <p>VIPS is currently being developed by a volunteer programmer and test users. We dev team is targeting for VIPS to be utilized in varied ways as an original cryptocurrency from Japan, setting the final goal for contributing to the society across borders as a convenient method of making donations.</p>
        <p>We hope VIPS gains popularity in the real society as well as on the Internet community with the strong support of VIPS holders.</p>
          <p><a href="#" class="about-qa" data-toggle="modal" data-target="#qaModal">【FOR BEGINNERS】What is a cryptocurrency? Q＆A&nbsp;&nbsp;<i class="far fa-window-restore"></i></a></p>
          <p class="bl_about-button text-center">
            <a class="button button-bw" href="#" data-toggle="modal" data-target="#pointModal">6 unique features of VIPS&nbsp;&nbsp;<i class="far fa-window-restore"></i></a>
          </p>
          <!-- Modal -->
          <div class="modal fade" id="qaModal" tabindex="-1" role="dialog" aria-labelledby="qaModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title" id="qaModalLabel">What is a cryptocurrency? Q＆A</h4>
                </div>
                <div class="modal-body">
                <p>
                  <span>Q. What is the 'VIP' community?</span><br>
                  <span><b>A. The 'VIP' community derives from an online textboard titled 'NyuSoku VIP(ニュー速VIP)' on 5ch.net. It is the second active community of 5ch following NANJ (Nandemo Jikkyo, なんでも実況). Community members of 'VIP' are called as 'VIPPER.'</b></span>
                </p>
                <p>
                  <span>Q. What is VIPSTARCOIN (VIPS)? </span><br>
                  <span><b>A. VIPS is a cryptocurrency that is originated from the VIP community. VIPS is created by an anonymous vipper and is equipped with cutting-edge technologies such as smart contracts and Proof of Stake version 3. One can create new tokens from VIPS just as they can do so with Ethereum.</b></span>
                </p>
                <p>
                  <span>Q. What is a cryptocurrency？</span><br>
                  <span><b>A. A cryptocurrency is a series of blocks of data created based on the blockchain technology and is hard to be copied or tampered.</b></span>
                </p>
                <p>
                  <span>Q. How can I receive or keep a cryptocurrency?</span><br>
                  <span><b>A. You need a virtual wallet to send or receive cryptocurrency coins or tokens. Different types of wallets might be needed to keep multiple kinds of cryptocurrencies. For VIPS, you need a special wallet arranged for VIPS coins. Ethereum wallets such as MyEtherWallet(MEW) cannot be used for VIPS coins or tokens.</b></span>
                </p>
                <p>
                  <span>Q. Do I need to provide personal information to the developer for making a wallet for VIPS coins?</span><br>
                  <span><b>A. No, you don't need to. Download a program and create a new wallet. You can create multiple wallets at no cost.</b></span>
                </p>
                <p>
                  <span>Q. Do I need to provide contact information such as an email address or phone numbers to make a wallet?</span><br>
                  <span><b>A. No, you don't need to.</b></span>
                </p>
                <p>
                  <span>Q. Is there any cost for keeping a wallet?</span><br>
                  <span><b>A. No. Keeping a wallet are free of charge.</b></span>
                </p>
                <p>
                  <span>Q. Will VIPS be listed on a cryptcurrency exchange?</span><br>
                  <span><b>A. As of April 2018, VIPS is not listed on any exchanges and does not have any value at this point. We are targeting to have VIPS listed on an exchange shortly. </b></span>
                </p>
                <p>
                  <span>Q. How can I get some VIPS coins before listed. </span><br>
                  <span><b>A. We had terminated airdrops, so there's no way to get VIPS before listed at this point. </b></span>
                </p>
                <p>
                  <span>Q. What is the plan for increasing the value of VIPS?</span><br>
                  <span><b>A. We plan to increase the number of people who have heard of VIPS at first; then we release an app that enables holders to use VIPS as a payment method. Detailed plans are to be developed.</b></span>
                </p>
                <p>
                  <span>Q. What is NUQUMORITY?</span><br>
                  <span><b>A. NUQUMORITY is the word originated in the VIP community. The word is the combination of a Japanese word 'Nukumori'(tenderness, warmness) and an English word 'Quality.' In 5ch (formerly known as 2ch), the word 'Quality' is sometimes used in the context of expressing an 'identity' of a board. 'NUQUMORITY' is the word to express the tenderness in the VIP community and a slogan to spread it outside the VIP community.</b></span>
                </p>
                <p>
                  <span>Q. Where can I get more information on VIPS?</span><br>
                  <span><b>A. Join our discord community to get the up-to-date information.</b></span>
                </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="button button-bw" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="pointModal" tabindex="-1" role="dialog" aria-labelledby="pointModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title" id="pointModalLabel">6 unique features of VIPS</h4>
                </div>
                <div class="modal-body">
                <p class="modal-text">
                  1. The maximum supply of VIPS is 70 billion. This number is relatively larger than the other cryptcurrencies (BTC:21 million, Litecoin: 84 million and Monacoin: 105 million), resulting in a more active use of sending and receiving among vippers as a means of communication. (This activity is called "Nageai" in Japanese). Moreover,<br>
                  A larger maximum supply is favorable as a coin that can be a matrix of derivative tokens (We are targeting to be the No.1 cryptcurrency originated in Japan, which is equipped with smart contracts function). <br>
                  In case of a stagnated price, we can burn a part of the total amount of coins and promote an increase in price and enhance the liquidity.<br>
                  The maximum supply will be reached in 2120. (53,611,200 blocks)<br>
                </p>
                <p class="modal-text">
                  2. We determine and ensure the budget needed for promoting VIPS before listed. This enables us to continue to conduct marketing, advertisement, and development for a while in the future. <br>
                </p>
                <p class="modal-text">
                  3. We also keep a certain portion of VIPS for distribution ('NUQUMORITY' activities) and provide vipper with VIPS coins periodically. This will contribute to gain support from our original community continuously.<br>
                </p>
                <p class="modal-text">
                  4. Since VIPS is originated from 5ch (formerly known as 2ch) as Monacoin is, strong support from the community can be expected.<br>
                </p>
                <p class="modal-text">
                  5. VIPS has a clear roadmap to the goal. We will continuously incorporate new targets and update the roadmap so that people can invest their money under a clear goal.<br>
                </p>
                <p class="modal-text">
                  6. VIPS has the smart contracts function, which enables a person to create a new VIPS token. In sending tokens, a sender needs VIPS as a fee so there will be the strong continuous demand of VIPS.<br>
                </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="button button-bw" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Roadmap Section -->
<div id="roadmap" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>ROADMAP</h2>
      <hr>
    </div>
    <p class="roadmap-desc">
      We are targeting ...<br>
      to enable VIPS holders to make easy payments with a QR code.<br>
      to support individuals and companies that try to create an original VIPS compliant token.<br>
      to encourage the recovery of devastated areas around the world with the spirit of 'Worldwide Nuqumority'(tenderness for the world).<br>
      Our roadmap is shown below.
    </p>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <h4>2018<br>FEB</h4>
            </div>
            <div class="timeline-panel" style="display: block;">
              <div class="timeline-heading">
                <h4>VIPS PROJECT STARTED</h4>
              </div>
              <div class="timeline-body">
              <p>SPECIAL COMMUNITY EVENTS</p>
              <p>AIRDROPS OF PROTOTYPE OF VIPS TOKENS (ERC20 TOKEN)</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>2018<br>SPRING</h4>
            </div>
            <div class="timeline-panel" style="display: block;">
              <div class="timeline-heading">
                <h4>DEVELOPMENT OF AN ORIGINAL COIN</h4>
              </div>
              <div class="timeline-body">
              <p>COMPLETION OF THE DEVELOPMENT OF ORIGINAL CRYPTCURRENCY</p>
              <p>SWAPPING ETHEREUM VIPSTAR TOKENS FOR THE ORIGINAL COINS</p>
              <p>BEING LISTED ON AN EXCHANGE</p>
              <p>MARKETING OF VIPS / FUNDING FOR FURTHER DEVELOPMENT</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <h4>2018<br>WINTER</h4>
            </div>
            <div class="timeline-panel" style="display: block;">
              <div class="timeline-heading">
                <h4>SERVICES DEVELOPMENT</h4>
              </div>
              <div class="timeline-body">
              <p>STARTING THE DEVELOPMENT OF A SOCIAL GAMING APP* FOR VIPS HOLDERS</p>
              <p>LAUNCHING A FLEA MARKET SERVICE FOR VIPS HOLDERS</p>
              <p>ACQUIRING OFFICIAL RECOGNITION FROM 5CH</p>
              <p>STARTING THE DEVELOPMENT OF A FILE UPLOADER FOR VIPS HOLDERS</p>
              <p>STARTING THE DEVELOPMENT OF A 'WORLDWIDE NUQUMORITY' APP</p>
              <p>*The service will be provided as a smartphone app</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>2019</h4>
            </div>
            <div class="timeline-panel" style="display: block;">
              <div class="timeline-heading">
                <h4>SERVICES EXPANSION</h4>
              </div>
              <div class="timeline-body">
              <p>DONATION TO 2020 TOKYO OLYMPIC COMMITTEE IN VIPS</p>
              <p>DONATION TO DISASTER-STRICKEN AREAS OVER THE WORLD IN VIPS</p>
              <p>RELEASE OF THE FILE UPLOADER SERVICE</p>
              <p>RELEASE OF THE SOCIAL GAMING APP</p>
              <p>COMPLETION OF BETA VERSION OF THE 'WORLDWIDE NUQUMORITY' APP</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <h4>2020~</h4>
            </div>
            <div class="timeline-panel" style="display: block;">
              <div class="timeline-heading">
                <h4>LAUNCHING THE 'WORLDWIDE NUQUMORITY' SERVICE</h4>
              </div>
              <div class="timeline-body">
              <p>The Worldwide Nuqumority is a service that shows organizations in the disaster-stricken areas that hold VIPS wallets.</p>
              <p>VIPS holders can donate to them easily by just pushing a button one time</p>
              <p>VIPS will reach the receiver's wallet faster than sending fiat money and could make purchases without withdrawing money from banks where a VIPS settlement system has been developed.
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Holding Section -->
<div id="holding" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>SUPPLY</h2>
      <hr>
    </div>
    <div class="row">
      <div class="holding-header">
      <p>The initial supply of VIPS is 60 billion.</p>
      <p>Additional supply through PoS and PoW will be 10 billion in total.<br>（This will end in 2120.）</p>
      </div>
      <div class="holding-chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <canvas id="holdingChart" width="400" height="400" style="display: block; height: 200px; width: 200px;" class="chartjs-render-monitor"></canvas>
        <p class="holding-total">60<br>BILLIONS</p>
      </div>
      <input type="hidden" class="js_ctx-label-1" value="Reserve for sale">
      <input type="hidden" class="js_ctx-label-2" value="Technological Development fee">
      <input type="hidden" class="js_ctx-label-3" value="Marketing fee">
      <input type="hidden" class="js_ctx-label-4" value="Airdrops">
      <input type="hidden" class="js_ctx-label-5" value="Reserve by the dev team">
      <div class="col-md-5 col-sm-5 col-md-offset-5 holding-text">
      <p><span class="holding-yellow">■</span> Reserve for sale: 33% </p>
      <p><span class="holding-orange">■</span> Technological Development fee：20%</p>
      <p><span class="holding-red">■</span> Marketing fee: 20%</p>
      <p><span class="holding-purple">■</span> Airdrops：16%</p>
      <p><span class="holding-blue">■</span> Reserve by the dev team：10%</p>
      </div>
      <div class="col-md-12 col-sm-12">
        <p class="holding-attention">
          <b>Initial sale</b>
        </p>
        <p>
        20 billion coins<br>
        We sell the most part at 2 sat.<br>
        Excess supply will be burned and eliminated.
        </p>
        <p class="holding-attention">
          <b>Compensation of MINING</b>
        </p>
        <p>
          For 1~2,000 blocks, the reward of PoS・PoW will be suppressed to 1VIPS.<br>
        </p>
        <p>
          PoS<br>
          VIPS holders are randomly selected as a reward winner of PoS.<br>
          The reward rate is as follows.<br>
          2,001～28,000 block：3,000vips<br>
          28,001～525,600 block：9,500vips<br>
          525,601 block：4,750vips<br>
          From 525,601 block, the reward will be halved at each time 525,600 blocks have been mined.<br>
          （the lower limit is 100 VIPS）<br>
          The final block is 53,611,200th.
        </p>
        <p>
          PoW<br>
          2,001～53,611,200 block: 100vips
        </p>
        <p>Expected annual return: 5%</p>
      </div>
    </div>
  </div>
</div>
<!-- Wallet Section -->
<div id="wallet">
  <div class="container">
    <div class="section-title text-center center">
      <h2>WALLET</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="wallet-swap">
          <p class="wallet-swap-title-b">The ethreum tokens that are initially issued as VIPS token will be swapped for the original cryptcurrency coins.</p>
          <button type="button" class="button button-bw" data-toggle="modal" data-target="#walletModal">
            Our promise&nbsp;&nbsp;<i class="far fa-window-restore"></i>
          </button>
          <!-- Modal -->
          <div class="modal fade" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="walletModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title" id="walletModalLabel">Rules of swaps</h4>
                </div>
                <div class="modal-body">
                  <p class="modal-text">
                  <span>1. Will the difference of the supply between the old token and new coin be considered in swapping?</span><br>
                  <span><b>We will exchange the old token and the new coin at the ratio of 1:1.2.</b></span>
                </p>
                <p class="modal-text">
                  <span>2. How will the decimals be dealt with?</span><br>
                </p>
                <span><b>The decimal portion of the old token will be rounded up in exchanging to the new coin.</b></span>
                <p class="modal-text">
                  <span>3. Can we receive rewards of PoS for the portion of swapped coins?</span><br>
                  <span><b>Yes, you will receive PoS rewards for the portion of swapped coins.</b></span>
                </p>
                <p class="modal-text">
                  <span>4. I only have smartphones and do not have PCs or Mac computers. Can I still join the swap program?</span><br>
                  <span><b>We recommend you use Windows PCs or Mac computers to join the swap program. We will prepare a special procedure to receive new coins for smartphone users after listed on an exchange. However, this procedure will be time-limited, and your tokens will be swapped at the ratio of 1:1 rather than 1:1.2.</b></span>
                </p>
              </div>
                <div class="modal-footer">
                  <button type="button" class="button button-bw" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- News Section -->
<div id="news">
  <div class="container">
    <div class="section-title text-center center">
      <h2>NEWS</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*">ALL</a></li>
            <li><a href="#" data-filter=".new" class="active">NEW</a></li>
            <li><a href="#" data-filter=".develop">DEVELOPING INFO</a></li>
            <li><a href="#" data-filter=".event">EVENTS</a></li>
            <li><a href="#" data-filter=".other">OTHERS</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="news-items">
        <div class="col-sm-6 col-md-3 col-lg-3 other new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="https://www.youtube.com/watch?v=iUzFW0sZ3s0" target="_blank">
                <div class="hover-text">
                  <h4>VIPSガールズアニメ化決定！</h4>
                  <small>2018/04/01<br>（エイプリルフール）</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/other-april-fool-2018.jpg" alt="VIPSガールズアニメ化決定！">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 other new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/%b8%f8%bc%b0%a5%ad%a5%e3%a5%e9%a5%af%a5%bf%a1%bc%a4%cb%a4%c4%a4%a4%a4%c6" target="_blank">
                <div class="hover-text">
                  <h4>公式キャラクター設定画公開</h4>
                  <small>2018/03/26</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/other-chara-sheet.png" alt="公式キャラクター設定画公開">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 develop new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/%c6%c8%bc%ab%c4%cc%b2%df%c6%b0%ba%ee%a5%c6%a5%b9%a5%c8" target="_blank">
                <div class="hover-text">
                  <h4>独自通貨動作テスト (SIKEN)</h4>
                  <small>2018/03/20</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/develop-skn.png" alt="独自通貨動作テスト (SIKEN)">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 event new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/%b8%f8%bc%b0%a5%ad%a5%e3%a5%e9%a5%af%a5%bf%a1%bc%a5%b3%a5%f3%a5%c6%a5%b9%a5%c8%b7%eb%b2%cc%c8%af%c9%bd" target="_blank">
                <div class="hover-text">
                  <h4>公式キャラクターコンテスト 結果発表</h4>
                  <small>2018/03/18</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/event-chara-result.png" alt="公式キャラクターコンテスト結果発表">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 other new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/ryugoroshi/" target="_blank">
                <div class="hover-text">
                  <h4>提携ゲーム「竜殺しの物語」リリース</h4>
                  <small>2018/03/14</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/other-ryugoroshi.jpg" alt="提携ゲーム「竜殺しの物語」リリース">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 develop new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/%a1%da%bd%aa%ce%bb%a1%db%bb%ee%b8%b3%cd%d1%c6%c8%bc%ab%c4%cc%b2%dfTTT%b4%b0%c0%ae" target="_blank">
                <div class="hover-text">
                  <h4>独自通貨動作テスト (TESTSTAR)</h4>
                  <small>2018/03/09</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/develop-ttt.png" alt="独自通貨動作テスト (TESTSTAR)">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 event new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/VIP%a1%f9STAR%20%b8%f8%bc%b0%a5%ad%a5%e3%a5%e9%a5%af%a5%bf%a1%bc%a5%b3%a5%f3%a5%c6%a5%b9%a5%c8%20%a5%a8%a5%f3%a5%c8%a5%ea%a1%bc%b0%ec%cd%f7" target="_blank">
                <div class="hover-text">
                  <h4>VIP☆STAR 公式キャラクターコンテスト</h4>
                  <small>2018/02/26</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/event-chara.jpeg" alt="VIP☆STAR 公式キャラクターコンテスト">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 event new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/%c2%e81%b2%f3VIPS%a5%a2%a5%a4%a5%b3%a5%f3%c5%ea%c9%bc" target="_blank">
                <div class="hover-text">
                  <h4>VIP☆STAR コインアイコンコンテスト</h4>
                  <small>2018/02/19</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/event-icon.jpg" alt="VIP☆STAR コインアイコンコンテスト">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 develop new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="https://ethplorer.io/address/0x7c7c392ab2f9a74bb79ab9e6b1caf6bae0f0f14c" target="_blank">
                <div class="hover-text">
                  <h4>VIP☆STAR 発行</h4>
                  <small>2018/02/17</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/develop-init.png" alt="VIP☆STAR 発行">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Community Section -->
<div id="community" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>COMMUNITY</h2>
      <hr>
    </div>
    <div class="row col-md-8 col-md-offset-2">
      <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-delay="400ms">
        <a href="https://discordapp.com/invite/K5gPZ2h" target="_blank">
          <div class="community-box">
            <i class="fab fa-discord fa-5x"></i>
            <span class="count">2016</span>
            <h4>Members</h4>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-delay="200ms">
        <a href="https://twitter.com/VIPSTARTOKEN" target="_blank">
          <div class="community-box">
            <i class="fab fa-twitter fa-5x"></i>
            <span class="count">1882</span>
            <h4>Followers</h4>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>CONTACT</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-6">
        <a href="mailto:vipstarcoin&#64;gmail.com">
          <i class="far fa-envelope fa-5x"></i>
          <p>vipstarcoin&#64;gmail.com</p>
        </a>
      </div>
      <div class="col-md-6">
        <a href="https://twitter.com/VIPSTARTOKEN" target="_blank">
          <i class="fab fa-twitter fa-5x"></i>
          <p>@VIPSTARTOKEN</p>
        </a>
      </div>
      <div class="clearfix"></div>
      <div class="contact-tweet">
        <a class="twitter-timeline"
           data-width="500"
           data-height="500"
           data-theme="light"
           href="https://twitter.com/VIPSTARTOKEN?ref_src=twsrc%5Etfw">
          Tweets by VIPSTARTOKEN
        </a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <div class="addthis_inline_share_toolbox"></div>
      <p>Copyright &copy; 2018 VIPSTARCOIN. All Rights Reserved.</p>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"
        integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo URL; ?>/js/jquery.isotope.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/js/jquery.counterup.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/js/waypoints.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/js/jquery.inview.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/js/main.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab60eab9e6f635f"></script>
</body>
</html>