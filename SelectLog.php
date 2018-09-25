<?php
session_start();
if(isset($_SESSION['NomeUtente']) && isset($_SESSION['Ruolo']) && $_SESSION['Ruolo'] == 'Amministratore')
{
    include("config.php");
    $sql = "SELECT COUNT(*) FROM logoperazioni";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchColumn(); 
    $tot_records = $rows;
    $page = 1;
    if(isSet($_GET['page']))
    {$page = filter_var($_GET['page'],FILTER_SANITIZE_NUMBER_INT);}
    $tot_pagine = ceil($tot_records/$perpage);
    $pagina_corrente = $page;
    $primo = ($pagina_corrente-1)*$perpage;
    $sql = "SELECT IdLog, IdNome, DataOra, DescrizioneOperazione FROM logoperazioni LIMIT ".$primo.",".$perpage;
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo "<table class='table table-hover' id='id_table'>";
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
        echo"</table>";
        echo"<nav><ul class='pagination'>";

        for($i=1; $i<=$tot_pagine; $i++)
        {
            echo'<li><a href="Log.php?page='.$i.'">'.$i.'</a></li>';
        }

        echo"</ul></nav>";
}
else
{
    include("Logout.php");
}