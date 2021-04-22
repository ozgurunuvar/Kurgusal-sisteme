<?php
function sari_mesaj_box($atts, $mesaj= null) {
   extract(shortcode_atts(array( 
           'mesaj' => 'Kısa kod içersinde mesaj değişkenini boş bırakırsanız bu mesaj görünür.'
    ), $atts));
           return '<div class="box note sari"> <div class="box-inner-block"> '. $mesaj.' </div> </div>';
        }
        add_shortcode('sari_kutu', 'sari_mesaj_box');
?>
