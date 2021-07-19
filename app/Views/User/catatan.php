<table class="table">
                <thead>
                    <tr style="background-color: #fc0;">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Jenis Pembayaran</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <?php $i = 1; ?>
                        <?php foreach ($transaksi_mbr as $a): ?>
                        <th scope="row"><?= $i++; ?></th>
                            <td><?= $a['nama'];  ?></td>
                            <td><?= $a['nominal'];  ?></td>
                            <td><?= $a['waktu'];  ?></td>
                            <td><?= $a['j_bayar'];  ?></td>
                            <td><a href="#" class="btn btn-success">Detail</a></td>
                </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>

            .<form action="https://pulsa.tokopedia.com">
                <div class="input-topup-wrapper">
                  <div class="ct-input">
                    <div class="input-field-box input-normal mb-16 pt-8" id="input-nominal-topup">
                      <div class="input-field-wrapper">
                        <div class="currency">Rp</div>
                        <input class="input-field" placeholder="0" name="nominal-topup-input" id="nominal-topup-input" type="text" value="" autocomplete="off">
                        <i class="sprite-small sprite-remove input-text-remove"></i>
                        <input type="hidden" id="topup-id" name="product_id" value="6603">
                        <input type="hidden" name="action" value="init_data">
                        <input type="hidden" name="category_id" value="48">
                        <input type="hidden" name="operator_id" value="685">
                        <input type="hidden" name="partner_id" value="0">
                        <input type="hidden" name="type_pulsa" value="pulsa_paket">
                        <input type="hidden" name="instant_checkout" value="0">
                        <input type="hidden" name="client_number" value="000">
                        <input type="hidden" id="amount-topup" value="100000">
                        <input type="hidden" id="amount-allowed" value="10000000">
                      </div>
                      <div class="input-message"></div>
                    </div>
                  </div>
                  <div class="ct-btn">
                    <button class="unf-btn unf-btn--animate unf-btn--primary unf-btn--block " id="btn-ovotopup-topup-debit" onclick="pushGTM('ovo home page','click topup instant','clickOVO','userID: 35098005')">
                      <span class="unf-btn__children">Top-up</span>
                    </button>
                  </div>
                </div>
              </form>



              <div class="col-md-8 col-sm-8 col-custom">

<div class="card visible-xs content-mobile-balance single-ovo-action">
  <div class="cmb-wrapper">
    <div class="cmb-detail">
      
      <div class="cmb-label premier">
      OVO Premier
      </div>
      
      <div class="cmb-cash">OVO Cash</div>
      <div class="cmb-balance-wrapper">
        <div class="cmb-balance">
            <span id="cmb-balance-text">Rp0</span>
            
        </div>
      </div>
      <div class="cmb-points" id="cmb-points-text">OVO Points <span class="points-text">35</span></div>
    </div>
    <div class="cmb-setting btn-setting-new">
      <a href="https://www.tokopedia.com/ovo/setting"><i class="icon-setting-new"></i></a>
    </div>
    <div class="loader">
      <div class="loader-wrapper middle">
        <div class="loader-left">
          <div class="unf-loader-circle"></div>
        </div>
        <div class="loader-right">
          <div class="unf-loader-shimmer-line w25 block"></div>
          <div class="unf-loader-shimmer-line w44"></div>
          <div class="unf-loader-shimmer-line"></div>
        </div>
        <div class="loader-abs">
          <div class="unf-loader-circle small"></div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="cmb-ovo-upgrade">
    <div class="cmb-box">
      <div class="cb-ovo-transfer mobile">
        
        
        <div class="cb-ovo-feature cb-ovo-qr " id="topup-instant-btn">
          <div>
            <i class="icon-topup-ovo"></i>
            <div class="hvr-orange bold-text">Top-up</div>
          </div>
        </div>
        
        <div class="cb-ovo-feature btn-ovo-transfer cb-ovo-transfer-link ">
          <div>
            <i class="icon-ovo-transfer-new"></i>
            <div class="hvr-orange bold-text pl-6">Transfer</div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

<div class="pl-16 pr-16 visible-xs subscription-section">
  <div class="card nopadding">
    <div class="subs-container">
      <div class="subs-icon-container">
        <img src="https://ecs7.tokopedia.net/img/wallet/subs-icon.png" alt="subscription">
      </div>
      <div class="subs-content">
        <div>Yuk, mulai bayar kebutuhanmu secara auto debit pakai OVO!</div>
        <div class="green-text bold-text pointer">Cek Sekarang</div>
      </div>
    </div>
  </div>
</div>


<div id="topup-section" class="">
  <div id="" class="card content-topup">
    <div class="visible-xs card-subheader">Top-up OVO Cash</div>
    <div class="label-text">Isi Nominal</div>
    <div class="ct-box">
      <form action="https://pulsa.tokopedia.com">
        <div class="input-topup-wrapper">
          <div class="ct-input">
            <div class="input-field-box input-normal mb-16 pt-8" id="input-nominal-topup">
              <div class="input-field-wrapper">
                <div class="currency">Rp</div>
                <input class="input-field" placeholder="0" name="nominal-topup-input" id="nominal-topup-input" type="text" value="" autocomplete="off">
                <i class="sprite-small sprite-remove input-text-remove"></i>
                <input type="hidden" id="topup-id" name="product_id" value="6603">
                <input type="hidden" name="action" value="init_data">
                <input type="hidden" name="category_id" value="48">
                <input type="hidden" name="operator_id" value="685">
                <input type="hidden" name="partner_id" value="0">
                <input type="hidden" name="type_pulsa" value="pulsa_paket">
                <input type="hidden" name="instant_checkout" value="0">
                <input type="hidden" name="client_number" value="000">
                <input type="hidden" id="amount-topup" value="NaN">
                <input type="hidden" id="amount-allowed" value="10000000">
              </div>
              <div class="input-message"></div>
            </div>
          </div>
          <div class="ct-btn">
            <button class="unf-btn unf-btn--animate unf-btn--primary unf-btn--block unf-btn--disabled" id="btn-ovotopup-topup-debit" onclick="pushGTM('ovo home page','click topup instant','clickOVO','userID: 35098005')" disabled="disabled">
              <span class="unf-btn__children">Top-up</span>
            </button>
          </div>
        </div>
      </form>
    </div>

    <div id="topup-disabled-help" class="info-bulb-box wmargintop hidden">
      <div class="info-bulb-img">
        <img src="https://ecs7.tokopedia.net/img/ovo/icon-bulb.png">
      </div>
      <div class="info-bulb-text">
        Saldo atau total top-up bulanan OVO Cash kamu telah mencapai
        maksimum.
      </div>
    </div>
  </div>
</div>


<div class="banner-upgrade-section">
  


  
</div>

<div id="topup-section" class="hidden">
  <div id="" class="card content-topup">
    <div class="visible-xs card-subheader">Top-up OVO Cash</div>
    <div class="label-text">Nominal Top-up</div>
    <div class="ct-box">
      
      
      
      
      
      
      <form action="https://pulsa.tokopedia.com">
        <div class="ct-input">
          <div class="cti-wrapper" id="topup-amount-dropdown">
            <div class="cti-box-wrapper" id="topup-amount-toggle">
              <div class="cti-box">
                <div class="cti-text">
                  <div class="ct-currency hidden-xs">Rp</div>
                  <div class="ct-nominal" id="topup-amount-display">20.000</div>
                </div>
                <div class="cti-icon">
                  <i class="icon-chevron-bottom"></i>
                </div>
                <input type="hidden" id="topup-id" name="product_id" value="">
                <input type="hidden" name="action" value="init_data">
                <input type="hidden" name="category_id" value="48">
                <input type="hidden" name="operator_id" value="685">
                <input type="hidden" name="partner_id" value="0">
                <input type="hidden" name="type_pulsa" value="pulsa_paket">
                <input type="hidden" name="instant_checkout" value="0">
                <input type="hidden" name="client_number" value="">
              </div>
            </div>
            <div id="topup-template" class="unf-list__item nomargin topup-amount-list hidden" data-value="10000" data-id="">
              <div class="unf-list__item-container">
                <div class="unf-list__item-text">10.000</div>
              </div>
            </div>
            <div class="cti-dropdown">
              <div id="topup-placeholder" class="unf-list unf-list--no-margin"><div id="" class="unf-list__item nomargin topup-amount-list" data-value="20000" data-id="6603">
              <div class="unf-list__item-container">
                <div class="unf-list__item-text">20.000</div>
              </div>
            </div><div id="" class="unf-list__item nomargin topup-amount-list" data-value="50000" data-id="2161">
              <div class="unf-list__item-container">
                <div class="unf-list__item-text">50.000</div>
              </div>
            </div><div id="" class="unf-list__item nomargin topup-amount-list" data-value="100000" data-id="2162">
              <div class="unf-list__item-container">
                <div class="unf-list__item-text">100.000</div>
              </div>
            </div><div id="" class="unf-list__item nomargin topup-amount-list" data-value="200000" data-id="2242">
              <div class="unf-list__item-container">
                <div class="unf-list__item-text">200.000</div>
              </div>
            </div><div id="" class="unf-list__item nomargin topup-amount-list" data-value="500000" data-id="2245">
              <div class="unf-list__item-container">
                <div class="unf-list__item-text">500.000</div>
              </div>
            </div><div id="" class="unf-list__item nomargin topup-amount-list" data-value="1000000" data-id="2246">
              <div class="unf-list__item-container">
                <div class="unf-list__item-text">1.000.000</div>
              </div>
            </div><div id="" class="unf-list__item nomargin topup-amount-list" data-value="1500000" data-id="2342">
              <div class="unf-list__item-container">
                <div class="unf-list__item-text">1.500.000</div>
              </div>
            </div><div id="" class="unf-list__item nomargin topup-amount-list" data-value="1750000" data-id="2343">
              <div class="unf-list__item-container">
                <div class="unf-list__item-text">1.750.000</div>
              </div>
            </div><div id="" class="unf-list__item nomargin topup-amount-list" data-value="2000000" data-id="2247">
              <div class="unf-list__item-container">
                <div class="unf-list__item-text">2.000.000</div>
              </div>
            </div><div id="" class="unf-list__item nomargin topup-amount-list" data-value="5000000" data-id="2248">
              <div class="unf-list__item-container">
                <div class="unf-list__item-text">5.000.000</div>
              </div>
            </div><div id="" class="unf-list__item nomargin topup-amount-list" data-value="10000000" data-id="2515">
              <div class="unf-list__item-container">
                <div class="unf-list__item-text">10.000.000</div>
              </div>
            </div></div>
              <div id="topup-help" class="xs-pr16 hidden">
                <div class="info-bulb-box wmargin">
                  <div class="info-bulb-img">
                    <img src="https://ecs7.tokopedia.net/img/ovo/icon-bulb.png">
                  </div>
                  <div class="info-bulb-text msg-limit-topup">Batas nominal Top-up kamu hingga Rp10.000.000. <a href="https://www.tokopedia.com/help/article/a-0912" class="green-text hvr-orange">Selengkapnya</a>.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ct-btn">
          <button type="submit" class="unf-btn unf-btn--animate unf-btn--transaction unf-btn--block" id="btn-ovotopup-topup">
            <span class="unf-btn__children">Top-up</span>
          </button>
        </div>
      </form>
    </div>

    <div id="topup-disabled-help" class="info-bulb-box wmargintop hidden">
      <div class="info-bulb-img">
        <img src="https://ecs7.tokopedia.net/img/ovo/icon-bulb.png">
      </div>
      <div class="info-bulb-text">
        Saldo atau total top-up bulanan OVO Cash kamu telah mencapai
        maksimum.
      </div>
    </div>
  </div>
</div>

<div class="pl-16 pr-16 visible-xs">
  <div class="card">
    <a href="https://www.tokopedia.com/gift-card/" class="btn-gift-card">
      <div class="content-gift-card">
        <div class="subs-content subs-content-gift">
          <div class="gift-card-box col-xs-2 col-sm-2">
            <img src="https://ecs7.tokopedia.net/img/ovo/gift-card-color.svg" class="gift-card-icon">
          </div>
          <div class="gift-card-desc col-xs-9 col-sm-9">
            <div class="bold-text title">Kirim Giftcard ke Orang Spesial</div>
            <div class="desc">
              Beri kado untuk teman atau kerabat dengan nominal sesukamu.
            </div>
          </div>
        </div>
        <div class="gift-card-chevron col-xs-1 col-sm-1">
          <i class="icon-chevron-right"></i>
        </div>
      </div>
    </a>
  </div>
</div>



<div class="transaction-history-wrapper">
<div class="card nopadding nolastchild content-transaction-history">
<div class="cth-title-box">
<div class="card-subheader nomargin history-title">Riwayat Transaksi</div>
<div class="calendar-box" id="calendar">
    <i class="icon-calendar"></i>
    <span>10 Jun 2021 - 9 Jul 2021</span>
    <input type="hidden" id="chosen-start-date" value="2021-06-10">
    <input type="hidden" id="chosen-end-date" value="2021-07-09">
</div>
</div>
<div class="cth-chip-menu" id="chip-slider">
<div class="item unf-chip unf-chip--active" qp="">Semua</div>
<div class="item unf-chip" qp="paid">Pembayaran</div>
<div class="item unf-chip" qp="received,topup">Penerimaan</div>
<div class="item unf-chip" qp="refund">Pengembalian</div>
</div>



<div class="cth-history"><div class="message alert text-center" style="display: none;"></div><div class="list"><div class="cth-history-empty"><img src="https://cdn7.tokopedia.net/img/ovo/icon-history-empty.svg"><div class="che-title">Tidak Ada Transaksi Dengan Filter Ini</div><div class="che-desc">Ubah filter untuk melihat transaksimu yang lain</div></div></div><div class="payment-list-more load-more" "="" style="display: none;"><div id="more-btn-history">Lihat Berikutnya</div><div id="loader-btn-history" style="color: #b5b3b3; display: none">Memuat...</div></div></div> 
</div>
</div>

</div>