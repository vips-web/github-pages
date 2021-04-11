<div id="tool">
  <div class="container">
    <div class="section-title text-center center">
      <h2>TOOL</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="tool-button">
          <a class="button button-bw" href="#" data-toggle="modal" data-target="#tippingModal">
            TIPPING TOOL&nbsp;&nbsp;<i class="far fa-window-restore"></i>
          </a><br>
          <a class="button button-bw" href="#" data-toggle="modal" data-target="#miningModal">
            MINING TOOL&nbsp;&nbsp;<i class="far fa-window-restore"></i>
          </a><br>
          <a class="button button-bw" href="#" data-toggle="modal" data-target="#vipsvipModal">
            vipsvip&nbsp;&nbsp;<i class="far fa-window-restore"></i>
          </a><br>
          <a class="button button-bw" href="#" data-toggle="modal" data-target="#insightModal">
            VIPSTARCOIN Insight&nbsp;&nbsp;<i class="far fa-window-restore"></i>
          </a><br>
          <a href="http://explorer.vipstarcoin.jp/" class="button button-bw" target="_blank">
            VIPSTARCOIN Explorer&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="modal fade" id="tippingModal" tabindex="-1" role="dialog" aria-labelledby="tippingModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="tippingModalLabel">TIPPING TOOL</h4>
          </div>
          <div class="modal-body">
            <a href="https://fkfk.github.io/vips/qrcode/" class="button button-bw" target="_blank">
              QRCode Generator&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
            </a><br>
            <a href="https://github.com/vips-web/github-pages/raw/master/download/QRVipsWin-1.1.2.zip" class="button button-bw" target="_blank">
              QRVIPS (Win)&nbsp;&nbsp;<i class="fas fa-file-archive"></i>
            </a><br>
            <a href="https://github.com/vips-web/github-pages/raw/master/download/QRVipsMac-1.1.2.dmg" class="button button-bw" target="_blank">
              QRVIPS (Mac)&nbsp;&nbsp;<i class="fas fa-file-archive"></i>
            </a><br>
            <a href="https://github.com/vips-web/github-pages/raw/master/download/RegVIPS-1.0.3.zip" class="button button-bw" target="_blank">
              RegVIPS (Win)&nbsp;&nbsp;<i class="fas fa-file-archive"></i>
            </a><br>
            <a href="https://github.com/vips-web/github-pages/raw/master/download/VipsSender-JaneStyle-1.0.0.zip" class="button button-bw" target="_blank">
              <?php echo ($lang == 'ja' || $lang == 'vip') ? 'JaneStyle簡単チップツール' : 'VipsSender for JaneStyle'; ?> (Win)&nbsp;&nbsp;<i class="fas fa-file-archive"></i>
            </a><br>
            <a href="https://github.com/vips-web/github-pages/raw/master/download/VipsSender-InternetExplorer-1.0.1.zip" class="button button-bw" target="_blank">
              <?php echo ($lang == 'ja' || $lang == 'vip') ? 'InternetExplorer簡単チップツール' : 'VipsSender for InternetExplorer'; ?>  (Win)&nbsp;&nbsp;<i class="fas fa-file-archive"></i>
            </a><br>
            <a href="https://github.com/takana-v/VIPS_Message/releases/download/v1.0.1/VIPS_Message_1_0_1.zip" class="button button-bw" target="_blank">
              VIPS Message (Win)&nbsp;&nbsp;<i class="fas fa-file-archive"></i>
            </a>
          </div>
          <div class="modal-footer">
            <button type="button" class="button button-bw" data-dismiss="modal">CLOSE</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="miningModal" tabindex="-1" role="dialog" aria-labelledby="miningModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="miningModalLabel">MINING TOOL</h4>
          </div>
          <div class="modal-body">
            <a href="https://github.com/vips-web/github-pages/raw/master/download/MiningHelperWin-1.0.3.zip" class="button button-bw" target="_blank">
              Mining Helper (Win)&nbsp;&nbsp;<i class="fas fa-file-archive"></i>
            </a><br>
            <a href="https://github.com/vips-web/github-pages/raw/master/download/MiningHelperMac-1.0.2.dmg" class="button button-bw" target="_blank">
              Mining Helper (Mac)&nbsp;&nbsp;<i class="fas fa-file-archive"></i>
            </a><br>
            <a href="https://github.com/vips-web/github-pages/raw/master/download/ccminer.zip" class="button button-bw" target="_blank">
              CCminer&nbsp;&nbsp;<i class="fas fa-file-archive"></i>
            </a>
          </div>
          <div class="modal-footer">
            <button type="button" class="button button-bw" data-dismiss="modal">CLOSE</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="vipsvipModal" tabindex="-1" role="dialog" aria-labelledby="vipsvipModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="vipsvipModalLabel">vipsvip</h4>
          </div>
          <div class="modal-body">
            <p class="modal-text">
              vipsvip by takana_<br>
              version 0.0.1<br>
              <br>
              このソフトウェアはVIPS上で動く特定のスマートコントラクトを操作し、<br>
              掲示板のような機能を提供します。<br>
              簡単に説明すると、VIPS上で動く5chみたいな掲示板にアクセスできるようにするソフトです。
              <br><br>
            </p>
            <a href="https://drive.google.com/file/d/1SGfAAnVOkwfB9BWt5CXqTUa5vELuYDju/view?usp=sharing" class="button button-bw" target="_blank">
              vipsvip&nbsp;&nbsp;<i class="fas fa-file-archive"></i>
            </a>
          </div>
          <div class="modal-footer">
            <button type="button" class="button button-bw" data-dismiss="modal">CLOSE</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="insightModal" tabindex="-1" role="dialog" aria-labelledby="insightModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="insightModalLabel">VIPSTARCOIN Insight</h4>
          </div>
          <div class="modal-body">
            <a href="https://insight.vipstarcoin.jp/" class="button button-bw" target="_blank">
              https://insight.vipstarcoin.jp/&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
            </a><br>
            <a href="https://insight.nezirin.net/" class="button button-bw" target="_blank">
              https://insight.nezirin.net/&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
            </a><br>
            <a href="https://insight.vipstarco.in/" class="button button-bw" target="_blank">
              https://insight.vipstarco.in/&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
            </a>
          </div>
          <div class="modal-footer">
            <button type="button" class="button button-bw" data-dismiss="modal">CLOSE</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
