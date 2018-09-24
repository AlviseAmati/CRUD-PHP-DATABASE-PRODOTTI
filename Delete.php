<?php
session_start();
if(isset($_SESSION['IdUtente']) && isset($_SESSION['Password']) && $_SESSION['Ruolo'] == 'Amministratore')
{
    include("config.php");
    $sql = "SELECT DescrizioneOperazione FROM operazionieseguite WHERE IdOperazione = 5";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        $DescrizioneOperazione = $row['DescrizioneOperazione'];
    }      

    $NomeUtente  = $_SESSION['IdUtente'];
    $IdOperazione = $_SESSION['Descrizione'];
    $tabella  = $_GET['tabella'];

    if($tabella == 'Utenti')
    {
        $IdUtente = $_GET['Id'];
        $sql = "DELETE FROM utenti WHERE IdUtente = :idutente";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':idutente', $IdUtente, PDO::PARAM_INT);   
        $stmt->execute();
        $DescrizioneOperazione = $DescrizioneOperazione . ' dalla tabella ' . $tabella;
    }
    if($tabella == 'Magazzini')
    {
        $IdMagazzino = $_GET['Id'];
        $sql = "DELETE FROM magazzino WHERE IdMagazzino = :idmagazzino";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':idmagazzino', $IdMagazzino, PDO::PARAM_INT);   
        $stmt->execute();
        $DescrizioneOperazione = $DescrizioneOperazione . ' dalla tabella ' . $tabella;
    }
    if($tabella== 'Prodotti')
    {
        $IdProdotti=$_GET['Id'];
        $sql = "DELETE FROM prodotti WHERE IdProdotti = :idprodotti";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':idprodotti', $IdProdotti, PDO::PARAM_INT);   
        $stmt->execute();
        $DescrizioneOperazione = $DescrizioneOperazione . ' dalla tabella ' . $tabella;
    }

    $DataOra = date ("d/m/Y G:i");
    $sql = "INSERT INTO logoperazioni (IdNome, DataOra, DescrizioneOperazione) VALUES(:nomeutente,:dataora,:descrizioneoperazione)";
    $stmt = $db->prepare($sql);
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
