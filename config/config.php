<?php

class Config{
    private $Host_NAME= "127.0.0.1";
    private $USER_NAME = "root";
    private $PASSWORD = "";
    private $DB_NAME = "php_exam";

    public $con;

    function initConnection(){
        $this->con = mysqli_connect($this->Host_NAME, $this->USER_NAME,$this->PASSWORD,$this->DB_NAME);
    }


    function addUser($name,$email,$phone){
        $this->initConnection();
        $query = "INSERT INTO user(name,email,phone) VALUES ('$name','$email','$phone');";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function deleteUser($id){
        $this->initConnection();
        $query = "DELETE FROM user WHERE id=$id";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function updateUser($id,$name,$email,$phone){
        $this->initConnection();
        $query ="UPDATE user SET name='$name',email='$email',phone='$phone' WHERE id='$id'";
        $res =  mysqli_query($this->con,$query);
        return $res;
    }

    function fetchAllUser(){
        $this->initConnection();
        $query="SELECT * FROM user";
        $res = mysqli_query($this->con,$query);
        return $res;
    }
    
    function fetchSingleUser(){
        $this->initConnection();
        $query="SELECT * FROM user WHERE id=$id";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function addLocation($name,$email,$phone){
        $this->initConnection();
        $query = "INSERT INTO location (name,price,des) VALUES ('$name','$price','$des');";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function deleteLocation($id){
        $this->initConnection();
        $query = "DELETE FROM location WHERE id=$id";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function updateLocation($id,$name,$price,$des){
        $this->initConnection();
        $query ="UPDATE location SET name='$name',price=$price,des=$des WHERE id='$id'";
        $res =  mysqli_query($this->con,$query);
        return $res;
    }

    function fetchAllLocation(){
        $this->initConnection();
        $query="SELECT * FROM location";
        $res = mysqli_query($this->con,$query);
        return $res;
    }
    
    function fetchSingleLocation(){
        $this->initConnection();
        $query="SELECT * FROM location WHERE id=$id";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function addComment($){
        $this->initConnection();
        $query = "INSERT INTO reviews(uid,rid_name,sid_name,rating,comment) VALUES('$uid','$rid_name','$sid_name','$rating','$comment');";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function deleteComment($uid){
        $this->initConnection();
        $query = "DELETE FROM reviews WHERE uid=$uid";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function updateComment($uid,$rid_name,$sid_name,$rating,$comment){
        $this->initConnection();
        $query ="UPDATE reviews SET sid_name='$sid_name',rating='$rating',comment='$comment' WHERE uid='$uid'";
        $res =  mysqli_query($this->con,$query);
        return $res;
    }

    function fetchAllComment(){
        $this->initConnection();
        $query="SELECT * FROM reviews";
        $res = mysqli_query($this->con,$query);
        return $res;
    }
    
    function fetchSingleComment(){
        $this->initConnection();
        $query="SELECT * FROM reviews WHERE rid_name='$rid_name'";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function addpayment($amount,$date,$method){
        $this->initConnection();
        $query = "INSERT INTO payment(amount,date,method) VALUES(amount='$amount',date='$date',method='$method');";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function deletepayment($pid){
        $this->initConnection();
        $query = "DELETE FROM payment WHERE pid='$pid'";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function updatepayment($pid,$amount,$date,$method){
        $this->initConnection();
        $query ="UPDATE payment SET amount='$amount',date='$date',method='$method' WHERE pid='$pid'";
        $res =  mysqli_query($this->con,$query);
        return $res;
    }

    function fetchAllpayment(){
        $this->initConnection();
        $query="SELECT * FROM payment";
        $res = mysqli_query($this->con,$query);
        return $res;
    }
    
    function fetchSinglepayment($pid){
        $this->initConnection();
        $query="SELECT * FROM payment WHERE pid='$pid'";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function addServies($name,$email,$phone){
        $this->initConnection();
        $query = "INSERT INTO servies (name,price,des) VALUES ('$name','$price','$des');";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function deleteServies($id){
        $this->initConnection();
        $query = "DELETE FROM servies WHERE id=$id";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function updateServies($id,$name,$price,$des){
        $this->initConnection();
        $query ="UPDATE servies SET name='$name',price=$price,des=$des WHERE id='$id'";
        $res =  mysqli_query($this->con,$query);
        return $res;
    }

    function fetchAllServies(){
        $this->initConnection();
        $query="SELECT * FROM servies";
        $res = mysqli_query($this->con,$query);
        return $res;
    }
    
    function fetchSingleServies(){
        $this->initConnection();
        $query="SELECT * FROM servies WHERE id=$id";
        $res = mysqli_query($this->con,$query);
        return $res;
    }
}

?>