<?php
$host="localhost";
$user="root";
$password="";

$myconn=mysqli_connect($host,$user,$password);
$sql="CREATE DATABASE batch48";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
    echo "database created";
}
else
{
 echo " database not created";   
}

?>