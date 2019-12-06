<?php


$access_token = 'fN8Je/N2QHISDtIiwMIz+zvkFQJsGNa7pwUpL9cIeVMwQHJCgk9RfpJ9N435vY8uXfaB6vzvnouc9Do7/jIIPJfffWsOq9Wvsl/a9eab6omlbKMLH4H78oWk2jdYXwIKq7LWIweI6UK6rzYDan7mIgdB04t89/1O/w1cDnyilFU=';

$userId = 'Uca06916089ac49d4baed3612353291e2';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

