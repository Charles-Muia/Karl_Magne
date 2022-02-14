<?php
//Variable for the Server
$ServerName="localhost";
$UserName="root";
$UserPassCode="";
$Mydb="eMobilis";

//create the connection
//variable for the connection
$Connect= new mysqli($ServerName,$UserName,$UserPassCode,$Mydb);

//Check connection
if ($Connect->connect_error){
    die("Connection to db (failed)". $Connect->connect_error());
} else
    echo "Connected Successfully";


$createtable="CREATE TABLE Credit (
    id int (10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR (50) NOT NULL,
    email varchar (50)
)";

if ($Connect->query($createtable) === TRUE) {
    echo "Table Credit created successfully";
} else {
    echo "Error creating table:";
}
$Connect->close();

?>