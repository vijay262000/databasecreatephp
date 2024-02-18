<?php
echo " welocome to creating database in php<br>";

$servername ="localhost";
$username ="root";
$password ="";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("sorry we failed connection:" . mysqli_connect_error());
}
else
{
    echo "connection was sucessfull! ";

}

//create a database

$sql = "CREATE DATABASE yadav";
$result = mysqli_query ($conn, $sql);

//check for the database creation success
if($result)
{
    echo " the dd was create successfully";
}
else
{
    echo "db was not create successfully------>". mysqli_error($conn);

}

$conn->close();
?>
