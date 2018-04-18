<!-- Wallet Section -->
<div id="wallet">
  <div class="container">
    <div class="section-title text-center center">
      <h2>WALLET</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="wallet-button">
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_win_normal.zip">
            <img src="<?php echo URL; ?>/img/wallet/win-normal.png" alt="" width="161" height="51">
          </a>
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_mac_normal.zip">
            <img src="<?php echo URL; ?>/img/wallet/mac-normal.png" alt="" width="161" height="51">
          </a><br>
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_win_ms_vips.zip">
            <img src="<?php echo URL; ?>/img/wallet/win-ms-vips.png" alt="" width="161" height="51">
          </a>
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_mac_ms_vips.zip">
            <img src="<?php echo URL; ?>/img/wallet/mac-ms-vips.png" alt="" width="161" height="51">
          </a><br><br>
          <a href="<?php echo URL; ?>/download/how_to_use_en.pdf" class="button button-bw" target="_blank">
            HOW TO USE&nbsp;&nbsp;<i class="fas fa-file-pdf"></i>
          </a><br>
          <a href="http://explorer.vipstarcoin.jp/" class="button button-bw" target="_blank">
            VIPSTARCOIN EXPLORER&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
          </a>
        </div>
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
                  <span><b>
                    We recommend you use Windows PCs or Mac computers to join the swap program.<br>
                    We will prepare a special procedure to receive new coins for smartphone users after listed on an exchange. However, this procedure will be time-limited, and your tokens will be swapped at the ratio of 1:1 rather than 1:1.2.
                  </b></span>
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
