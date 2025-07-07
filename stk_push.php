<?php
header("Content-Type: application/json");

$amount = $_POST['amount'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$email = $_POST['email'];

$consumerKey = 'OQxJdQErwTydtneow3bdrTDlN26AsKwYuhTD0eD4FgnbuPFq';
$consumerSecret = 'vGLSrVQnMs98ATX0oWhaiD1pZhTZXsRbsNO0rVv77dF38Q1CMKyF5uL2AxpFENEr';
$BusinessShortCode = '174379';
$Passkey = 'YOUR_PASSKEY';
$CallBackURL = 'https://yourdomain.com/callback.php';

$accessTokenURL = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$stkPushURL = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

$credentials = base64_encode("$consumerKey:$consumerSecret");

// Get access token
$ch = curl_init($accessTokenURL);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . $credentials]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$token = json_decode($result)->access_token;
curl_close($ch);

if (!$token) {
    echo json_encode(['error' => 'Failed to retrieve access token']);
    exit;
}

// Format request
$timestamp = date('YmdHis');
$password = base64_encode($BusinessShortCode . $Passkey . $timestamp);
$payload = [
  'BusinessShortCode' => $BusinessShortCode,
  'Password' => $password,
  'Timestamp' => $timestamp,
  'TransactionType' => 'CustomerPayBillOnline',
  'Amount' => (int)$amount,
  'PartyA' => $phone,
  'PartyB' => $BusinessShortCode,
  'PhoneNumber' => $phone,
  'CallBackURL' => $CallBackURL,
  'AccountReference' => 'Donation',
  'TransactionDesc' => 'Prostate Cancer Donation'
];

// Send STK Push
$ch = curl_init($stkPushURL);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Content-Type: application/json',
  'Authorization: Bearer ' . $token
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
