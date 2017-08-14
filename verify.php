<?php
$access_token = 'E/Sw48ckHwE0pozIY/UqcRpbsuq7MuGc52wWB2p+F1gpd2QsaSAjLbwV9vSzpJieM9B9KhupR5NejlQdDFu4UfdxPfeZKtp/P3ka8M1cHYgqiZ7xL8fvxUmzoixr+vDx1iX7bg/6t2OmoJNs9hn97gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
