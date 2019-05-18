<div id="wallet">
  <div class="container">
    <div class="section-title text-center center">
      <h2>WALLET</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="wallet-button">
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_win_normal_1.0.2.zip">
            <img src="<?php echo URL; ?>/img/wallet/win-normal.png" alt="" width="161" height="51">
          </a>
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_mac_normal_1.0.2.zip">
            <img src="<?php echo URL; ?>/img/wallet/mac-normal.png" alt="" width="161" height="51">
          </a><br>
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_win_ms_vips_1.0.2.zip">
            <img src="<?php echo URL; ?>/img/wallet/win-ms-vips.png" alt="" width="161" height="51">
          </a>
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_mac_ms_vips_1.0.2.zip">
            <img src="<?php echo URL; ?>/img/wallet/mac-ms-vips.png" alt="" width="161" height="51">
          </a><br>
          <?php if ($lang == 'ja' || $lang == 'vip'): ?>
            <a href="https://wiki.vipstarcoin.jp/doku.php?id=wiki:pc_wallet" class="button button-bw" target="_blank">
              PC 導入方法&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
            </a>
          <?php else: ?>
            <a href="<?php echo URL; ?>/download/how_to_use_en.pdf" class="button button-bw" target="_blank">
              HOW TO USE&nbsp;&nbsp;<i class="fas fa-file-pdf"></i>
            </a>
          <?php endif; ?>
          <br><br>
          <a href='https://play.google.com/store/apps/details?id=jp.vipstarcoin.wallet' target="_blank">
            <img alt='Get it on Google Play' src='https://play.google.com/intl/ja/badges/images/generic/en_badge_web_generic.png' width="190"/>
          </a><br>
          <?php if ($lang == 'ja' || $lang == 'vip'): ?>
            <a href="https://wiki.vipstarcoin.jp/doku.php?id=wiki:android_wallet" class="button button-bw" target="_blank">
              Android 導入方法&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
            </a>
          <?php else: ?>
            <a href="https://www.vipstarcoin.jp/blog/2018/08/14/how-to-install-android-wallet/" class="button button-bw" target="_blank">
              HOW TO USE&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
            </a>
          <?php endif; ?>
          <br><br><br>
          <a href="https://wallet.vipstarco.in/" class="button button-bw wallet-button-web" target="_blank">
            <i class="fas fa-globe"></i>&nbsp;&nbsp;WEB WALLET</i>
          </a>
          <?php if ($lang == 'ja' || $lang == 'vip'): ?>
            <br>
            <a href="https://wiki.vipstarcoin.jp/doku.php?id=wiki:web_wallet" class="button button-bw" target="_blank">
              Web 導入方法&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
