<?php
$host="localhost";
$user="root";
$password="";
$dbname="bat48";

$myconnection=mysqli_connect($host,$user,$password,$dbname);



if(mysqli_connect_error())
{
    echo mysqli_connect_error();
}
else
{
 //echo " database connected";   
}