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
          <a href="<?php echo URL; ?>/download/vipstar_for_mac.zip">
            <img src="<?php echo URL; ?>/img/wallet-mac.png" alt="" width="161" height="51">
          </a>
        </div>
        <div class="wallet-swap">
          <p class="wallet-swap-title-b">Durch den Swap wird die alte VIPS (Ethereum-Token) zur eigenen Währung ausgetauscht.</p>
          <button type="button" class="button button-bw" data-toggle="modal" data-target="#walletModal">
            Swap-Regelungen&nbsp;&nbsp;<i class="far fa-window-restore"></i>
          </button>
          <!-- Modal -->
          <div class="modal fade" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="walletModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="walletModalLabel">Swap-Regelungen</h4>
                </div>
                <div class="modal-body">
                  <p class="modal-text">
                    <span>1. Wurde die Gesamtanzahl von 50. Mrd. auf 60. Mrd. erhöht?</span><br>
                    <span><b>Ja. Beim Swap wird die Token-Anzahl um 20% erhöht.</b></span>
                  </p>
                  <p class="modal-text">
                    <span>2. Was ist mit den Nachkommastellen? </span><br>
                    <span><b>Sie werden aufgerundet.</b></span>
                  </p>
                  <p class="modal-text">
                    <span>3. Kann ich auch nach dem Swap PoS-Belohnungen erhalten?</span><br>
                    <span><b>Ja, es gibt keinerlei Einschränkungen durch den Swap.</b></span>
                  </p>
                  <p class="modal-text">
                    <span>4. Ich habe nur ein Smartphone. Kann ich dennoch die Token nach dem Swap erhalten?</span><br>
                    <span><b>Wir empfehlen eine Nutzung eines Computers. Aber wir bereiten für die Smartphone-User, ein auf das Smartphone abgestimmtes und somit spezifisches  Austauschprogramm vor. Jedoch geschieht das erst nach der Registrierung auf einer Handelsplattform und die Swap-Rate wird nicht 1:1,2, sondern 1:1 sein.</b></span>
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
