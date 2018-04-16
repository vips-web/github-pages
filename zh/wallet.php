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
          </a><br>
          <a href="http://explorer.vipstarcoin.jp/" class="button button-bw" target="_blank">
            VIPSTARCOIN Explorer&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
          </a>
        </div>
        <div class="wallet-swap">
          <p class="wallet-swap-title-b">SWAP</p>
          <button type="button" class="button button-bw" data-toggle="modal" data-target="#walletModal">
             我们保证&nbsp;&nbsp;<i class="far fa-window-restore"></i>
          </button>
          <!-- Modal -->
          <div class="modal fade" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="walletModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="walletModalLabel">交换规则</h4>
                </div>
                <div class="modal-body">
                  <p class="modal-text">
                    <span>1. 交换时是否考虑旧货币与新硬币之间的供给差异？</span><br>
                    <span><b>我们会以1：1.2的比例兑换旧的代币和新的硬币。</b></span>
                  </p>
                  <p class="modal-text">
                    <span>2. 小​​​数如何处理？</span><br>
                    <span><b>旧货币的小数部分将被计入到新硬币中。</b></span>
                  </p>
                  <p class="modal-text">
                    <span>3. 我们可以收到交换硬币部分的PoS奖励吗？</span><br>
                    <span><b>是的，您将获得交换硬币部分的PoS奖励。</b></span>
                  </p>
                  <p class="modal-text">
                    <span>4. 我只有智能手机，没有PC或Mac电脑。我还可以加入交换计划吗？</span><br>
                    <span><b>我们建议您使用Windows PC或Mac电脑加入交换程序。我们将准备一个特殊程序，以便在交易所上市后为智能手机用户接收新硬币。但是，此过程将受到时间限制，您的货币将以1：1而不是1：1.2的比例进行交换。</b></span>
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
