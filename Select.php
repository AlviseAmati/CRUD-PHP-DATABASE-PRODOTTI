<?php
session_start();
if (isset($_SESSION['IdUtente']) && isset($_SESSION['Password'])) 
{
    include("config.php");
    $tabella = $_GET['tabella'];
    if ($_SESSION['Ruolo'] == 'Ospite')
            $ruolo = 'Ospite';
    else
        $ruolo = 'Amministratore';

    $NomeUtente = $_SESSION['IdUtente'];

    $sql = "SELECT DescrizioneOperazione FROM operazionieseguite WHERE IdOperazione = 6";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        $DescrizioneOperazione = $row['DescrizioneOperazione'];
    }  

    $DescrizioneOperazione = $DescrizioneOperazione . ' nella tabella ' . $tabella;
    $DataOra = date ("d/m/Y G:i");
    $sql = "INSERT INTO logoperazioni (IdNome, DataOra, DescrizioneOperazione) VALUES(:nomeutente,:dataora,:descrizioneoperazione)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':nomeutente', $NomeUtente, PDO::PARAM_STR);
    $stmt->bindParam(':dataora', $DataOra, PDO::PARAM_STR);
    $stmt->bindParam(':descrizioneoperazione', $DescrizioneOperazione, PDO::PARAM_STR);
    $stmt->execute();

    if($tabella == 'Ruoli')
    {
        $sql = "SELECT IdRuoli, DescrizioneRuolo FROM ruoli";
        $stmt = $db->prepare($sql);  
        $stmt->execute();   
        echo "
            <thead>
            <tr>
            <th>IdRuoli</th>
            <th onclick='sorting(1);'>Descrizione Ruolo</th>
            </tr>
            </thead>";

            while($rows = $stmt->fetchAll(PDO::FETCH_ASSOC))
            {
                foreach($rows as $row)
                {
                    $IdRuoli = $row['IdRuoli'];
                    $DescrizioneRuolo = $row['DescrizioneRuolo'];
                    echo "<tr>"; 
                    echo "<td>" . $IdRuoli . "</td>";
                    echo "<td onclick='sorting(1);'>" . $DescrizioneRuolo . "</td>";
                    echo "</tr>";
                }
            }

    }

    if($tabella == 'Utenti')
    {
        $sql = "SELECT IdUtente, NomeUtente, Nome, Cognome, Mail, DataNascita, Eta, Indirizzo, CodiceFiscale, DescrizioneRuolo, Abilitazione, DataReg FROM utenti INNER JOIN ruoli ON utenti.IdRuoli = ruoli.IdRuoli";
        $stmt = $db->prepare($sql);  
        $stmt->execute();   

        echo "
            <thead>
            <tr>
            <th>Id Utente</th>
            <th onclick='sorting(1);'>Nome Utente</th>
            <th onclick='sorting(4);'>Nome</th>
            <th onclick='sorting(5);'>Cognome</th>
            <th onclick='sorting(6);'>Mail</th>
            <th onclick='sorting(7);'>Data Nascita</th>
            <th onclick='sorting(8);'>Eta</th>
            <th onclick='sorting(9);'>Indirizzo</th>
            <th onclick='sorting(10);'>Codice Fiscale</th>
            <th onclick='sorting(11);'>Ruoli</th>
            <th onclick='sorting(12);'>Abilitazione</th>
            <th onclick='sorting(13);'>DataReg</th>
            </tr>
            </thead>";
            
            while($rows = $stmt->fetchAll(PDO::FETCH_ASSOC))
            {
                foreach($rows as $row)
                {
                    $IdUtente = $row['IdUtente'];
                    $NomeUtente = $row['NomeUtente'];
                    $Nome = $row['Nome'];
                    $Cognome = $row['Cognome'];
                    $Mail = $row['Mail'];
                    $DataNascita = $row['DataNascita'];
                    $Eta = $row['Eta'];
                    $Indirizzo = $row['Indirizzo'];
                    $CodiceFiscale = $row['CodiceFiscale'];
                    $IdRuoli = $row['DescrizioneRuolo'];
                    $Abilitazione=$row['Abilitazione'];
                    $Data=$row['DataReg'];
                    $DataReg=substr($Data,0,4) . "/" . substr($Data,4,2) . "/" . substr($Data,6,2);
                    echo "<tr>"; 
                    echo "<td>" . $IdUtente . "</td>";
                    echo "<td onclick='sorting(1);'>" . $NomeUtente . "</td>";
                    echo "<td onclick='sorting(3);'>" . $Nome . "</td>";
                    echo "<td onclick='sorting(4);'>" . $Cognome . "</td>";
                    echo "<td onclick='sorting(5);'>" . $Mail . "</td>";
                    echo "<td onclick='sorting(6);'>" . $DataNascita . "</td>";
                    echo "<td onclick='sorting(7);'>" . $Eta . "</td>";
                    echo "<td onclick='sorting(8);'>" . $Indirizzo . "</td>";
                    echo "<td onclick='sorting(9);'>" . $CodiceFiscale . "</td>";
                    echo "<td onclick='sorting(10);'>" . $IdRuoli . "</td>";
                    echo "<td onclick='sorting(11);'>" . $Abilitazione . "</td>";
                    echo "<td onclick='sorting(12);'>" . $DataReg . "</td>";
                    if($ruolo == 'Amministratore') 
                    {
                        if($IdRuoli!='Amministratore')
                        {
                            echo "<td> <input type='radio' name='seleziona' value='".$IdUtente."'> </td>";
                            echo "</tr>";
                        }
                    }

                        
                }
            }
    }
    if($tabella == 'Magazzini')
    {
        $sql = "SELECT IdMagazzino, DescrizioneMagazzino, Ubicazione FROM magazzino";
        $stmt = $db->prepare($sql);  
        $stmt->execute();   

        echo "
            <thead>
            <tr>
            <th>IdMagazzino</th>
            <th onclick='sorting(1);'>Descrizione Magazzino</th>
            <th onclick='sorting(2);'>Ubicazione</th>
            </tr>
            </thead>";

            while($rows = $stmt->fetchAll(PDO::FETCH_ASSOC))
            {
                foreach($rows as $row)
                {
                    $IdMagazzino = $row['IdMagazzino'];
                    $DescrizioneMagazzino = $row['DescrizioneMagazzino'];
                    $Ubicazione = $row['Ubicazione'];
                    echo "<tr>"; 
                    echo "<td>" . $IdMagazzino . "</td>";
                    echo "<td onclick='sorting(1);'>" . $DescrizioneMagazzino . "</td>";
                    echo "<td onclick='sorting(2);'>" . $Ubicazione . "</td>";
                    if($ruolo == 'Amministratore') 
                        echo "<td> <input type='radio' name='seleziona' value='".$IdMagazzino."'> </td>";
                    echo "</tr>";
                }
            }
    }
    if($tabella == 'Prodotti')
    {
        $sql = "SELECT IdProdotti, Descrizione, Prezzo, QuantitaDisponibile, IdMagazzino FROM prodotti";
        $stmt = $db->prepare($sql);  
        $stmt->execute();         

        echo "
            <thead>
            <tr>
            <th>Id Prodotti</th>
            <th onclick='sorting(1);'>Descrizione</th>
            <th onclick='sorting(2);'>Prezzo</th>
            <th onclick='sorting(3);'>Quantita Disponibile</th>
            <th onclick='sorting(4);'>Descrizione Magazzino</th>
            <th onclick='sorting(5);'>Magazzino</th>
            </tr>
            </thead>";

            while($rows = $stmt->fetchAll(PDO::FETCH_ASSOC))
            {
                foreach($rows as $row)
                {
                    $IdProdotti = $row['IdProdotti'];
                    $Descrizione = $row['Descrizione'];
                    $Prezzo = $row['Prezzo'];
                    $QuantitaDisponibile = $row['QuantitaDisponibile'];
                    $IdMagazzino = $row['IdMagazzino'];
                    if($IdMagazzino != NULL)
                    {
                        $sql1 = "SELECT DescrizioneMagazzino FROM magazzino WHERE IdMagazzino = $IdMagazzino";
                        $stmt1 = $db->prepare($sql1);  
                        $stmt1->execute();                          

                        while($rows1 = $stmt1->fetchAll(PDO::FETCH_ASSOC))
                        {
                            foreach($rows1 as $row1)
                            {
                                $DescrizioneMagazzino1 = $row1['DescrizioneMagazzino'];
                            }
                        }

                        echo "<tr>"; 
                        echo "<td>" . $IdProdotti . "</td>";
                        echo "<td onclick='sorting(1);'>" . $Descrizione . "</td>";
                        echo "<td onclick='sorting(2);'>" . $Prezzo . "</td>";
                        echo "<td onclick='sorting(3);'>" . $QuantitaDisponibile . "</td>";
                        echo "<td onclick='sorting(4);'>" . $DescrizioneMagazzino1 . "</td>";
                        echo "<td onclick='sorting(5);'>" . $IdMagazzino . "</td>";
                        if($ruolo == 'Amministratore') 
                            echo "<td> <input type='radio' name='seleziona' value='".$IdProdotti."'> </td>";
                        echo "</tr>";
                    }
                }
            }
    }
}
else
{
    echo "<script language='JavaScript'>\n"; 
    echo "alert('Accesso negato: torna indietro');\n"; 
    echo"window.location.href = 'Login.php';";
    echo "</script>"; 
}