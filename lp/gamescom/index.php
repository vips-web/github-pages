<?php
  // if (time() < strtotime('2018-08-13 15:00:00')) {
  //   header('HTTP/1.0 404 Not Found');
  //   exit();
  // }

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
  <title>VIPSTARCOIN in IAB@gamescom</title>

	<meta property="og:title" content="VIPSTARCOIN in IAB@gamescom">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo URL; ?>/lp/gamescom/assets/images/og.png">
  <meta property="og:site_name" content="VIPSTARCOIN">
  <meta name="twitter:card" content="summary_large_image">

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
			    <a class="navbar-brand" href="#top">VIPS in IAB@GC</a>
			  </div>

			  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav mu-menu navbar-right">
			  		<li><a href="#mu-hero">Top</a></li>
		        <li><a href="#mu-about">About</a></li>
		        <li><a href="#mu-video">Trailer</a></li>
			      <li><a href="#mu-vips">VIPS</a></li>
			      <li><a href="#mu-venue">Venue</a></li>
            <li><a href="#mu-faq">FAQ</a></li>
            <li><a href="#mu-next">Next</a></li>
			      <li><a href="<?php echo URL; ?>/lp/gamescom/en/"><i class="fas fa-language"></i> EN</a></li>
			    </ul>
			  </div>
		  </div>
		</nav>

		<div class="mu-hero-overlay">
			<div class="container">
				<div class="mu-hero-area">
					<div class="mu-hero-featured-area">
						<div class="mu-logo-area">
							<a class="mu-logo" href="javascript:;">VIPSTARCOIN in IAB@gamescom</a>
						</div>
						<div class="mu-hero-featured-content">
							<h1>VIPSが世界最大のゲームイベントに参戦！</h1>
							<h2>インディーアリーナブースと提携</h2>
							<p class="mu-event-date-line">2018/08/21-25 ドイツ・ケルンメッセ</p>
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
										<img class="" src="assets/images/about-gc.jpg" alt="">
									  <a href="http://www.gamescom.global/" target="_blank" class="mu-send-msg-btn"><span>gamescom 2018 <i class="fas fa-external-link-alt"></i></span></a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2>gamescomとは</h2>
										<p>ゲームイベントというと日本では東京ゲームショウが有名ですが、世界で最も動員数の多いゲーム見本市は何かご存じですか？</p>
										<p>gamescomは、アメリカのE3（Electronic Entertainment Expo）、日本の東京ゲームショウと並び、世界三大ゲームショウの1つとしても知られる世界最大のゲームイベントです。</p>
										<p>2009年から年1回開催され、昨年2017年の来場者は開催期間5日間で延べ35万人にも及びました。政府関係者も訪れる、ドイツ国内、また世界的にも非常に注目されているイベントです。</p>
                    <p>※世界三大ゲームショウの動員数<br>　gamescom 2017：350,000人<br>　東京ゲームショウ2017：254,311人<br>　E3 2017：68,400人</p>
									</div>
								</div>
							</div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left">
										<h2>インディーアリーナブースとは</h2>
										<p>Indie Arena Booth（以下IAB）とは、gamescom内の重要コンテンツであり、インディーズゲーム開発者の登竜門とも言える世界最大のインディーズゲーム展示スペースです。</p>
										<p>ドイツが国としてゲーム産業の強化に力を入れていることもあり、政府関係者は必ずIABを通ります。（警備上の理由で叶わなかったものの）去年はメルケル首相も来場を希望しておりました。</p>
										<p>例年出展ブース数を大幅に超える応募があり、厳しい審査で選ばれたチームのみが出展可能となっています。今まで日本からの参加者はありません。2017年には30カ国より80チームが参加しています。</p>
										<p>規模・知名度ともに世界規模のイベントであり、スポンサーにはドイツゲーム協会、欧州で知名度のあるテレビ局ARTEやUtomik等がついており、また、ノルトライン＝ヴェストファーレン州首相がパートナーに名を連ねています。</p>
                  </div>
                </div>
								<div class="col-md-6">
									<div class="mu-about-right text-center">
										<img class="" src="assets/images/about-iab.jpg" alt="">
									  <a href="https://www.indiearenabooth.de/gamescom2018/games" target="_blank" class="mu-send-msg-btn"><span>Indie Arena Booth 2018 <i class="fas fa-external-link-alt"></i></span></a>
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
								<h2>Indie Arena Booth trailer 2018</h2>
								<a class="mu-video-play-btn" href="#"><i class="fa fa-play" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="mu-video-content">
				<div class="mu-video-iframe-area">
					<a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
					<iframe width="854" height="480" src="https://www.youtube.com/embed/4BcOM8CsM5s?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</section>

		<section id="mu-vips">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
              <div class="mu-title-area">
              	<h2 class="mu-title">VIPS in IAB@gamescom</h2>
              </div>

							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left text-center">
										<img class="" src="assets/images/vips-coin.png" alt="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2>IABコインにVIPSTARCOINが起用</h2>
										<p>金銭的なやり取りが基本的に禁止されているgamescomですが、IABではVIPSTARCOINのロゴを模した会場内専用通貨（IABコイン）が登場します。</p>
			              <p>参加者は会場内に設置された特製自販機からコインを購入し、IABのあらゆる物販の支払いに使用することができます。</p>
			              <p>イベント参加の記念に、応援している開発者への投げ銭として、物販を利用したい等、購入する動機は人それぞれでしょう。VIPSTARCOINは「世界最大のイベントで買い物をする楽しさ」を数多くの人に提供します。</p>
									</div>
								</div>
							</div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left">
                    <h2>VIPSTARCOINをもっと知ってもらうために</h2>
                    <p>VIPSTARCOINのヌクモリンクは非常に便利で寄付や投げ銭のハードルを大きく下げています。しかし、いくら優れた機能でも多くの人に知ってもらい、実際に使ってもらえなければ意味がありません。</p>
                    <p>そこで自分の気に入った作品に投げ銭をして応援する楽しさを知ってもらうため、専用の体験サイトを準備しています。体験サイトでは少量のVIPSTARCOINが配布され、各種ウォレットから気軽に投げ銭を行なうことができます。</p>
                    <p>会場内ではVIPSTARCOINをより知ってもらうために、無償配布のパンフレットが特別に設置されます。来場者に楽しさを提供するVIPSTARCOINはどのようなものなのか。その思想と技術力の高さ、そしてヌクモリティを世界に向けて発信します。</p>
                  </div>
                </div>
								<div class="col-md-6">
									<div class="mu-about-right text-center">
										<img class="" src="assets/images/vips-pamphlet.png" alt="">
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
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.834634933826!2d6.977139615645628!3d50.94527117954668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc54e469ee439d3e2!2sGamescom!5e0!3m2!1sja!2sjp!4v1532855940795" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>

					<div class="col-md-6">
						<div class="mu-venue-address">
							<h2>会場</h2>
							<h3>ドイツ・ケルンメッセ</h3>
							<h4>Koelnmesse GmbH<br>Messeplatz 1<br>50679 Cologne, Germany</h4>
							<p>ケルン・メッセ/ドイツ駅前</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="mu-faq">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-faq-area">
							<div class="mu-title-area">
								<h2 class="mu-title">FAQ</h2>
							</div>

							<div class="mu-faq-content">
								<div class="panel-group" id="accordion">
							  	<div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">
							            <span class="fa fa-angle-up"></span> 仮想通貨ではなく物理トークンなのはなぜですか？
							          </a>
							        </h4>
							      </div>
							      <div id="collapse1" class="panel-collapse collapse in">
							        <div class="panel-body">
											  仮想通貨をいきなり導入するのは、残念ながら現状ではユーザーフレンドリーではないと言わざるをえません。<br>
                        そのため、VIPSの評価を逆に下げてしまう可能性が高いと判断し、リアルコインを用いた物理トークンを用いることに決定しました。<br>
                        トークン購入時には専門スタッフがVIPSについての説明を行い、会場内にはVIPSのパンフレットが特別に多数配置されます。
                      </div>
							      </div>
									</div>

									<div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
							            <span class="fa fa-angle-down"></span> 提携の目的は何ですか？
							          </a>
							        </h4>
							      </div>
							      <div id="collapse2" class="panel-collapse collapse">
							        <div class="panel-body">
											  法定通貨でトークンを購入し会場内で利用するという行為には「物理」か「仮想」かという違いはあるものの、独自の経済圏の形成という意味で非常に有意義なものです。<br>
                        今回の提携では「単純に仮想通貨を導入すること」ではなく、「ユーザーには楽しさを提供し、我々は経済圏形成のための経験を積む」ことを目的としています。
                      </div>
							      </div>
									</div>

							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
							            <span class="fa fa-angle-down"></span> インディーアリーナブースって、ブースってことはサークルと提携したって事？
							          </a>
							        </h4>
							      </div>
							      <div id="collapse3" class="panel-collapse collapse">
							        <div class="panel-body">
												Indie Arena Boothとはサークルではなく、gamescom内の重要コンテンツであり、インディーズゲーム開発者の登竜門とも言える世界最大のインディーズゲーム展示スペースです。<br>
												例年出展ブース数を大幅に超える応募があり、厳しい審査で選ばれたチームのみが出展可能となっています。<br>
												スポンサーにはドイツゲーム協会、欧州で知名度のあるテレビ局ARTEやUtomik等がついており、また、ノルトライン＝ヴェストファーレン州首相がパートナーに名を連ねています。
                      </div>
							      </div>
							    </div>

							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
							            <span class="fa fa-angle-down"></span> 誰が行くの？
							          </a>
							        </h4>
							      </div>
							      <div id="collapse4" class="panel-collapse collapse">
							        <div class="panel-body">
										  	会場にはたくぞう、oruteペアが行きます。<br>
										  	今回は時間、スケジュール共に余裕がありそうなので、じっくり会場をレポートしてたくさん皆さんに報告できると思います。謎の狐面男との再会も！<br>
										  	更に、シルバースポンサーなのでIABの舞台上で挨拶させてもらえるかも！？VIPSTARCOINのブログ、コミュニティー等で要チェック！！
							        </div>
							      </div>
									</div>

									<div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
							            <span class="fa fa-angle-down"></span> コインの日本向け販売はあるの？
							          </a>
							        </h4>
							      </div>
							      <div id="collapse5" class="panel-collapse collapse">
							        <div class="panel-body">
										  	今のところ販売は考えておりませんが、現地でいくつか持って帰っていいかを聞いてみて、何かイベント等の特典に加えたいです。
							        </div>
							      </div>
									</div>

									<div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
							            <span class="fa fa-angle-down"></span> 今後のイベントで、リアルコインではなくVIPSもしくはVIPSトークンを使う予定、計画はあるの？
							          </a>
							        </h4>
							      </div>
							      <div id="collapse6" class="panel-collapse collapse">
							        <div class="panel-body">
											  今回の提携により相手方に「おもしろそう！」と興味を持っていただけたので、今後ブロックチェーン技術、仮想通貨が世界に認められていくにつれて実現の可能性は上がっていくと思いますし、我々も推奨していく予定です。
							        </div>
							      </div>
									</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="mu-next">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<div class="mu-logo-area">
							  <a class="mu-logo" href="javascript:;">What's next?</a>
					  	</div>

							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left text-center">
										<img class="" src="assets/images/next-fun.jpg" alt="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2>楽しさを、買おう。</h2>
                    <p>皆さんは子供の頃に、新しいゲームを手にいれたときのあの感覚を覚えていますか？</p>
										<p>ドキドキワクワクしてきっと最高な気持ちになったことでしょう。gamescomはそんな気持ちにさせてくれる楽しいコーナーが盛り沢山のイベントです。</p>
										<p>IAB様との提携はVIPSTARCOINのコンセプト「楽しさを、買おう。」から生まれたものでもあり、インディーズゲームという売り上げよりもファンを楽しませることに重きを置いたコンテンツは、VIPSTARCOINととても相性の良いものだと思います。</p>
										<p>インディーズゲームコミュニティを盛り上げて来たIAB様と一緒に、これからもゲームという万人が経験できる「楽しさ」の輪を広げていきたいと思っております。</p>
									</div>
								</div>
							</div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left">
                    <h2>今後のスケジュール</h2>
                    <p>VIPSTARCOINは今回のIAB様との企画のように「楽しさを、買おう。」をコンセプトとした独自のプロジェクトを次々と展開していく予定です。</p>
					          <p>仮想通貨と言えば、投資、投機のイメージがありますが、VIPSTARCOINは持っていることで楽しいことが次々に起こるような、そんな通貨を皆様と一緒に創っていきたいと思っております。その為に、常に皆様が驚き、楽しいと思ってくれる事にチャレンジし続けていきます。</p>
										<p>現在もキャラクターグッズから始まりオリジナルゲームの開発や、仮想通貨ならではの新しいシステムの開発等様々な企画を進行させています。</p>
										<p>今シーズン中に新しい動きが控えていますのでご期待下さい！！</p>
                  </div>
                </div>
								<div class="col-md-6">
									<div class="mu-about-right text-center">
										<img class="" src="assets/images/next-schedule.jpg" alt="">
									</div>
								</div>
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
						<p>
				  		"<a href="https://www.flickr.com/photos/sergesegal/9591148650/" target="_blank">Titanfall robot at Gamescom 2013</a>"
				  		by <a href="https://www.flickr.com/photos/sergesegal/" target="_blank">Sergey Galyonkin</a>
				  		is licensed under <a href="https://creativecommons.org/licenses/by-sa/2.0/" target="_blank">CC BY-SA 2.0</a>
						</p>
						<p>
				  		"<a href="https://www.flickr.com/photos/134564539@N05/29089898082/" target="_blank">Indie Arena Booth 2016</a>"
				  		by <a href="https://www.flickr.com/photos/134564539@N05/" target="_blank">Jana Reinhardt</a>
				  		is licensed under <a href="https://creativecommons.org/licenses/by/2.0/" target="_blank">CC BY 2.0</a>
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
  <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>
  <script type="text/javascript" src="assets/js/custom.js"></script>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab60eab9e6f635f"></script>
</body>
</html>
