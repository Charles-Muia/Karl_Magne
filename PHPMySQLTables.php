<?php
//Variable for the Server
$ServerName="localhost";
$UserName="root";
$UserPassCode="";                    //specify the value for variable $UserPassCode.
$Mydb="eMobilis";                    //specify which bd where the table will be created.

//create the connection
//variable for the connection
$Connect= new mysqli($ServerName,$UserName,$UserPassCode,$Mydb);

//Check connection
if ($Connect->connect_error){
    die("Connection to db (failed)". $Connect->connect_error());
} else
    echo "Connected Successfully";

//name of the table to create in the database named emobilis
$createtable="CREATE TABLE Credit (  
    id int (10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR (50) NOT NULL,
    email varchar (50)
)";

//Check if the table (Credit) was created
if ($Connect->query($createtable) === TRUE) {
    echo "Table Credit created successfully";
} else {
    echo "Error creating table:";
}
$Connect->close();

?>