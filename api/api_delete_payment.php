<?php

    include "../config/config.php";


    header ("Access-Control_Allow_Methods:DELETE");
    header ("Contect-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='DELETE'){
           
           
            $input =file_get_contents("php://input");

            parse_str($input,$_DELETE);
            $pid=$_DELETE['pid'];
            $config =new Config();

            $res=$config->deletepayment($pid);

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