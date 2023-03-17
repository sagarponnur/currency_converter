<?php

function currency_converter($from_currency, $to_currency, $amount) {
// Set API endpoint URL and API key
$url = 'https://openexchangerates.org/api/latest.json';
$app_id = 'YOUR_APP_ID'; // Replace with your own API key

// Make API request
$request_url = "$url?app_id=$app_id&base=$from_currency&symbols=$to_currency";
$response = file_get_contents($request_url);
$data = json_decode($response, true);

// Get exchange rate for target currency
$exchange_rate = $data['rates'][$to_currency];

$converted_amount = $amount * $exchange_rate;

// return  result
return $converted_amount;
}

echo currency_converter("USD", "EUR", 500);

?>
