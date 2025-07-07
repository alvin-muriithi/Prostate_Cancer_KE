<?php
header("Content-Type: application/json;");




$stkCallbackResponse = file_get_contents('php://input');
$logFile = "mpesa_callback.json";
$log = fopen($logFile, "a");
fwrite($log, $stkCallbackResponse);
fclose($log);


// Respond to Safaricom
echo json_encode(["ResultCode" => 0, "ResultDesc" => "Callback received successfully"]);
?>


