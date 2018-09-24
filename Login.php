<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" >
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<form action="PassaggioLogin.php" method="POST">
    <div class="row" align="center">
        <div class="col-xs-11" align="center"><h1>INSERISCI I DATI</h1></div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-xs-offset-1" >                 
            <div class="form-group">
                <label for="username">Username</label>
                <input name="username" type="text" class="form-control" id="username" placeholder="Inserisci qui il tuo nome utente" required>
            </div>
            <div class="form-group">
                <label for="username">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Inserisci qui la tua password" required>
            </div>
            <button type="submit" class="btn btn-primary"> Accedi </button>
        </div>
    </div>
</form>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
if (isset($_GET['errore']))
{
    $errore= $_GET["errore"];
    if($errore == 1)
    {
         echo "<div class='container'><div class='form-control' align=center>Login fallito, password o username errate</div></div>" ;  
    }
    else if($errore==2)
    {
    echo "<div class='container'><div class='form-control' align=center>Login fallito, non sei abilitato </div></div>" ;    
    }
}
?>