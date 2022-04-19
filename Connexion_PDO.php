<?php 
$username="root"; 
$pass="";
$host="localhost"; 
$db="fozo_shopping"; 
$dsn="mysql:host=$host;dbname=$db";

try { 
    $cnx= new PDO($dsn , $username , $pass);
    if($cnx) {
        echo ""; 
    }
} catch(PDOEXception $e) {
    $error_cnx = $e->getMessage(); 
    echo $error_cnx;
    exit();
} 
?>