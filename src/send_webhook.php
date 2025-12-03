<?php
$data=[
    "order_id"=> 1234,
    "customer_name"=> "juan perez",
    "total_amount"=> 99.17,
];
$ch = curl_init("http://localhost/webhook/src/webhook.php");
curl_setopt($ch, CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_HTTPHEADER,["Content-Type: aplication/json"]);
$response = curl_exec($ch);
curl_close($ch);
echo "respuesta del webhook". $response;