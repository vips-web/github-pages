<!-- Holding Section -->
<div id="holding" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>HOLDING</h2>
      <hr>
    </div>
    <div class="row">
      <div class="holding-header">
        <p>
          発行数600億枚<br>
          +<br>
          PoS・PoW合計100億枚<br>
          （2120年に最大発行完了予定）
        </p>
      </div>
      <div class="holding-chart">
        <canvas id="holdingChart" width="200" height="200"></canvas>
        <p class="holding-total">発行数<br>600億枚</p>
      </div>
      <div class="col-md-5 col-sm-5 col-md-offset-5 holding-text">
        <p><span class="holding-yellow">■</span> 上場時販売：33.3%</p>
        <p><span class="holding-orange">■</span> 開発：20.3%</p>
        <p><span class="holding-red">■</span> マーケティング：20.3%</p>
        <p><span class="holding-purple">■</span> 各種媒体での配布：16.0%</p>
        <p><span class="holding-blue">■</span> 運営：10.0%</p>
      </div>
      <input type="hidden" class="js_ctx-label-1" value="上場時販売">
      <input type="hidden" class="js_ctx-label-2" value="開発">
      <input type="hidden" class="js_ctx-label-3" value="マーケティング">
      <input type="hidden" class="js_ctx-label-4" value="各種媒体での配布">
      <input type="hidden" class="js_ctx-label-5" value="運営">
      <div class="col-md-12 col-sm-12">
        <p class="holding-attention">
          <b>各種媒体での配布</b>
        </p>
        <p>
          5ch専用ブラウザなど制作物利用のエアドロップ<br>
          5chを含むTwitterやDiscordやその他への宣伝用配布等
        </p>
        <p class="holding-attention">
          <b>マイニング報酬</b>
        </p>
        <p>
          2000ブロック目までPoS・PoW、それぞれ報酬1vips<br>
          （公開前に運営がマイニング報酬を貰わないようにするため）
        </p>
        <p>
          PoS<br>
          PoS ver3のため抽選式PoS。当選するとPoS報酬が貰える。<br>
          2,001～28,000ブロック：PoS 3,000vips<br>
          28,001～525,600ブロック：PoS 9,500vips<br>
          525,601ブロック：PoS 4,750vips<br>
          以降525,600ブロックごとに半減（下限100vips）<br>
          53,611,200ブロックで配布完了予定
        </p>
        <p>
          PoW<br>
          2,001～53,611,200ブロック：PoW 100vips
        </p>
        <p class="holding-attention">
          <b>セルフロックアップ</b>
        </p>
        <p>
          2020年度セルフロックアップ：合計約243億vips<br>
          <br>
          運営状況やロードマップ遂行のための費用等を加味し、<br>
          毎年度末にセルフロックアップ量が再計算される。<br>
          <br>
          <a href="#" class="holding-lockup-link" data-toggle="modal" data-target="#lockupModal">
            セルフロックアップアドレス&nbsp;&nbsp;<i class="far fa-window-restore"></i>
          </a>
        </p>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="lockupModal" tabindex="-1" role="dialog" aria-labelledby="lockupModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="lockupModalLabel">セルフロックアップアドレス</h4>
        </div>
        <div class="modal-body">
          <a href="https://insight.vipstarco.in/address/VAuhyerY1AD9GzFnUvdGpwMUrnLe6MBCdi" target="_blank" class="holding-lockup-link">
            VAuhyerY1AD9GzFnUvdGpwMUrnLe6MBCdi
          </a><br>
          <a href="https://insight.vipstarco.in/address/VCnucQiukpHJikhurvtTE6at88RNzYiTZm" target="_blank" class="holding-lockup-link">
            VCnucQiukpHJikhurvtTE6at88RNzYiTZm
          </a><br>
          <a href="https://insight.vipstarco.in/address/VEDRjYBY5tHppRDTzEeYcMak4of2hUW3tn" target="_blank" class="holding-lockup-link">
            VEDRjYBY5tHppRDTzEeYcMak4of2hUW3tn
          </a><br>
          <a href="https://insight.vipstarco.in/address/VJRt3y2XZwt93fNT6qQVoC5yCLDA5MFcRR" target="_blank" class="holding-lockup-link">
            VJRt3y2XZwt93fNT6qQVoC5yCLDA5MFcRR
          </a><br>
          <a href="https://insight.vipstarco.in/address/VPdKf18L93b9WpKoeGLxeBrLeoc6uYjifg" target="_blank" class="holding-lockup-link">
            VPdKf18L93b9WpKoeGLxeBrLeoc6uYjifg
          </a><br>
          <a href="https://insight.vipstarco.in/address/VPruqjjx4so5c8fqBTHyMn16xGXXDDyp7T" target="_blank" class="holding-lockup-link">
            VPruqjjx4so5c8fqBTHyMn16xGXXDDyp7T
          </a><br>
          <a href="https://insight.vipstarco.in/address/VRd6pt1TSPeeMgE6CN1c7oGLYuX4CCL3AF" target="_blank" class="holding-lockup-link">
            VRd6pt1TSPeeMgE6CN1c7oGLYuX4CCL3AF
          </a><br>
          <a href="https://insight.vipstarco.in/address/VTbzT723FodqPNFh39Kyg7X8wwH2jgGn9p" target="_blank" class="holding-lockup-link">
            VTbzT723FodqPNFh39Kyg7X8wwH2jgGn9p
          </a><br>
          <a href="https://insight.vipstarco.in/address/VU7yJXUxfQU68nsASd7zW1wAn5DKPz93dz" target="_blank" class="holding-lockup-link">
            VU7yJXUxfQU68nsASd7zW1wAn5DKPz93dz
          </a><br>
          <a href="https://insight.vipstarco.in/address/VZ94MD655uUfMPPtnbHhheTqwrcG4mzgn3" target="_blank" class="holding-lockup-link">
            VZ94MD655uUfMPPtnbHhheTqwrcG4mzgn3
          </a><br>
          <a href="https://insight.vipstarco.in/address/VZiyJc8BEU597D4vC3nJr4Ya6jTdMiwnmG" target="_blank" class="holding-lockup-link">
            VZiyJc8BEU597D4vC3nJr4Ya6jTdMiwnmG
          </a><br>
          <a href="https://insight.vipstarco.in/address/VNKCUBYf8JWFh5SVNvcA4mhW9XA74us9Su" target="_blank" class="holding-lockup-link">
            VNKCUBYf8JWFh5SVNvcA4mhW9XA74us9Su
          </a>
        </div>
        <div class="modal-footer">
          <button type="button" class="button button-bw" data-dismiss="modal">CLOSE</button>
        </div>
      </div>
    </div>
  </div>
</div>
