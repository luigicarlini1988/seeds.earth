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


                
                /* GET BTC to USD PRICE FROM RAMP */
                $file_ramp = file_get_contents('https://api-instant.ramp.network/api/host-api/assets');

                $ramp_bitcoin_price = json_decode($file_ramp, true);


                $json = json_decode($str);
                foreach ($ramp_bitcoin_price['assets'] as $coin) {

                    //print_r($coin[0]);
                    //echo $coin['symbol'];
                    if ($coin['symbol'] == "BTC") 
                    {
                        $ramp['ramp_btc_value'] = $coin['price']['USD'];
                        //$coin['maxFeePercent']['USD'];
                    }
                    
                }



                $seeds_btc = json_decode($file_btc, true);

                $ramp['seeds_btc_value'] = floatval($seeds_btc['usdValue']);

                //$ramp['ramp_btc_value'] = $ramp_bitcoin_price['assets'];

                $ramp['ramp_btc_vs_seeds_btc'] = abs( (1 - $ramp['seeds_btc_value'] / $ramp['ramp_btc_value']) * 100);

                //$ramp['seeds_btc_vs_ramp_btc'] = abs( (1 - $ramp['ramp_btc_value'] / $ramp['seeds_btc_value']) * 100);



                $file = json_encode( $ramp );

        	break;
        	
        	case "tlos":
        		$file = json_encode(json_decode("{}"));
        	break;

        	default:
       			echo "Error, please specify the currency.";
        }
        

    break;


    case "fiatgateway":
        
        
        $host = "https://buy.ramp.network";
        
        //$account_name = $_POST['username'];

        //
        //hostLogoUrl

        $_POST['purchaseamount'] ? $purchase_amount = round($_POST['purchaseamount'],2) : die('Please specify the purchase amount.');


        $_POST['btcaddress'] ? $btcaddress = $_POST['btcaddress'] : die('There was a problem obtaining your bitcoin address. Please try again later.');


        $query = '?variant=hosted&hostApiKey=d2p2y87bkzot5z7o3754jkh5fdmf346tyafv7v55&swapAsset=BTC&userAddress=' . $btcaddress . '&fiatCurrency=USD&fiatValue=' . $purchase_amount . '&hostLogoUrl=https://joinseeds.com/assets/images/logos/logo-seeds-preloader.png';


        
        $file = $host . $query;




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