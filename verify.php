<?php
$access_token = '58P8ibBVUH8gFR4E6Nu6oAqOlEgw6ecbgxxGHQMYV62HYp+DOxDUrw9KIfc/gFO3VgctWelHB3udQchJ03yHiVZuVudtjXI8NVgFf3IeSX8BLqzW8VO4LMzYzYxoOZGxGsskTYmBzN0nCzOta89VywdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);   
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;