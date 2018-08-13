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
  <title>VIPSTARCOIN in IAB@gamescom</title>

	<meta property="og:title" content="VIPSTARCOIN in IAB@gamescom">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo URL; ?>/lp/gamescom/assets/images/og-en.png">
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
  <link id="switcher" href="../assets/css/theme-color/vips-theme.css" rel="stylesheet">
  <!-- Main Style -->
  <link href="../assets/css/style.css" rel="stylesheet">

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
			      <li><a href="<?php echo URL; ?>/lp/gamescom/"><i class="fas fa-language"></i> JP</a></li>
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
							<h1>VIPS joins the world's biggest games event!</h1>
							<h2>The partnership with the Indie Arena Booth</h2>
							<p class="mu-event-date-line">21.–25.08.2018 Koelnmesse, Germany</p>
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
										<img class="" src="../assets/images/about-gc.jpg" alt="">
									  <a href="http://www.gamescom.global/" target="_blank" class="mu-send-msg-btn"><span>gamescom 2018 <i class="fas fa-external-link-alt"></i></span></a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2>What’s gamescom?</h2>
										<p>Tokyo Game Show is a famous game event in Japan, but do you know what is the most popular game fair in the world?</p>
                    <p>“gamescom” is the world's largest game event, also known as three biggest game fairs together with the American E3 (Electronic Entertainment Expo) and Tokyo Game Show.</p>
										<p>
											It has been held once a year since 2009, and last year (2017), 350,000 people visited the event in 5 days; even government officials visit.<br>
											gamescom gets attention from Germany and all over the world.
										</p>
                    <p>*Number of visitors of the world’s three biggest game fairs in 2017<br>&nbsp;&nbsp;Gamescom: 350,000<br>&nbsp;&nbsp;Tokyo Game Show: 254,311<br>&nbsp;&nbsp;E3: 68,400</p>
									</div>
								</div>
							</div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left">
										<h2>What’s Indie Arena Booth?</h2>
										<p>Indie Arena Booth（IAB）is the world’s largest indie-game exhibition at gamescom, which is a kind of “gateway” for indie-game developers.
										<p>
											Because Germany is focusing on developing the game industry, government officials always go through the IAB.<br>
											Prime Minister Merkel also hoped to visit last year (although it did not happen for security reasons).
										</p>
				            <p>
											There are numerous applications every year, and only teams selected by strict screening can join the exhibition.<br>
											No Japanese teams have joined, but 80 teams from 30 countries participated in 2017.
										</p>
	                  <p>
	                  	gamescom is a worldwide event both for the name and reputation. German Game Industry Association and well-known broadcasting companies, such as ARTE and Utomik, are sponsoring the event.<br>
	                  	Furthermore, prime minister of Nordrhein-Westfalen is also listed as a partner.
	                  </p>
                  </div>
                </div>
								<div class="col-md-6">
									<div class="mu-about-right text-center">
										<img class="" src="../assets/images/about-iab.jpg" alt="">
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
										<img class="" src="../assets/images/vips-coin.png" alt="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2>VIPSTARCOIN is chosen for the IAB coin</h2>
										<p>Even though monetary transactions are prohibited in gamescom, a special currency (IAB coin) with VIPSTARCOIN logo will appear at the booth.</p>
										<p>Visitors can purchase coins from special vending machines and use them for payment of all goods in the IAB.</p>
										<p>Everyone may have a different reason to purchase the coin, like for a memory, for supporting developers, or for purchasing goods.</p>
										<p>VIPSTARCOIN will offer “a fun to do shopping at the world’s biggest event” to many people.</p>
									</div>
								</div>
							</div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left">
										<h2>To make VIPSTARCOIN more popular</h2>
										<p>
											Nukumolink of VIPSTARCOIN is very convenient and greatly reduces the barrier for donation and contribution.<br>
											However, no matter how convenient it is, it can be meaningless if people do not use it.
										</p>
                    <p>
											Thus, to let people know “the fun” of contributing to and supporting their favorite works, we’re currently preparing a trial website.<br>
											In the trial website, a small amount of VIPSTARCOIN will be distributed, and you can contribute them casually from various wallets.
										</p>
                    <p>
											For further VIPS recognition, free booklet will also be distributed at the booth.<br>
											We will transfer what is “fun-making” VIPSTARCOIN, its sophisticated vision and technology, and Nukumolity to the world.
										</p>
                  </div>
                </div>
								<div class="col-md-6">
									<div class="mu-about-right text-center">
										<img class="" src="../assets/images/vips-pamphlet.png" alt="">
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
							<h2>Venue</h2>
							<h3>Koelnmesse, Germany</h3>
							<h4>Koelnmesse GmbH<br>Messeplatz 1<br>50679 Cologne, Germany</h4>
							<p>Köln Messe/Deutz station</p>
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
							            <span class="fa fa-angle-up"></span> Why not cryptocurrency but fisical coin?
							          </a>
							        </h4>
							      </div>
							      <div id="collapse1" class="panel-collapse collapse in">
							        <div class="panel-body">
												From our experience out of CoAket, we found that barrier to use cryptocurrency is pretty high for newly interested users.<br>
												Therefore, we decided that rather than bothering IAB participants by asking to install wallet/QR code reader etc, it will be beneficial to start from fisical coin (IAB coin) to get VIPS known.<br>
                        On exchanging IAB coins with cash, designated staff will explain what VIPS is, and there will be some places people can receive booklet of VIPS including who we are, and how to own/use VIPS.
                      </div>
							      </div>
							    </div>

									<div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
							            <span class="fa fa-angle-down"></span> What is purpose of the partnership?
							          </a>
							        </h4>
							      </div>
							      <div id="collapse2" class="panel-collapse collapse">
							        <div class="panel-body">
											  While there are some differences between whether it is "fisical" or "virtual," we find that exchanging IAB coin with cash and using in designated areas is meaningful learning experience for us on making unique economic ecosystem.<br>
                        Therefore, we aim not to merely "introduce cryptocurrency," but "provide some "fun" to participants and gain experiences on creating unique economic ecosystem."
							        </div>
							      </div>
									</div>

							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
							            <span class="fa fa-angle-down"></span> Indie Arena Booth means "a booth," so you partnered with one of numbers of participants?
							          </a>
							        </h4>
							      </div>
							      <div id="collapse3" class="panel-collapse collapse">
							        <div class="panel-body">
												IAB is not one of corporate/fan participants.<br>
												IAB is one of major contens of gamescom, a gateway for indies game developers and the largest exhibition outlet in the world.<br>
												There are numerous applications every year, and only teams selected by strict screening can join the exhibition.<br>
												German Game Industry Association and well-known broadcasting companies, such as ARTE and Utomik, are sponsoring the event.<br>
												Furthermore, prime minister of Nordrhein-Westfalen is also listed as a partner.
                      </div>
							      </div>
							    </div>

							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
							            <span class="fa fa-angle-down"></span> Who goes there?
							          </a>
							        </h4>
							      </div>
							      <div id="collapse4" class="panel-collapse collapse">
							        <div class="panel-body">
											  Takuzo and orute will be on site.<br>
                      	As we have some time this time, we will walk around the event and could report details of the event. We also meet anonymous "Fox man"!<br>
                        In addition, we may get on the stage as a silversponser!? Keep your eyes on VIPSTACOIN blog, Discord community etc!
							        </div>
							      </div>
									</div>

									<div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
							            <span class="fa fa-angle-down"></span> Are you going to sell those coins?
							          </a>
							        </h4>
							      </div>
							      <div id="collapse5" class="panel-collapse collapse">
							        <div class="panel-body">
												We are not currently planning to sell those coins.<br>
												We may ask if we could bring back some and use as presents for future events
							        </div>
							      </div>
									</div>

									<div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
							            <span class="fa fa-angle-down"></span> Are you planning to use VIPS or VIPS tokens instead of real coins at a future event?
							          </a>
							        </h4>
							      </div>
							      <div id="collapse6" class="panel-collapse collapse">
							        <div class="panel-body">
												Through this partnership, we hope IAB team find concept and technology of crypyocurrency interesting.<br>
												We expect such chances increase as blockchain technology and cryptocurrencty get known to public.<br>
												We continue to serve as the ambassador to cryptocurrency world.
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
										<img class="" src="../assets/images/next-fun.jpg" alt="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2>Let’s buy 'fun'.</h2>
										<p>Do you remember the feeling from childhood when you got a new game?</p>
										<p>
											You must have been really excited and had an excellent feeling.<br>
											gamescom is an event full of opportunities that remind visitors of such feelings.
										</p>
										<p>
											The cooperation with IAB is based on the concept of VIPSTARCOIN, "Let's buy 'fun.'"<br>
											We are confide that content of IAB, the "Indies Games", which are more about entertaining fans than just sales, fits perfectly with VIPSTARCOIN's vision.
							      </p>
										<p>Together with IAB, which has so far made the Indie Games’ Communities prosperous, we would expand the world of "fun" with games that everyone can experience.</p>
									</div>
								</div>
							</div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mu-about-left">
										<h2>Next Steps</h2>
										<p>As with this project with IAB, VIPSTARCION will start further projects, based on our concept "Let's buy fun".</p>
                    <p>
											We are aware that, in general, terms like "investments" or "speculations" are the images associated the term "cryptocurrencies".<br>
											However, we, VIPSTARCOIN want to work with you together to develop a currency that will make everyone feel "fun" as you stay on board.<br>
											That's why we take on every challenges to create something that will always surprise and entertain you.
										</p>
                    <p>Projects such as the production of VIPS original merchandising items, the development of own games and new systems, which are only made possible by cryptocurrencies, are currently underway.</p>
                    <p>
											New movements are already starting this season.<br>
											Stay tuned!
										</p>
                  </div>
                </div>
								<div class="col-md-6">
									<div class="mu-about-right text-center">
										<img class="" src="../assets/images/next-schedule.jpg" alt="">
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
  <script type="text/javascript" src="../assets/js/jquery.countdown.min.js"></script>
  <script type="text/javascript" src="../assets/js/app.js"></script>
  <script type="text/javascript" src="../assets/js/custom.js"></script>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab60eab9e6f635f"></script>
</body>
</html>
