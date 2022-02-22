<?php    ?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        
        <title> Learning it self myself </title>
       <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <div id="head"> 
        <img src="image/slide1.jpg" style=" width:100%; height:150px; ">
        <div id="menu"> 
        
        <?php
include("menu/menu.php");

?>
        </div>
        </div>
        <div id="sbar"> 
        <ul> 
            <li> <a href="index.html">Home </a></li> <hr>
            <li> <a href="signup.html">Signup </a></li><hr>
            <li> <a href="contact.html">Contact </a></li><hr>
            <li> <a href="#"> About us</a></li>
             </ul>
        </div>
        <div id="cont"> 
        <h1>Student Info As below</h1>
        <table border="2px" style="width:100%;">
            <tr> <th> Student name</th> <th> Student Id </th> <th> Student Dept.</th></tr>
            <tr><td>Alif </td><td>12345</td> <td rowspan="2">a<sup>2</sup>+b<sup>2</sup></td></tr>
            <tr> <td colspan="2"> H<sub>2</sub>O</td> </tr>
            
            </table>
        
        </div>
        <div id="footer"> <p> This is footer</p> </div>
 
    
    
    
    
    </body>
       