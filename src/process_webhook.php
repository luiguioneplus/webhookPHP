<?php
function process_webhook($data){
    if(isset($data["order_id"])){
      $order_id = $data["order_id"];
      $customer_name= $data["customer_name"];
      $total_amount = $data["total_amount"];
      file_put_contents(__DIR__."/../logs/webhook_log.txt","Procesando pedido: ID $order_id, Cliente $customer_name, Total $total_amount".PHP_EOL,FILE_APPEND);
    };
};
?>