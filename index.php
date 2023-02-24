<?php

require_once __DIR__ . '/vendor/autoload.php';

use Scr\Curl\Request;

$curl = new Request("https://jsonplaceholder.typicode.com/albums/1");

$options = [
    'name' => 'John',
    'job'  => 'Web developer'
]; //For example

$response = $curl
    ->init()
    ->setOption(CURLOPT_POST, true)
    ->buildQuery($options)
    ->setOption(CURLOPT_RETURNTRANSFER, true)
    ->decode()
    ->fetch();

echo "
<b>ID:</b>
<br>
$response->id
<b>Name:</b>
<br>
$response->name
<b>Job</b>
<br>
$response->job
<b>Created at:</b>
$response->createdAt;
<br>
";

//a7dc5aa1f86076a8a2de24d5b36b1b57 HASH
//
//$email = 'doe@example.com';
//$clientPass = 'd0ec0beca8a3c30652746925d5380cf3';
//$cardNumber = '4111111111111111';
//$hash = md5(strtoupper(strrev($email). $clientPass .
//    strrev(substr($cardNumber,0,6).substr($cardNumber,-4))));
//echo $hash;

//try {
//     var_dump($response);
//} catch (\http\Exception\RuntimeException $exception) {
//    die(sprintf('Http error %s with code %d', $exception->getMessage(), $exception->getCode()));
//}
