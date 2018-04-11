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
          <a href="http://vipsvips.sakura.ne.jp/download/VIPSTARCOIN_win_normal.zip">
            <img src="<?php echo URL; ?>/img/wallet/win-normal.png" alt="" width="161" height="51">
          </a><br>
          <a href="http://vipsvips.sakura.ne.jp/download/VIPSTARCOIN_mac_normal.zip">
            <img src="<?php echo URL; ?>/img/wallet/mac-normal.png" alt="" width="161" height="51">
          </a><br>
          <a href="http://explorer.vipstarcoin.jp/" class="button button-bw" target="_blank">
            VIPSTARCOIN Explorer&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
          </a>
        </div>
        <div class="wallet-swap">
          <p class="wallet-swap-title-b">Les anciens VIPS (Ethreum tokens) seront echanges pour la crypto monnaie originale.</p>
          <button type="button" class="button button-bw" data-toggle="modal" data-target="#walletModal">
            Nos promesses&nbsp;&nbsp;<i class="far fa-window-restore"></i>
          </button>
          <!-- Modal -->
          <div class="modal fade" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="walletModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="walletModalLabel">Regles d'echanges</h4>
                </div>
                <div class="modal-body">
                  <p class="modal-text">
                    <span>1. Est-ce que la difference d'approvisionnement entre l'ancien token et la nouvelle monnaie est consideree prise en compte dans les echanges ?</span><br>
                    <span><b>Nous allons echanger l'ancien token pour une nouvelle monnaie au taux de 1:1.2 .</b></span>
                  </p>
                  <p class="modal-text">
                    <span>2. Comment les decimaux seront partages ?</span><br>
                    <span><b>La portion du decimal de l'ancien token sera arrondie sur l'echange de la nouvelle monnaie.</b></span>
                  </p>
                  <p class="modal-text">
                    <span>3. Pouvons-nous recevoir la recompense de POS pour la portion de la monnaie echangee ?</span><br>
                    <span><b>Oui, vous la recevrez.</b></span>
                  </p>
                  <p class="modal-text">
                    <span>4. J'ai seulement un Smartphone et pas d'ordinateur. Puis-je encore rejoindre le programme d'echange ?</span><br>
                    <span><b>
                      Nous recommandons d'utiliser un ordinateur avec Windows ou un ordinateur MAC pour rejoindre le programme d'echange.<br>
                      Nous allons preparer une procedure speciale pour recevoir une nouvelle monnaie pour les utilisateurs de Smartphones apres l'inscription sur des plateformes d'echange de crypto monnaie. Cependant, cette procedure aura une limite de temps et vos tokens seront echanges au taux de 1:1 au lieu de 1:1:2.
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
