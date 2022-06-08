<?php
/*
Plugin Name: Bitcoin Price
Description: A very basic plugin to display the current Bitcoin price.
Version: 1.0
Author: Sorin
License: No license LOL
*/

function btcPrice_link(){
    
    $url='https://bitpay.com/api/rates';
    $json=json_decode(file_get_contents($url));
    $dollar=$btc=0;
    foreach($json as$obj){
        if($obj->code =='USD')$btc=$obj->rate;
    }
    return "1 BTC - \$".$btc." USD <br />";
    
}
add_shortcode('btcPrice', 'btcPrice_link'); 

