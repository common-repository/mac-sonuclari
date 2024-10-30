<div class="wrap">
    <?php    echo "<h2>" . __( 'Maç Sonuçları - Ayarlar', 'oscimp_trdom' ) . "</h2>"; ?>
     
  <h3>Canlı Skorları eklemek için aşagıdaki kısakodu sayfanız yada postunuz içine kopyalayıp/yapıştırın :</h3>
  

<strong>[macsonuclari]</strong>


<br />
<h3>Ücretsiz ve reklamsız yayın için bizi destekleyin !</h3>
    <div class="form-group">
        <label class="col-sm-1 control-label"></label>
        <div class="col-sm-11">
            <label style="width: 100%;">

                <input type="checkbox" onclick="ms_click_credit_link();" id="ms_author_linking" <?php echo ms_Main::$settings['wls_author_linking'] == 1? 'checked':'';?>>
                Yayıncı Linkini Etkinleştirin.
            </label>
        </div>
    </div>
<p>Teşekkürler.</p>
</div>

