<?php

 $name=$_POST['name'];
 $address=$_POST['address'];
 $phone=$_POST['phone'];
 $gender=$_POST['gender'];
 
 $con=new mysqli("localhost","root"," ","demo");
 if($con->connect_error){
    die('connection failed');
 }
else
{
    $sql = $con->prepare("INSERT INTO reg (`name`,`address`,`phone`, `gender`) VALUES (?,?,?,?)") ;
    $sql->bind_param('ssis',$name,$address,$phone,$gender);
    $sql->execute();
    echo "registration successfull";
    $sql->close();
    $con->close();
}
 

?>