<?php

    include "../config/config.php";

    header ("Access-Control_Allow_Methods:GET");
    header ("Contect-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='GET'){
         
            $config =new Config();

            $res=$config->fetchAllServies();
            $allUsers=[];

            while($resp=mysqli_fetch_assoc($res)){
                array_push($allUsers,$resp);
            }
            echo json_encode($allUsers);

    }else{
        $array['error']="Invalid Request";
        echo json_encode($array);
    }

    
?>