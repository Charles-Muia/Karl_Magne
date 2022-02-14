<?php
//Variable for the Server
$ServerName="localhost";
$UserName="root";
$UserPassCode="";
$Mydb="eMobilis";


//create the connection
//variable for the connection
$Connect= new mysqli($ServerName,$UserName,$UserPassCode);

//Check connection
if ($Connect->connect_error){
    die("Connection to db (failed)". $Connect->connect_error());
} else
    echo "Connected Successfully";

////create a database
//$sqlcreate="CREATE DATABASE eMobilisTable";
//
//if ($Connect->query($sqlcreate)===TRUE) {
//    echo "Database $sqlcreate created Successfully";
//} else {
//    echo "Failed to create $sqlcreate db, check syntax";
//}
//$Connect->close();

//create a table

$createtable="CREATE TABLE Credit (
    No INT (10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FIRST name VARCHAR (50) NOT NULL,
)";

if ($Mydb->query($createtable)===TRUE) {
    echo "Database $createtable created Successfully";
} else {
    echo "Failed to create $createtable table, check syntax";
}
$Connect->close();  //

