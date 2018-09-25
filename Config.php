<?php
    try{
    $hostname="localhost";
    $user="root";
    $pass="";
    $dbname="provamaggioli";
    $db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $perpage=15;

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