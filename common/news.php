<!-- News Section -->
<div id="news">
  <div class="container">
    <div class="section-title text-center center">
      <h2>NEWS</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <?php if ($lang == 'en' || $lang == 'fr' || $lang == 'zh'): ?>
              <li><a href="#" data-filter="*">ALL</a></li>
              <li><a href="#" data-filter=".new" class="active">NEW</a></li>
              <li><a href="#" data-filter=".develop">DEVELOPING INFO</a></li>
              <li><a href="#" data-filter=".event">EVENTS</a></li>
              <li><a href="#" data-filter=".other">OTHERS</a></li>
            <?php elseif ($lang == 'de'): ?>
              <li><a href="#" data-filter="*">ALLE</a></li>
              <li><a href="#" data-filter=".new" class="active">NEU</a></li>
              <li><a href="#" data-filter=".develop">DEV-INFO</a></li>
              <li><a href="#" data-filter=".event">EVENTS</a></li>
              <li><a href="#" data-filter=".other">ETC</a></li>
            <?php else: ?>
              <li><a href="#" data-filter="*">すべて</a></li>
              <li><a href="#" data-filter=".new" class="active">最新</a></li>
              <li><a href="#" data-filter=".develop">開発情報</a></li>
              <li><a href="#" data-filter=".event">イベント</a></li>
              <li><a href="#" data-filter=".other">その他</a></li>
            <?php endif; ?>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="news-items">
        <div class="col-sm-6 col-md-3 col-lg-3 event new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="https://twitter.com/VIPSTARCOIN/status/992051802890686464" target="_blank">
                <div class="hover-text">
                  <h4>海外Airdropイベント開始</h4>
                  <small>2018/05/03</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/event-airdrop-overseas.png" alt="海外Airdropイベント開始">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 other new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://www.malaychan-satu.jp/" target="_blank">
                <div class="hover-text">
                  <h4>VIPS決済導入<br>池袋 マレーチャン</h4>
                  <small>2018/04/30</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/other-settlement.png" alt="VIPS決済導入 池袋 マレーチャン">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 develop new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="https://twitter.com/VIPSTARCOIN/status/991302970984681473" target="_blank">
                <div class="hover-text">
                  <h4>マイニングツール公開</h4>
                  <small>2018/04/30</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/develop-mining-helper.png" alt="マイニングツール公開">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 develop new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/CryptoBridge%cd%f8%cd%d1%ca%fd%cb%a1" target="_blank">
                <div class="hover-text">
                  <h4>CryptoBridge上場</h4>
                  <small>2018/04/27</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/develop-cb.png" alt="CryptoBridge上場">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 other new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="https://www.splendor-coffee.com/" target="_blank">
                <div class="hover-text">
                  <h4>VIPS決済導入第1号店決定<br>浅草 SPLENDOR COFFEE</h4>
                  <small>2018/04/27</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/other-settlement.png" alt="VIPS決済導入第1号店決定 浅草 SPLENDOR COFFEE">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 develop new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="https://twitter.com/VIPSTARCOIN/status/989143834637488128" target="_blank">
                <div class="hover-text">
                  <h4>Android版ウォレット発表</h4>
                  <small>2018/04/25</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/develop-android-wallet.jpg" alt="Android版ウォレット発表">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 other new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="<?php echo URL; ?>/img/news/other-incorporation-2.png" target="_blank">
                <div class="hover-text">
                  <h4>法人化発表</h4>
                  <small>2018/04/24</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/other-incorporation.png" alt="法人化発表">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 develop new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/%b3%a4%b3%b0%bc%e8%b0%fa%bd%eaCOINEXCHANGE%a4%ce%bb%c8%a4%a4%ca%fd" target="_blank">
                <div class="hover-text">
                  <h4>CoinExchange上場決定</h4>
                  <small>2018/04/15</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/develop-ce.png" alt="CoinExchange上場決定">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 other new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="https://camp-fire.jp/projects/view/71975" target="_blank">
                <div class="hover-text">
                  <h4>クラウドファンディング開始</h4>
                  <small>2018/04/09</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/other-crowd-funding.png" alt="クラウドファンディング開始">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 develop new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/VIPSTAR%c6%b3%c6%fe%ca%fd%cb%a1" target="_blank">
                <div class="hover-text">
                  <h4>正規版ウォレット配布&amp;スワップ開始</h4>
                  <small>2018/04/07</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/develop-swap.png" alt="正規版ウォレット配布&amp;スワップ開始">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 other new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="https://www.youtube.com/watch?v=iUzFW0sZ3s0" target="_blank">
                <div class="hover-text">
                  <h4>VIPSガールズアニメ化決定！</h4>
                  <small>2018/04/01<br>（エイプリルフール）</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/other-april-fool-2018.jpg" alt="VIPSガールズアニメ化決定！">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 other new">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/%b8%f8%bc%b0%a5%ad%a5%e3%a5%e9%a5%af%a5%bf%a1%bc%a4%cb%a4%c4%a4%a4%a4%c6" target="_blank">
                <div class="hover-text">
                  <h4>公式キャラクター設定画公開</h4>
                  <small>2018/03/26</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/other-chara-sheet.png" alt="公式キャラクター設定画公開">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 develop">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/%c6%c8%bc%ab%c4%cc%b2%df%c6%b0%ba%ee%a5%c6%a5%b9%a5%c8" target="_blank">
                <div class="hover-text">
                  <h4>独自通貨動作テスト (SIKEN)</h4>
                  <small>2018/03/20</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/develop-skn.png" alt="独自通貨動作テスト (SIKEN)">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 event">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/%b8%f8%bc%b0%a5%ad%a5%e3%a5%e9%a5%af%a5%bf%a1%bc%a5%b3%a5%f3%a5%c6%a5%b9%a5%c8%b7%eb%b2%cc%c8%af%c9%bd" target="_blank">
                <div class="hover-text">
                  <h4>公式キャラクターコンテスト 結果発表</h4>
                  <small>2018/03/18</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/event-chara-result.png" alt="公式キャラクターコンテスト結果発表">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 other">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/ryugoroshi/" target="_blank">
                <div class="hover-text">
                  <h4>提携ゲーム「竜殺しの物語」リリース</h4>
                  <small>2018/03/14</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/other-ryugoroshi.jpg" alt="提携ゲーム「竜殺しの物語」リリース">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 develop">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/%a1%da%bd%aa%ce%bb%a1%db%bb%ee%b8%b3%cd%d1%c6%c8%bc%ab%c4%cc%b2%dfTTT%b4%b0%c0%ae" target="_blank">
                <div class="hover-text">
                  <h4>独自通貨動作テスト (TESTSTAR)</h4>
                  <small>2018/03/09</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/develop-ttt.png" alt="独自通貨動作テスト (TESTSTAR)">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 event">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/VIP%a1%f9STAR%20%b8%f8%bc%b0%a5%ad%a5%e3%a5%e9%a5%af%a5%bf%a1%bc%a5%b3%a5%f3%a5%c6%a5%b9%a5%c8%20%a5%a8%a5%f3%a5%c8%a5%ea%a1%bc%b0%ec%cd%f7" target="_blank">
                <div class="hover-text">
                  <h4>VIP☆STAR 公式キャラクターコンテスト</h4>
                  <small>2018/02/26</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/event-chara.jpeg" alt="VIP☆STAR 公式キャラクターコンテスト">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 event">
          <div class="news-item">
            <div class="hover-bg">
              <a href="http://seesaawiki.jp/vips/d/%c2%e81%b2%f3VIPS%a5%a2%a5%a4%a5%b3%a5%f3%c5%ea%c9%bc" target="_blank">
                <div class="hover-text">
                  <h4>VIP☆STAR コインアイコンコンテスト</h4>
                  <small>2018/02/19</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/event-icon.jpg" alt="VIP☆STAR コインアイコンコンテスト">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 develop">
          <div class="news-item">
            <div class="hover-bg">
              <a href="https://ethplorer.io/address/0x7c7c392ab2f9a74bb79ab9e6b1caf6bae0f0f14c" target="_blank">
                <div class="hover-text">
                  <h4>VIP☆STAR 発行</h4>
                  <small>2018/02/17</small>
                </div>
                <div class="news-image">
                  <img src="<?php echo URL; ?>/img/news/develop-init.png" alt="VIP☆STAR 発行">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
