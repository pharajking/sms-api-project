<?php
$api_key='7436c0ef5868f622';
$secret_key = 'MWQxOGE2MmEzMTNmZmQ3NzNjZDY4MDFjNjczODBhZDllYWU2MjcwZWQ3Mjc4ZDFiNGQ3ZGY2ODkyNmQxYTcwMg==

';

$newline = '
 ';

$postData = array(
    'source_addr' => 'INFO',
    'encoding'=>1,
    'schedule_time' => '',
    'message' => 'Hi,'.$newline.' Payment Successfully, Thank of choose the online Shop & Welcome again',
    'recipients' => [array('recipient_id' => '1','dest_addr'=>'2550762091547'),array('recipient_id' => '2','dest_addr'=>'255762091547')]
);

$Url ='https://apisms.beem.africa/v1/send';

$ch = curl_init($Url);
error_reporting(E_ALL);
ini_set('display_errors', 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Authorization:Basic ' . base64_encode("$api_key:$secret_key"),
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($postData)
));

$response = curl_exec($ch);

if($response === FALSE){
        echo $response;

    die(curl_error($ch));
}
var_dump($response);