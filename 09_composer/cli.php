<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
$client = new \GuzzleHttp\Client([
    'verify' => false,
]);

// $client = new Client();
// $response = $client->request('GET', 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$body = $response->getBody();
$data = json_decode($body);

echo 'Bitcoin price in USD: $' . $data->bitcoin->usd;