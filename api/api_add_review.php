<?php

    include "../config/config.php";

    header ("Access-Control_Allow_Methods:POST");
    header ("Contect-Type:application/json");

    if($_SERVER['REQUEST_METHOD']=='POST'){
            $uid_name=$_POST['uid_name'];
            $rid_name=$_POST['rid_name'];
            $sid_name=$_POST['sid_name'];
            $rating=$_POST['rating'];
            $comment=$_POST['comment'];

            $config =new Config();

            $res=$config->addComment($uid_name,$rid_name,$sid_name,$rating,$comment);

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