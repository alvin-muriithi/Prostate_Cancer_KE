<?php
$consumerKey = 'Adfv00z31jtU55XzbTLU2jgoHa9DxkDbHhwbJmPvVjfYDqnY';
$consumerSecret = 'Vb12nAJk9u4TSAjV2F0IZs7AWXQ3iYpoW6awmEDCCX8NnljeDJvVB0ZxvSgad5J2';

$credentials = base64_encode($consumerKey . ':' . $consumerSecret);

$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . $credentials]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

$result = json_decode($response);
echo $result->access_token;
?>
