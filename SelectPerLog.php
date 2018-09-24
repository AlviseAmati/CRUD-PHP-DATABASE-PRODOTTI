<?php
//creazione connessione
session_start();
include("config.php");
$sql = "SELECT IdLog,IdOperazione,DataOra,IdUtente FROM log1";
$result = $conn->query($sql);
echo "
    <thead>
    <tr>
    <th onclick='sorting(1);'><center>Operazione</center></th>
    <th onclick='sorting(2);'><center>Data e Ora</center></th>
    <th onclick='sorting(3);'><center>Utente</center></th>       
    </thead>";
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $log = $row['IdLog'];
        $descrizione = $row['IdOperazione'];
        $dataora = $row['DataOra'];
        $idutente = $row['IdUtente'];

        echo "<tr>";
        echo "<td  align = 'center' onclick='sorting(1);'>" . $descrizione . "</td>";
        echo "<td  align = 'center' onclick='sorting(2);'>" . $dataora. "</td>";
        echo "<td  align = 'center' onclick='sorting(3);'>" . $idutente . "</td>";
        echo "</tr>";
    }
}

$conn->close();