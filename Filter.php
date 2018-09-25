<?php
session_start();
if(isset($_SESSION['NomeUtente']) && isset($_SESSION['Ruolo']) && $_SESSION['Ruolo'] == 'Amministratore')
{
    include("config.php");

    $sql = "SELECT IdLog, IdNome, DataOra, DescrizioneOperazione FROM logoperazioni WHERE IdNome=:stringa";
    $stmt = $db->prepare($sql);
    $stringa=filter_var($_GET['stringa'], FILTER_SANITIZE_STRING);
    $stmt->bindParam(':stringa', $stringa, PDO::PARAM_STR);
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
    include("Logout.php");
}