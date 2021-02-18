<?php
$hostname ="localhost";
$username="root";
$password="";
$database="web";
$conn=mysqli_connect($hostname,$username,$password,$database);
if($conn)
{
    echo "connection stablished...";
}
else
{
    echo "connection failed.." + mysql_connect_error();
}
?>
