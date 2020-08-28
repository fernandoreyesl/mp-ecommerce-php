<?php

require __DIR__  . '/vendor/autoload.php';

header("Status: 200");

    MercadoPago\SDK::setAccessToken("APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181");
    $bd=conectar_bd();

    $merchant_order = null;

    switch($_GET["topic"]) {
        case "payment":

            $payment = MercadoPago\Payment::find_by_id($_GET["id"]);
            // Get the payment and the corresponding merchant_order reported by the IPN.

    }

    $paid_amount = 0;
    if ($payment){

              if ($payment->status == 'approved'){

              }

              if ($payment->status == 'in_process'){


              }

              if ($payment->status == 'rejected'){


                 }

             }
?>