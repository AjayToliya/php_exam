<?php

include "../config/config.php";

header ("Access-Control_Allow_Methods:POST");
header ("Contect-Type:application/json");

if($_SERVER['REQUEST_METHOD']=='POST'){
     
        $amount=$_POST['amount'];
        $date=$_POST['date'];
        $method=$_POST['method'];

        $config =new Config();

        $res=$config->addpayment($amount,$date,$method);

        if($res){
            $array['data']="Data Add Successfully";
        }else{
            $array['data']="Data Failed";
        }
}else{
    $array['error']="Invalid Request";
}

echo json_encode($array);
?>