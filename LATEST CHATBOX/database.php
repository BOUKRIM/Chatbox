<?php
$localhost="localhost";
$username="root";
$password="";
$db="chatbox";

$conn=new mysqli($localhost,$username,$password,$db);

if($conn->connect_error){

    printf("connecion failed : %s\n",$conn->connect_error.__LINE__);
    exit();
}

?>
