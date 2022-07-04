<?php
$host = getenv('WP_URL');
$url = $host . '/wp-json/wp/v2/users';

$process = curl_init($url);
curl_setopt($process, CURLOPT_HEADER, 0);
curl_setopt($process, CURLOPT_TIMEOUT, 10);
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1); 

$return = curl_exec($process);
curl_close($process);

$return_array = json_decode($return, true);

echo print_r($return_array, true);