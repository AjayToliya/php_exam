<?php

    include "../config/config.php";


    header ("Access-Control_Allow_Methods:POST");
    header ("Contect-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='POST'){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];

            $config =new Config();

            $res=$config->addUser($name,$email,$phone);

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