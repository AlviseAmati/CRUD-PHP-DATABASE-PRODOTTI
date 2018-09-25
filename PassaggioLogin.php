<?php
session_start();
if ((isset($_POST['username']) && isset( $_POST['password'])) || isset($_GET['LogOut'])) 
{
    if(!isset($_GET['LogOut']))
    {
        include("config.php");
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql = "SELECT IdUtente, NomeUtente, IdRuoli, Passwords, Abilitazione FROM utenti";
        $stmt1 = $db->prepare($sql);
        $stmt1-> execute();
        $verifica = 0;
        while($row1 = $stmt1->fetch(PDO::FETCH_ASSOC))
        {
            $IdUtente = $row1['IdUtente'];
            $NomeUtente = $row1['NomeUtente'];
            $PasswordDB = $row1['Passwords'];
            $IdRuoli = $row1['IdRuoli']; 
            $Abilitazione=$row1['Abilitazione'];
            if($username == $NomeUtente && $password == $PasswordDB)
            {
                if($Abilitazione == 0)
                {
                    header('location:Login.php?errore=2');       
                    break;           
                }
                $verifica = 1;
                $sql = "SELECT DescrizioneRuolo  FROM ruoli WHERE IdRuoli = :idruoli";   
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':idruoli', $IdRuoli, PDO::FETCH_ASSOC);
                $stmt->execute();
                while($row2 = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $descrizioneruolo = $row2['DescrizioneRuolo'];
                }           
                $DataOra = date ("d/m/Y G:i");
                $_SESSION['IdUtente'] = $NomeUtente;
                $_SESSION['Password'] = $PasswordDB;
                $_SESSION['Ruolo'] = $descrizioneruolo;
                $_SESSION['DataOra'] = $DataOra;
                $_SESSION['Descrizione'] = 1; 
                $_SESSION['Verifica'] = 1;
        
                $sql = "SELECT DescrizioneOperazione FROM operazionieseguite WHERE IdOperazione = 1";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $DescrizioneOperazione = $row['DescrizioneOperazione'];
                }       

                $sql = "INSERT INTO logoperazioni (IdNome, DataOra, DescrizioneOperazione) VALUES(:nomeutente,:dataora,:descrizioneoperazione)";
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':nomeutente', $NomeUtente, PDO::PARAM_STR);
                $stmt->bindParam(':dataora', $DataOra, PDO::PARAM_STR);
                $stmt->bindParam(':descrizioneoperazione', $DescrizioneOperazione, PDO::PARAM_STR);
                $stmt->execute();
                
                if($descrizioneruolo == 'Ospite')
                    header('location:Crud.php');
                else
                header('location:Admin.php');
            } 
            $Abilitazione=1;
        }
        if($verifica == 0 && $Abilitazione != 0)
        { 
            header('location:Login.php?errore=1');    
        }

    }
    else 
    {
        include("config.php");
        $NomeUtente = $_SESSION['IdUtente'];
        $IdOperazione = $_SESSION['Descrizione'];

        $DataOra = date ("d/m/Y G:i");

        $sql = "SELECT DescrizioneOperazione FROM operazionieseguite WHERE IdOperazione = 2";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        while($row4 = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $DescrizioneOperazione = $row4['DescrizioneOperazione'];
        }
        $sql = "INSERT INTO logoperazioni (IdNome, DataOra, DescrizioneOperazione) VALUES(:nomeutente,:dataora,:descrizioneoperazione)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nomeutente', $NomeUtente, PDO::PARAM_STR);
        $stmt->bindParam(':dataora', $DataOra, PDO::PARAM_STR);
        $stmt->bindParam(':descrizioneoperazione', $DescrizioneOperazione, PDO::PARAM_STR);
        $stmt->execute();
      
        $db = null;
        session_destroy();  
        exit();   
        echo "<script language='JavaScript'>\n"; 
        echo"window.location.href = 'Login.php';";
        echo "</script>"; 
    }
}   
?>