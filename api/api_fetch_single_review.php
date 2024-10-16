<?php

    include "../config/config.php";

    header ("Access-Control_Allow_Methods:GET");
    header ("Contect-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='GET'){
         
            $config =new Config();

            $uid_name=$_POST['uid_name'];
            $rid_name=$_POST['rid_name'];
            $sid_name=$_POST['sid_name'];
            $rating=$_POST['rating'];
            $comment=$_POST['comment'];
          
            $allComment=[];
            while ($resp=mysqli_fetch_assoc("$res")){
                array_push($allComment,$resp);
            }

            echo json_encode($allComment);

    }else{
        $array['error']="Invalid Request";
        echo json_encode($array);
    }

    
?>