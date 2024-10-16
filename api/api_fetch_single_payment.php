<?php

    include "../config/config.php";

    header ("Access-Control_Allow_Methods:GET");
    header ("Contect-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='GET'){
         
            $config =new Config();

            $pid=$_GET['pid'];

            $res=$config->fetchSinglepayment()
          
            $payment=[];
            

            echo json_encode($location);

    }else{
        $array['error']="Invalid Request";
        echo json_encode($array);
    }

    
?>