<?php
session_start();
include("Config.php");

session_start();
if(isset($_SESSION['NomeUtente']) && isset($_SESSION['Ruolo']))
{
    try {
        $sql = "SHOW COLUMNS From ".$_GET['tabella'];    //prendere nome id in base a tabella
        $stmt = $db->prepare($sql);     
        $stmt->execute();
        $field = $stmt->fetch(PDO::FETCH_ASSOC);
        $campo=$field['Field'];
        $db->beginTransaction();
        $sql = "DELETE FROM " .$_GET['tabella']. " WHERE ".$campo."=:id";       
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);   
        $stmt->execute();     
        $db->commit();
        $operazione="eliminato record " . $_GET['id'];
        include("QueryLog.php");
    } 
    catch (PDOException $e) {
        $db->rollBack();
    echo $e->getMessage();  
    }
}