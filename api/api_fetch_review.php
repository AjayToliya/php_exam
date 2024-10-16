<?php

    include "../config/config.php";

    header ("Access-Control_Allow_Methods:GET");
    header ("Contect-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='GET'){
         
            $config =new Config();

            $res=$config->fetchAllComment();
            $allcomment=[];

            while($resp=mysqli_fetch_assoc($res)){
                array_push($allcomment,$resp);
            }
            echo json_encode($allcomment);

    }else{
        $array['error']="Invalid Request";
        echo json_encode($array);
    }

    
?>