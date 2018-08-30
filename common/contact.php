<!-- Contact Section -->
<?php
  if ($lang == 'ja' || $lang == 'vip') {
    $twitter_account = 'VIPSTARCOIN';
  } else {
    $twitter_account = 'VIPSTARCOIN_';
  }
?>
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
        <a href="https://twitter.com/<?php echo $twitter_account; ?>" target="_blank">
          <i class="fab fa-twitter fa-5x"></i>
          <p>@<?php echo $twitter_account; ?></p>
        </a>
      </div>
      <div class="clearfix"></div>
      <div class="contact-tweet">
        <a class="twitter-timeline"
           data-width="500"
           data-height="500"
           data-theme="light"
           href="https://twitter.com/<?php echo $twitter_account; ?>?ref_src=twsrc%5Etfw">
          Tweets by <?php echo $twitter_account; ?>
        </a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <div class="contact-blog">
        <!-- start feedwind code -->
        <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="84945/"></script>
        <!-- end feedwind code -->
      </div>
      <div class="social">
        <ul>
          <li><a href="https://discord.gg/sEaaxau" target="_blank">
            <i class="fab fa-discord fa-4x"></i></i>
          </a></li>
          <li><a href="https://twitter.com/<?php echo $twitter_account; ?>" target="_blank">
            <i class="fab fa-twitter-square fa-4x"></i></i>
          </a></li>
          <li><a href="https://www.facebook.com/VIPSTARCoinOfficial/" target="_blank">
            <i class="fab fa-facebook-square fa-4x"></i></i>
          </a></li>
          <li><a href="http://seesaawiki.jp/vips/" target="_blank">
            <i class="fas fa-edit fa-4x"></i>
          </a></li>
          <br>
          <li><a href="https://t.me/vipstarcoin_officiai" target="_blank">
            <i class="fab fa-telegram fa-4x"></i></i>
          </a></li>
          <li><a href="https://bitcointalk.org/index.php?topic=3338434.0" target="_blank">
            <i class="fab fa-bitcoin fa-4x"></i></i>
          </a></li>
          <li><a href="https://www.reddit.com/r/VipStarCoin/" target="_blank">
            <i class="fab fa-reddit fa-4x"></i></i>
          </a></li>
          <li><a href="https://github.com/VIPSTARCOIN" target="_blank">
            <i class="fab fa-github fa-4x"></i>
          </a></li>
          <li><a href="https://www.vipstarcoin.jp/blog/" target="_blank">
            <i class="fab fa-wordpress fa-4x"></i>
          </a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
