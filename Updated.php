<?php
session_start();
if(isset($_SESSION['NomeUtente']) && isset($_SESSION['Ruolo']) && $_SESSION['Ruolo'] == 'Amministratore')
{
    include("config.php");
    $NomeUtente = $_SESSION['IdUtente'];
    $IdOperazione = $_SESSION['Descrizione'];

    $sql = "SELECT DescrizioneOperazione FROM operazionieseguite WHERE IdOperazione = 4";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        $DescrizioneOperazione = $row['DescrizioneOperazione'];
    }    

    if(isSet($_GET['NomeUtente']) && isSet($_GET['Passwords']) && isSet($_GET['Nome']) && isSet($_GET['Cognome']) && isSet($_GET['Mail']) && isSet($_GET['DataNascita']) && isSet($_GET['Eta']) && isSet($_GET['Indirizzo']) && isSet($_GET['CodiceFiscale']) && isSet($_GET['IdRuoli']) )
    {
        $IdUtente = filter_var($_GET['Id'], FILTER_SANITIZE_STRING);

        $NomeUtente = filter_var($_GET['NomeUtente'], FILTER_SANITIZE_STRING);
        $Passwords = filter_var($_GET['Passwords'], FILTER_SANITIZE_STRING);
        $Nome = filter_var($_GET['Nome'], FILTER_SANITIZE_STRING);
        $Cognome =filter_var($_GET['Cognome'], FILTER_SANITIZE_STRING);
        $Mail = filter_var($_GET['Mail'], FILTER_SANITIZE_STRING);
        $DataNascita = filter_var($_GET['DataNascita'], FILTER_SANITIZE_STRING);
        $Eta = filter_var($_GET['Eta'], FILTER_SANITIZE_STRING);
        $Indirizzo = filter_var($_GET['Indirizzo'], FILTER_SANITIZE_STRING);
        $CodiceFiscale = filter_var($_GET['CodiceFiscale'], FILTER_SANITIZE_STRING);
        $IdRuoli = filter_var($_GET['IdRuoli'], FILTER_SANITIZE_STRING);

        $sql = "UPDATE utenti SET NomeUtente = :NomeUtente, Passwords = :Passwords, Nome = :Nome, Cognome = :Cognome, Mail = :Mail, DataNascita = :DataNascita, Eta = :Eta, Indirizzo = :Indirizzo, CodiceFiscale = :CodiceFiscale, IdRuoli = :IdRuoli WHERE IdUtente=:id";

        $stmt = $db->prepare($sql);                                      
        $stmt->bindParam(':NomeUtente', $NomeUtente, PDO::PARAM_STR);  
        $stmt->bindParam(':Passwords', $Passwords, PDO::PARAM_STR);  
        $stmt->bindParam(':Nome', $Nome, PDO::PARAM_STR);  
        $stmt->bindParam(':Cognome', $Cognome, PDO::PARAM_STR);  
        $stmt->bindParam(':Mail', $Mail, PDO::PARAM_STR);  
        $stmt->bindParam(':DataNascita', $DataNascita, PDO::PARAM_STR);  
        $stmt->bindParam(':Eta', $Eta, PDO::PARAM_STR);  
        $stmt->bindParam(':Indirizzo', $Indirizzo, PDO::PARAM_STR);  
        $stmt->bindParam(':CodiceFiscale', $CodiceFiscale, PDO::PARAM_STR);  
        $stmt->bindParam(':IdRuoli', $IdRuoli, PDO::PARAM_STR);  
        $stmt->bindParam(':id', $IdUtente, PDO::PARAM_STR);  

        $stmt->execute(); 
        $DescrizioneOperazione = $DescrizioneOperazione . ' nella tabella Utenti ';
        
    }

    if(isset($_GET['DescrizioneMagazzino'])&&isSet($_GET['Ubicazione']))
    {
        $IdMagazzino = filter_var($_GET['Id'], FILTER_SANITIZE_STRING);
        $DescrizioneMagazzino = filter_var($_GET['DescrizioneMagazzino'], FILTER_SANITIZE_STRING);
        $Ubicazione = filter_var($_GET['Ubicazione'], FILTER_SANITIZE_STRING);

        $sql = "UPDATE magazzino SET DescrizioneMagazzino = :descrizione, Ubicazione = :ubicazione WHERE IdMagazzino=:id";

        $stmt = $db->prepare($sql);                                  
        $stmt->bindParam(':descrizione', $DescrizioneMagazzino, PDO::PARAM_STR);      
        $stmt->bindParam(':ubicazione', $Ubicazione, PDO::PARAM_STR);  
        $stmt->bindParam(':id', $IdMagazzino, PDO::PARAM_STR);  

        $stmt->execute(); 
        $DescrizioneOperazione = $DescrizioneOperazione . ' nella tabella Magazzini ';
    }
    if(isSet($_GET['Id'])&&isSet($_GET['Descrizione'])&&isSet($_GET['Prezzo'])&&isSet($_GET['QuantitaDisponibile'])&&isSet($_GET['IdMagazzino'])) 
    {
        filter_var($_GET['Id'], FILTER_SANITIZE_STRING);
        filter_var($_GET['Descrizione'], FILTER_SANITIZE_STRING);
        filter_var($_GET['Prezzo'], FILTER_SANITIZE_STRING);
        filter_var($_GET['QuantitaDisponibile'], FILTER_SANITIZE_STRING);
        filter_var($_GET['IdMagazzino'], FILTER_SANITIZE_STRING);

        $sql = "UPDATE prodotti SET Descrizione = :descrizione, Prezzo = :prezzo,  QuantitaDisponibile = :quantitadisponibile, IdMagazzino = :idmagazzino WHERE IdProdotti=:idprodotti";

        $stmt = $db->prepare($sql);                                  
        $stmt->bindParam(':descrizione', $Descrizione, PDO::PARAM_STR);      
        $stmt->bindParam(':prezzo', $Prezzo, PDO::PARAM_STR);  
        $stmt->bindParam(':quantitadisponibile', $QuantitaDisponibile, PDO::PARAM_STR);  
        $stmt->bindParam(':idmagazzino', $IdMagazzino, PDO::PARAM_STR);  
        $stmt->bindParam(':idprodotti', $IdProdotti, PDO::PARAM_STR);    
        $stmt->execute(); 
        $DescrizioneOperazione = $DescrizioneOperazione . ' nella tabella Prodotti ';
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
    header("Logout.php");
}
?>