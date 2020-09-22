<?php
$host="localhost";
$user="root";
$pass="";
$db="sms";
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn!=true)
{
    echo"Please check your connection";
}
else
{
echo"";
}
?>