<?php

    include "../config/config.php";

    header ("Access-Control_Allow_Methods:GET");
    header ("Contect-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='GET'){
         
            $config =new Config();

            $res=$config->fetchAllpayment();
            $allBill=[];

            while($resp=mysqli_fetch_assoc($res)){
                array_push($allBill,$resp);
            }
            echo json_encode($allBill);

    }else{
        $array['error']="Invalid Request";
        echo json_encode($array);
    }

    
?>