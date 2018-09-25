<?php
session_start();
include("Config.php");

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
        $stmt->bindParam(':id', $_GET['Id'], PDO::PARAM_INT);   
        $stmt->execute();     
        $db->commit();
        $operazione="eliminato record " . $_GET['Id'];
        $IdProdotti=$_GET['Id'];
    } 
    catch (PDOException $e) {
        $db->rollBack();
    echo $e->getMessage();  
    }
    $tabella=$_GET['tabella'];
    $NomeUtente=$_SESSION['NomeUtente'];
    $DataOra = date ("d/m/Y G:i");
    $sql = "INSERT INTO logoperazioni (IdNome, DataOra, DescrizioneOperazione) VALUES(:nomeutente,:dataora,:descrizioneoperazione)";
    $stmt = $db->prepare($sql);
    $DescrizioneOperazione="Record $IdProdotti eliminato dalla tabella $tabella";
    $stmt->bindParam(':nomeutente', $NomeUtente, PDO::PARAM_STR);
    $stmt->bindParam(':dataora', $DataOra, PDO::PARAM_STR);
    $stmt->bindParam(':descrizioneoperazione', $DescrizioneOperazione, PDO::PARAM_STR);
    $stmt->execute();
}
else
{
    echo "<script language='JavaScript'>\n"; 
    echo "alert('Accesso negato: torna indietro');\n"; 
    echo "</script>"; 
    header('location:Login.php');
}
?>
