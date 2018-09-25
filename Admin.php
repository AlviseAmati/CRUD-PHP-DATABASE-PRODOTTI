<?php  session_start(); if($_SESSION['Verifica'] == 1 && $_SESSION['Ruolo'] == 'Amministratore')
{ ?>
<!DOCTYPE html>
<!--<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/Sorter.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/Research.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/AJAX.js"></script> 
</head>
-->
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/Sorter.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/Research.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/AJAX.js"></script> 
</head>
<body>
<nav class="navbar navbar-inverse" id="navigation">
    <form class="form-inline">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Menu Admin</a>
            </div>
            <div class="container">
            <ul class="nav navbar-form navbar-right">
                <button class ='navbar-right btn btn-primary' name='LogOut' onclick='LogOut();'><span class='glyphicon glyphicon-log-out'></span></button>    <div class="container" style="align-right" id="mostra">                                
            </ul>
            </div>
        </div>
    </form>
    </nav>
</body>
<!--<button type='submit' class='btn btn-primary' name='LogOut' data-toggle='modal'  onclick='LogOut()'><span class='glyphicon glyphicon-log-out'></span></button>    <div class="container" style="align-right" id="mostra"> -->                     
<br>
<h2 align='center'>
<a href="Crud.php"> Prodotti </a>
<br> <br>
<a href="CrudMagazzini.php">Magazzini</a>
<br> <br>
<a href="CrudUtenti.php">Utenti</a>
<br> <br>
<a href="CrudRuoli.php">Ruoli</a>
<br> <br>
<a href="Log.php">Log</a>
</h2>
<p id="prova" class="hidden"></p>
<?php } 
else
{
    echo "<script language='JavaScript'>\n"; 
    //echo "alert('Accesso negato: torna indietro');\n"; 
    echo"window.location.href = 'Login.php';";
    echo "</script>"; 
}?>
</html>