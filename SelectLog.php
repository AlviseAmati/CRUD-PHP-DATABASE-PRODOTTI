<?php
session_start();
if(isset($_SESSION['IdUtente']) && isset($_SESSION['Password']) && $_SESSION['Ruolo'] == 'Amministratore')
{
    include("config.php");
    $results_per_page=15;
    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
    $start_from = ($page-1) * $results_per_page;
    $sql = "SELECT IdLog, IdNome, DataOra, DescrizioneOperazione FROM logoperazioni ORDER BY IdLog DESC LIMIT $start_from".$results_per_page;
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo "
        <thead>
        <table>
        <tr>
        <th>id</th>
        <th onclick='sorting(1);'>IdNome</th>
        <th onclick='sorting(2);'>DataOra</th>
        <th onclick='sorting(3);'>DescrizioneOperazione</th>
        <th onclick='sorting(4);'>IdProdotto</th>
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