<?php 

			
	     $account_id  = "add here store account id"; 
	     $authToken = "add here access token"
		 $base_url = 'https://api.softtouch.eu/1/accounts/' . $account_id . '/';
		

		// Curl to fetch products 
		$api_url = $base_url . 'products?stores=01&online=1&display=full&take=500'; // TO get products 
		$httpRequest = curl_init();
        curl_setopt($httpRequest, CURLOPT_HTTPHEADER, array('Authorization: ' . $authToken, 'Content-Type: application/json'));
        curl_setopt($httpRequest, CURLOPT_URL, $api_url);
        curl_setopt($httpRequest, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($httpRequest);
        if ($response === FALSE){
            die(curl_error($httpRequest));
        }
        curl_close($httpRequest);
        $product_arr = json_decode($response); 