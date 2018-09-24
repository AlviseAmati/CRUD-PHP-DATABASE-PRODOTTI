<?php
session_start();
if(isset($_SESSION['IdUtente']) && isset($_SESSION['Password']) && $_SESSION['Ruolo'] == 'Amministratore')
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

    if(isSet($_GET['NomeUtente']) && isSet($_GET['Nome']) && isSet($_GET['Cognome']) && isSet($_GET['Mail']) && isSet($_GET['DataNascita']) && isSet($_GET['Indirizzo']) && isSet($_GET['CodiceFiscale']) && isSet($_GET['IdRuoli']) && isSet($_GET['Abilitazione']) )
    {
        $IdUtente = htmlentities($_GET['Id']);

        $NomeUtente = htmlentities($_GET['NomeUtente']);
        $Nome = htmlentities($_GET['Nome']);
        $Cognome = htmlentities($_GET['Cognome']);
        $Mail = htmlentities($_GET['Mail']);
        $DataNascita = htmlentities($_GET['DataNascita']);
        $Indirizzo = htmlentities($_GET['Indirizzo']);
        $CodiceFiscale = htmlentities($_GET['CodiceFiscale']);
        $IdRuoli = htmlentities($_GET['IdRuoli']);
        $Eta= date("Y") - substr($DataNascita,0,4);
        if(date("m")<substr($DataNascita,4,2)) $Eta=$Eta-1;    
        else if(date("m")==substr($DataNascita,4,2) && date("d")<substr($DataNascita,6,2)) $Eta=$Eta-1;
        $Abilitazione = htmlentities($_GET['Abilitazione']);

        $sql = "UPDATE utenti SET NomeUtente = :NomeUtente, Nome = :Nome, Cognome = :Cognome, Mail = :Mail, DataNascita = :DataNascita, Eta = :Eta, Indirizzo = :Indirizzo, CodiceFiscale = :CodiceFiscale, IdRuoli = :IdRuoli Abilitazione=:Abilitazione WHERE IdUtente=:id";

        $stmt = $db->prepare($sql);                                      
        $stmt->bindParam(':NomeUtente', $NomeUtente, PDO::PARAM_STR);  
        $stmt->bindParam(':Nome', $Nome, PDO::PARAM_STR);  
        $stmt->bindParam(':Cognome', $Cognome, PDO::PARAM_STR);  
        $stmt->bindParam(':Mail', $Mail, PDO::PARAM_STR);  
        $stmt->bindParam(':DataNascita', $DataNascita, PDO::PARAM_STR);  
        $stmt->bindParam(':Eta', $Eta, PDO::PARAM_STR);  
        $stmt->bindParam(':Indirizzo', $Indirizzo, PDO::PARAM_STR);  
        $stmt->bindParam(':CodiceFiscale', $CodiceFiscale, PDO::PARAM_STR);  
        $stmt->bindParam(':IdRuoli', $IdRuoli, PDO::PARAM_STR); 
        $stmt->bindParam(':Abilitazione', $Abilitazione, PDO::PARAM_STR);         
        $stmt->bindParam(':id', $IdUtente, PDO::PARAM_STR);  

        $stmt->execute(); 
        $DescrizioneOperazione = $DescrizioneOperazione . ' nella tabella Utenti ';
        
    }

    if(isset($_GET['DescrizioneMagazzino'])&&isSet($_GET['Ubicazione']))
    {
        $IdMagazzino = htmlentities($_GET['Id']);
        $DescrizioneMagazzino = htmlentities($_GET['DescrizioneMagazzino']);
        $Ubicazione = htmlentities($_GET['Ubicazione']);

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
        $IdProdotti = htmlentities($_GET['Id']);
        $Descrizione = htmlentities($_GET['Descrizione']);
        $Prezzo = htmlentities($_GET['Prezzo']);
        $QuantitaDisponibile = htmlentities($_GET['QuantitaDisponibile']);
        $IdMagazzino = htmlentities( $_GET['IdMagazzino']);

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
    echo "<script language='JavaScript'>\n"; 
    echo "alert('Accesso negato: torna indietro');\n"; 
    echo"window.location.href = 'Login.php';";
    echo "</script>"; 
}
?>