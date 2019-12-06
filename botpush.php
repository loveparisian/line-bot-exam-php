<?php



require "vendor/autoload.php";

$access_token = 'fN8Je/N2QHISDtIiwMIz+zvkFQJsGNa7pwUpL9cIeVMwQHJCgk9RfpJ9N435vY8uXfaB6vzvnouc9Do7/jIIPJfffWsOq9Wvsl/a9eab6omlbKMLH4H78oWk2jdYXwIKq7LWIweI6UK6rzYDan7mIgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'c87b737e228e85692b5f97ad1c5b435a';

$pushID = 'Uca06916089ac49d4baed3612353291e2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







