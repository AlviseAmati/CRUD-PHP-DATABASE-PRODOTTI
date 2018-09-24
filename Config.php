<?php
    try{
    $hostname="localhost";
    $hostname="192.168.245.11";
    $user="root";
    $pass="";
    $dbname="provamaggioli";
    $db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    /*$db = new PDO("mysql:host=$servername;dbname = $dbname", $username,$password, array(
        PDO::ATTR_PERSISTENT => true
    ));*/

    }
    catch (PDOException $e) 
    {
        echo "Errore: " . $e->getMessage();
        die();
    }
    
    /*
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
        die("Connection failed: " . $conn->connect_error);
        */
?>