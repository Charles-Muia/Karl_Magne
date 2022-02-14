<?php
//MySQLi Object oriented Way
//Variable for the Server
$ServerName="localhost";
$UserName="root";
$UserPassCode="";


//create the connection
//variable for the connection
$Connect= new mysqli($ServerName,$UserName,$UserPassCode);

//Check connection
if ($Connect->connect_error){
    die("Connection to db (failed)". $Connect->connect_error());
    } else
        echo "Connected Successfully";

//create a database
$sqlcreate="CREATE DATABASE eMobilisPHP";

if ($Connect->query($sqlcreate)===TRUE) {
    echo "Database $sqlcreate created Successfully";
} else {
        echo "Failed to create $sqlcreate db, check syntax";
    }
  $Connect->close();