<?php

    include "../config/config.php";

    header ("Access-Control_Allow_Methods:PUT,PATCH");
    header ("Contect-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='PUT' ||$_SERVER['REQUEST_METHOD']=='PATCH' ){
           
           
            $input =file_get_contents("php://input");

            parse_str($input,$_UPDATE);
            $config =new Config();
            $pid=$_UPDATE['pid'];
            $amount=$_UPDATE['amount'];
            $date=$_UPDATE['date'];
            $method=$_UPDATE['method'];

            $res=$config->updatepayment($pid,$amount,$date,$method);

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