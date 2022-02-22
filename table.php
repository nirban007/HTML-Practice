<?php

include("config.php");

$tbl_noneed="CREATE TABLE IF NOT EXISTS noneed
(
stdid INT (11) NOT NULL,
    name VARCHAR (25) NOT NULL)";
 $result=mysqli_query($myconnection,$tbl_noneed);
    if($result===TRUE)

    {
        echo '<p>noneed table created</> <br>';
    }
else{
        echo "noneed table not created ";
    }

//Student information table
$tbl_stdinfo="CREATE TABLE IF NOT EXISTS stdinfo(
stdid int (11) NOT NULL auto_increment,
    PRIMARY KEY(stdid),
    name VARCHAR (25) NOT NULL,
    dpt VARCHAR (25) NOT NULL,
    email VARCHAR (25) NOT NULL,
    password VARCHAR (25) NOT NULL
    

)";

$stdinfo=mysqli_query($myconnection,$tbl_stdinfo);
    if($stdinfo===TRUE)

    {
        echo "Student info  table created ";
    }
else{
        echo "student table not created ";
    }
//subject info

$tbl_subjinfo="CREATE TABLE IF NOT EXISTS subjinfo(
subjid INT (11) NOT NULL auto_increment,
    PRIMARY KEY(subjid),
    subjname VARCHAR (25) NOT NULL
  
)";

$subjinfo=mysqli_query($myconnection,$tbl_subjinfo);
    if($subjinfo===TRUE)

    {
        echo "Subject info  table created <br>";
    }
else{
        echo "Subjject  table not created <br> ";
    }
// result info
$tbl_result="CREATE TABLE IF NOT EXISTS result(
stdid INT (11) NOT NULL ,
  subjid INT (11) NOT NULL, 
  
marks INT (11)   NOT NULL,
 FOREIGN KEY(stdid) REFERENCES stdinfo (stdid),
 FOREIGN KEY(subjid) REFERENCES subjinfo (subjid)
)";

$std=mysqli_query($myconnection,$tbl_result);
    if($stdinfo===TRUE)

    {
        echo "Result info  table created ";
    }
else{
        echo "Result table not created";
        }
?>



