<?php

    include "../config/config.php";

    header ("Access-Control_Allow_Methods:GET");
    header ("Contect-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='GET'){
         
            $config =new Config();

            $id=$_POST['id'];
            $name=$_POST['name'];
            $email=$_POST['price'];
            $phone=$_POST['des'];

          
            $location=[];
            while ($resp=mysqli_fetch_assoc("$res")){
                array_push($location,$resp);
            }

            echo json_encode($location);

    }else{
        $array['error']="Invalid Request";
        echo json_encode($array);
    }

    
?>