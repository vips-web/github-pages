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
            <img src="<?php echo URL; ?>/img/wallet/win-normal.png" alt="normal WALLET for Win" width="161" height="51">
          </a>
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_mac_normal_1.0.2.zip">
            <img src="<?php echo URL; ?>/img/wallet/mac-normal.png" alt="normal WALLET for Mac" width="161" height="51">
          </a><br>
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_win_ms_vips_1.0.2.zip">
            <img src="<?php echo URL; ?>/img/wallet/win-ms-vips.png" alt="Ms. VIPS WALLET for Win" width="161" height="51">
          </a>
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_mac_ms_vips_1.0.2.zip">
            <img src="<?php echo URL; ?>/img/wallet/mac-ms-vips.png" alt="Ms. VIPS WALLET for Mac" width="161" height="51">
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
          <br><br><br>
          <a href="https://electrum-vips.info" class="wallet-electrum" target="_blank">
            <img src="<?php echo URL; ?>/img/wallet/electrum.png" alt="VIPSTARCOIN electrum" width="210">
          </a>
          <?php if ($lang == 'ja' || $lang == 'vip'): ?>
            <br>
            <a href="https://wiki.vipstarcoin.jp/doku.php?id=wiki:electrum" class="button button-bw" target="_blank">
              Electrum 導入方法&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
            </a>
          <?php endif; ?>
          <br><br><br>
          <?php if ($lang == 'ja' || $lang == 'vip'): ?>
            <a href="https://monya-wallet.github.io/" class="button button-bw wallet-button-monya" target="_blank">
              もにゃ
            </a>
            <br>
            <a href="https://wiki.vipstarcoin.jp/doku.php?id=wiki:monya" class="button button-bw" target="_blank">
              もにゃ 導入方法&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
            </a>
          <?php else: ?>
            <a href="https://monya-wallet.github.io/wallet/" class="button button-bw wallet-button-monya" target="_blank">
              Monya
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
