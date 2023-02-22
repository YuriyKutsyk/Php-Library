<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

$response = $client->request("POST", "https://jsonplaceholder.typicode.com/albums/1",
[
    'headers' => [
        'Accept' => 'application/json',
        'Content-type' => 'application/json'
    ]
]);
//echo $response->getBody()->getContents();






//require_once __DIR__ . '/vendor/autoload.php';
//require_once __DIR__ . '/scr/Curl/Request.php';
//require_once __DIR__ . '/scr/Curl/HttpRequest.php';
//
//$curl = new \Scr\Curl\Request("https://jsonplaceholder.typicode.com/albums/1");
//$response = $curl->getResponse(['username' => 'dassad']);
//
//try {
//     var_dump($response);
//} catch (\http\Exception\RuntimeException $exception) {
//    die(sprintf('Http error %s with code %d', $exception->getMessage(), $exception->getCode()));
//}
