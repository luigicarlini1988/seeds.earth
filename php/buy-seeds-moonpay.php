<?php




$method = $_POST['method'];
$account_name = $_POST['username'];
//$percentage_compensation = 3.84615; //this is to compensate for the fluctiation buffer added by Hypha's smart contracts
$percentage_compensation = 0; //this is to compensate for the fluctiation buffer added by Hypha's smart contracts



//$method = $_POST['method'];

switch ($method) {
    case "validateusername":
        //validate username and get limits:

        $file = file_get_contents('https://mongo.hypha.earth/findMemberAddress/' . $account_name);

        $bitcoin_address = json_decode($file, true);

        if( empty($bitcoin_address['bitcoinAddress']) )
        {
            break;
        }
            
        //
        //get account type
        //
        $opts = array('http' =>
          array('method'  => 'POST', 'content' => '{ "json": true, "code": "accts.seeds", "scope": "accts.seeds", "table": "users", "table_key": "", "lower_bound": "' . $account_name . '", "upper_bound": "", "limit": 1, "key_type": "", "index_position": "", "encode_type": "dec", "reverse": false, "show_payer": false }', 'Cache-Control' => 'no-cache', 'Content-Type' => 'application/json'
          )
        );

        $context = stream_context_create($opts);

        $get_account_info = file_get_contents('https://node.hypha.earth/v1/chain/get_table_rows', false, $context);

        $account_info = json_decode($get_account_info, true);

        $account_array['status'] = $account_info['rows'][0]['status'];
        $account_array['type'] = $account_info['rows'][0]['type'];
        $account_array['image'] = !empty($account_info['rows'][0]['image']) ? $account_info['rows'][0]['image'] : '';
        $account_array['reputation'] = $account_info['rows'][0]['reputation'];
        

        //
        //get limits
        //
        $opts = array('http' =>
          array( 'method'  => 'POST', 'content' => '{ "json": true, "code": "tlosto.seeds", "scope": "tlosto.seeds", "table": "config", "table_key": "", "lower_bound": "", "upper_bound": "", "limit": 100, "key_type": "", "index_position": "", "encode_type": "dec", "reverse": false, "show_payer": false }', 'Cache-Control' => 'no-cache', 'Content-Type' => 'application/json'
          )
        );

        $context = stream_context_create($opts);

        $seeds_buy_limits = file_get_contents('https://node.hypha.earth/v1/chain/get_table_rows', false, $context);

        switch ($account_array['status'])
        {
            case "citizen":
                $account_array['limit'] = strtok( json_decode($seeds_buy_limits)->rows[0]->citizen_limit, ' ');
            break;

            case "resident":
                $account_array['limit'] = strtok( json_decode($seeds_buy_limits)->rows[0]->resident_limit, ' ');
            break;
            
            case "visitor":
            default:
                $account_array['limit'] = strtok( json_decode($seeds_buy_limits)->rows[0]->visitor_limit, ' ');
            break;
        }

        $account_array['limit'] = round($account_array['limit'] * ((100-$percentage_compensation) / 100));   










        //get the date of the next purchase limit reset
/*
        //echo date_default_timezone_get();


        $next_reset_info = file_get_contents('https://mongo.hypha.earth/nextStatReset');
        $next_reset_info_json = json_decode($next_reset_info, true);
        $next_reset_seconds = $next_reset_info_json['nextResetSeconds'];
        $account_array['next-reset'] = date('m/d/Y H:i:s', $next_reset_seconds); 
*/




        
        //get weekly purchases
        $opts = array('http' =>
          array('method'  => 'POST', 'content' => '{  "json": true, "code": "tlosto.seeds", "scope": "tlosto.seeds",
 "table": "dailystats", "table_key": "", "lower_bound": "' . $account_name .'", "upper_bound": "' . $account_name . '", "limit": 10, "key_type": "", "index_position": "", "encode_type": "dec", "reverse": false, "show_payer": false }', 'Cache-Control' => 'no-cache', 'Content-Type' => 'application/json'
          )
        );

        $context = stream_context_create($opts);

        $get_purchases = file_get_contents('https://node.hypha.earth/v1/chain/get_table_rows', false, $context);

        
        $account_array['weekly-purchased'] = json_decode($get_purchases)->rows[0]->seeds_purchased /10000;

        


        if($account_array['limit'] > $account_array['weekly-purchased'])
        {
            $account_array['can-purchase'] = 'yes';
            $account_array['buy-remaining'] = ($account_array['limit'] - $account_array['weekly-purchased']);
            //echo "ACCOUNT LIMIT: " . $account_array['limit'];
            //echo "YOU'VE PURCHASED " . $account_array['weekly-purchased'];
        }
        else
        {
            $account_array['can-purchase'] = 'no';
            $account_array['buy-remaining'] = 0;
        }
        //{"rows":[{"buyer_account":"dangermouse1","seeds_purchased":2503328070}],"more":false}


        $file =  json_encode( array_merge( $account_array, json_decode($file, true)) );



    break;
    case "getcurrency":
    	$opts = array('http' =>
		  array(
		    'method'  => 'POST',
		    'content' => '{"json":true,"code":"tlosto.seeds","scope":"tlosto.seeds","table":"config"}',
		    'Cache-Control' => 'no-cache',
		    'Content-Type' => 'application/json'
		  )
		);

		$context = stream_context_create($opts);

		$seeds_value = file_get_contents('https://node.hypha.earth/v1/chain/get_table_rows', false, $context);

    	$chosencurrency = strtolower($_POST['chosencurrency']);
    	switch ($chosencurrency) {
    		
            case "eos":
                $file = file_get_contents('https://api.coingecko.com/api/v3/simple/price?ids=eos&vs_currencies=usd');
            break;

            case "bitcoin":
                $file = file_get_contents('https://mongo.hypha.earth/satoshiToUsd/100000000');
            break;

            case "debit/credit card":

                $file_btc = file_get_contents('https://mongo.hypha.earth/satoshiToUsd/100000000');
                $file_moonpay = file_get_contents('https://api.moonpay.io/v3/currencies/btc/bid_price?apiKey=pk_live_p7QQ6K4rtq1apen4G8IXEnZDFxvYJJH');

                $moonpay_bitcoin_price = json_decode($file_moonpay, true);
                $seeds_btc = json_decode($file_btc, true);

                $moonpay['seeds_btc_value'] = floatval($seeds_btc['usdValue']);

                $moonpay['moonpay_btc_value'] = $moonpay_bitcoin_price['USD'];

                $moonpay['moonpay_btc_vs_seeds_btc'] = abs( (1 - $moonpay['seeds_btc_value'] / $moonpay['moonpay_btc_value']) * 100);

                //$moonpay['seeds_btc_vs_moonpay_btc'] = abs( (1 - $moonpay['moonpay_btc_value'] / $moonpay['seeds_btc_value']) * 100);



                $file = json_encode( $moonpay );

        	break;
        	
        	case "tlos":
        		$file = json_encode(json_decode("{}"));
        	break;

        	default:
       			echo "Error, please specify the currency.";
        }
        

    break;


    case "fiatgateway":
        
        
        $host = "https://buy.moonpay.io";
        $apikey = 'pk_live_p7QQ6K4rtq1apen4G8IXEnZDFxvYJJH';

        $account_name = $_POST['username'];


        $_POST['purchaseamount'] ? $purchase_amount = $_POST['purchaseamount'] : die('Please specify the purchase amount.');


        /*
        $_POST['walletAddressTag'] ? $walletAddressTag = $_POST['walletAddressTag'] : die('There was a problem obtaining your bitcoin address. Please try again later.');
        */
        $_POST['btcaddress'] ? $btcaddress = $_POST['btcaddress'] : die('There was a problem obtaining your bitcoin address. Please try again later.');

        /******
        *
        *vmodha: TEST NET OVERRIDE
        *
        ******/
        //$host = "https://buy-staging.moonpay.io";
        //$apikey = 'pk_test_gPXrSubg14P0N2cfct5p2E9535mAiNH';
        //$btcaddress = "2MyDSW7qyzX4nNTeXSMvQctC8orBWvUpEsg";
        

        /*
        vmodha: EOSDT
        $query = '?apiKey=' . $apikey . '&currencyCode=eosdt&walletAddress=thehyphabank&walletAddressTag=' . $walletAddressTag . '&baseCurrencyAmount=' . $purchase_amount . '&baseCurrencyCode=usd&colorCode=%2324b0d6';
        //&enabledPaymentMethods=credit_debit_card,sepa_bank_transfer,gbp_bank_transfer,apple_pay
        */

        $query = '?apiKey=' . $apikey . '&currencyCode=btc&walletAddress=' . $btcaddress . '&baseCurrencyAmount=' . $purchase_amount . '&baseCurrencyCode=usd&colorCode=%2324b0d6&externalCustomerId=' . $account_name . '&lockAmount=true';
        //&enabledPaymentMethods=credit_debit_card,sepa_bank_transfer,gbp_bank_transfer,apple_pay


        $signature  = base64_encode(hash_hmac('sha256', $query, 'sk_live_WHNepuNVJ0AUDESWybNo2OtHtpUezR', true));

        $file = $host . $query . "&signature=" . urlencode($signature );

    break;

  
    default:
       echo "Error, please specify a method.";
}


//$myJSON = json_encode($file);
if($method == "getcurrency")
{
	$decoded_seeds_value = json_decode($seeds_value);

	$decoded_seeds_value = json_encode($decoded_seeds_value->rows[0]);

	$file =  json_encode( array_merge(json_decode($decoded_seeds_value, true), json_decode($file, true)) );
}

echo $file;

?>