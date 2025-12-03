<?php
 $logfile= __DIR__ ."/../logs/webhook_log.txt";
 //el input que estamos recibiendo seria el input de la notificacion
 $input= file_get_contents('php://input');
 $data= json_decode($input,true);
 if ($data){
    file_put_contents($logfile,date("Y-m-d H:i:s")."-webhook recibido: ".json_encode($data). PHP_EOL,FILE_APPEND);
    require_once "process_webhook.php";
    process_webhook($data);
    http_response_code(200);
    echo json_encode(["message" =>"webhook recibido correctamente"])."\n";
 } else {
    
    http_response_code(400);
    echo json_encode(["message" =>"Error al recibir el webhook "])."\n";
 }
 
 
?>