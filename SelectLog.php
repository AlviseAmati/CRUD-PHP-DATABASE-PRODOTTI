<?php
session_start();
if(isset($_SESSION['IdUtente']) && isset($_SESSION['Password']) && $_SESSION['Ruolo'] == 'Amministratore')
{
    include("config.php");

    $sql = "SELECT IdLog, IdNome, DataOra, DescrizioneOperazione FROM logoperazioni";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    echo "
        <thead>
        <tr>
        <th>id</th>
        <th onclick='sorting(1);'>IdNome</th>
        <th onclick='sorting(2);'>DataOra</th>
        <th onclick='sorting(3);'>DescrizioneOperazione</th>
        </tr>
        </thead>";
        while($rows = $stmt->fetchAll(PDO::FETCH_ASSOC))
        {
            foreach($rows as $row)
            {
                $DescrizioneOperazione = $row['DescrizioneOperazione'];         
                $riga = $row['IdLog'];
                $IdNome = $row['IdNome'];
                $DataOra = $row['DataOra'];
                echo "<tr>";
                echo "<td>" . $riga . "</td>";
                echo "<td onclick='sorting(1);'>" . $IdNome . "</td>";
                echo "<td onclick='sorting(2);'>" . $DataOra . "</td>";
                echo "<td onclick='sorting(3);'>" . $DescrizioneOperazione . "</td>";          
                echo "</tr>";
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