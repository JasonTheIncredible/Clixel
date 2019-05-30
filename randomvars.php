<?php
require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['callphp']) && !empty($_POST['callphp'])) {
$callphp = $_POST['callphp'];
switch($callphp){case "1":
  $apiKey = '96f04c28-ee5d-446e-a763-e1c1f3c867a9';
  $random = new \RandomOrg\Random($apiKey);
  // Simple method
  // following functions returns 52 random non-repeating numbers between 1-52
  $json1 = $random->generateIntegers(1, 1, 1250, false);
  $json2 = $random->generateIntegers(1, 1, 800, false);
  $result1 = $json1['result']['random']['data'][0];
  $result2 = $json2['result']['random']['data'][0];
  $randarray = array();
  $randarray[0] = $result1;
  $randarray[1] = $result2;
  header("Content-Type: application/json");
  echo json_encode($randarray);
  exit();
  }
}
// Signed methods
// following functions returns the above with signed data
//$result = $random->generateIntegers(52, 1, 52, false, 10, true);
// Verify Signature
//$random->verifySignature($result['result']['random'], $result['result']['signature']);

?>